<?php

namespace App\Actions\Album;

use App\DTO\AlbumProtectionPolicy;
use App\Exceptions\Internal\FrameworkException;
use App\Exceptions\InvalidPropertyException;
use App\Exceptions\ModelDBException;
use App\Models\Extensions\BaseAlbum;
use Illuminate\Contracts\Container\BindingResolutionException;
use Illuminate\Support\Facades\Hash;

/**
 * Class SetProtectionPolicy.
 */
class SetProtectionPolicy extends Action
{
	/**
	 * @param BaseAlbum             $album
	 * @param AlbumProtectionPolicy $protectionPolicy
	 * @param bool                  $shallSetPassword
	 * @param string|null           $password
	 *
	 * @return void
	 *
	 * @throws InvalidPropertyException
	 * @throws ModelDBException
	 * @throws FrameworkException
	 */
	public function do(BaseAlbum $album, AlbumProtectionPolicy $protectionPolicy, bool $shallSetPassword, ?string $password): void
	{
		// Security attributes of the album itself independent of a particular user
		// Note: The first one (`is_public`) will become implicit in the future when the following three attributes are
		// move to a separate table for sharing albums with anonymous users
		$album->is_public = $protectionPolicy->is_public;
		$album->is_link_required = $protectionPolicy->is_link_required;
		$album->is_nsfw = $protectionPolicy->is_nsfw;

		// (Future) permissions on an album-user relation.
		// Note: For the time being these are still "globally" defined on the album for all users, but they will be
		// moved to a separate table for sharing albums with users.
		$album->grants_download = $protectionPolicy->grants_download;
		$album->grants_full_photo_access = $protectionPolicy->grants_full_photo_access;

		// Set password if provided
		if ($shallSetPassword) {
			// password is provided => there is a change
			if ($password !== null) {
				// password is not null => we update the value with the hash
				try {
					$album->password = Hash::make($password);
				} catch (BindingResolutionException $e) {
					throw new FrameworkException('Laravel\'s hashing component', $e);
				}
			} else {
				// we remove the password
				$album->password = null;
			}
		}

		$album->save();

		// Reset permissions for photos
		if ($album->is_public) {
			$album->photos()->update(['photos.is_public' => false]);
		}
	}
}
