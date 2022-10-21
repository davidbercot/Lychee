<?php

/** @noinspection SpellCheckingInspection */

namespace App\Locale;

use App\Contracts\Language;

final class Greek implements Language
{
	public function code(): string
	{
		return 'el';
	}

	public function get_locale(): array
	{
		return [
			'USERNAME' => 'Óνομα χρήστη',
			'PASSWORD' => 'Κωδικός πρόσβασης',
			'ENTER' => 'Είσοδος',
			'CANCEL' => 'Άκυρο',
			'SIGN_IN' => 'Συνδεθείτε',
			'CLOSE' => 'Κλείσιμο',
			'SETTINGS' => 'Ρυθμίσεις',
			'SEARCH' => 'Αναζήτηση …',
			'MORE' => 'Περισσότερα',
			'DEFAULT' => 'Default',
			'GALLERY' => 'Gallery',

			'USERS' => 'Χρήστες',
			'CREATE' => 'Create',
			'REMOVE' => 'Remove',
			'SHARE' => 'Share',
			'U2F' => 'U2F',
			'NOTIFICATIONS' => 'Notifications',
			'SHARING' => 'Κοινή χρήση',
			'CHANGE_LOGIN' => 'Αλλαγή σύνδεσης',
			'CHANGE_SORTING' => 'Αλλαγή Ταξινόμησης',
			'SET_DROPBOX' => 'Ορίστε λογαριασμό Dropbox',
			'ABOUT_LYCHEE' => 'Περί Lychee',
			'DIAGNOSTICS' => 'Διαγνωστικά',
			'DIAGNOSTICS_GET_SIZE' => 'Request space usage',
			'LOGS' => 'Εμφάνιση Καταγραφών',
			'CLEAN_LOGS' => 'Clean Noise',
			'CLEAR' => 'Clear',
			'SIGN_OUT' => 'Αποσύνδεση',
			'UPDATE_AVAILABLE' => 'Διαθέσιμη Ενημέρωση!',
			'MIGRATION_AVAILABLE' => 'Migration available!',
			'CHECK_FOR_UPDATE' => 'Check for updates',
			'DEFAULT_LICENSE' => 'Προεπιλεγμένη άδεια για τις νέες μεταφορτώσεις:',
			'SET_LICENSE' => 'Ορισμός Άδειας',
			'SET_OVERLAY_TYPE' => 'Ορισμός Τύπου Overlay',
			'SET_MAP_PROVIDER' => 'Set OpenStreetMap tiles provider',
			'FULL_SETTINGS' => 'Full Settings',
			'UPDATE' => 'Update',
			'RESET' => 'Reset',
			'DISABLE_TOKEN_TOOLTIP' => 'Disable',
			'ENABLE_TOKEN' => 'Enable API token',
			'DISABLED_TOKEN_STATUS_MSG' => 'Disabled',
			'TOKEN_BUTTON' => 'API Token ...',
			'TOKEN_NOT_AVAILABLE' => 'You have already viewed this token.',
			'TOKEN_WAIT' => 'Wait ...',

			'SMART_ALBUMS' => 'Έξυπνα λευκώματα',
			'SHARED_ALBUMS' => 'Κοινόχρηστα λευκώματα',
			'ALBUMS' => 'Λευκώματα',
			'PHOTOS' => 'Εικόνες',
			'SEARCH_RESULTS' => 'Search results',

			'RENAME' => 'Μετονομασία',
			'RENAME_ALL' => 'Μετονομασία Επιλεγμένων',
			'MERGE' => 'Συγχώνευση',
			'MERGE_ALL' => 'Συγχώνευση Επιλεγμένων',
			'MAKE_PUBLIC' => 'Κάντε το Δημόσιο',
			'SHARE_ALBUM' => 'Κοινή χρήση Λευκώματος',
			'SHARE_PHOTO' => 'Κοινή χρήση Φωτογραφίας',
			'VISIBILITY_ALBUM' => 'Ορατότητα Λευκώματος',
			'VISIBILITY_PHOTO' => 'Ορατότητα Φωτογραφίας',
			'DOWNLOAD_ALBUM' => 'Λήψη Λευκώματος',
			'ABOUT_ALBUM' => 'Πληροφορίες Λευκώματος',
			'DELETE_ALBUM' => 'Διαγραφή Λευκώματος',
			'MOVE_ALBUM' => 'Μετακίνηση Λευκώματος',
			'FULLSCREEN_ENTER' => 'Εισέλθετε σε λειτουργία Πλήρης Οθόνης',
			'FULLSCREEN_EXIT' => 'Εξέλθετε από λειτουργία Πλήρης Οθόνης',

			'SHARING_ALBUM_USERS' => 'Share this album with users',
			'WAIT_FETCH_DATA' => 'Please wait while we get the data …',
			'SHARING_ALBUM_USERS_NO_USERS' => 'There are no users to share the album with',
			'SHARING_ALBUM_USERS_LONG_MESSAGE' => 'Select the users to share this album with',

			'DELETE_ALBUM_QUESTION' => 'Διαγραφή Λευκώματος και Φωτογραφιών',
			'KEEP_ALBUM' => 'Διατήρηση Λευκώματος',
			'DELETE_ALBUM_CONFIRMATION' => 'Είστε σίγουρη/ος πως θέλετε να διαγράψετε αυτό το λεύκωμα «%s» και όλες τις φωτογραφίες που περιέχει; Αυτή η ενέργεια δεν μπορεί να αναιρεθεί!',

			'DELETE_TAG_ALBUM_QUESTION' => 'Delete Album',
			'DELETE_TAG_ALBUM_CONFIRMATION' => 'Are you sure you want to delete the album «%s» (any photos inside will not be deleted)? This action can’t be undone!',

			'DELETE_ALBUMS_QUESTION' => 'Διαγραφή Λευκωμάτων και Φωτογραφιών',
			'KEEP_ALBUMS' => 'Διατήρηση Λευκωμάτων',
			'DELETE_ALBUMS_CONFIRMATION' => 'Είστε σίγουρη/ος πως θέλετε να διαγράψετε όλα %d τα επιλεγμένα λευκώματα και όλες τις φωτογραφίες που περιέχουν; Αυτή η ενέργεια δεν μπορεί να αναιρεθεί!',

			'DELETE_UNSORTED_CONFIRM' => 'Είστε σίγουρη/ος πως θέλετε να διαγράψετε όλες τις «Μη Ταξινομημένες» φωτογραφίες? Αυτή η ενέργεια δεν μπορεί να αναιρεθεί!',
			'CLEAR_UNSORTED' => 'Καθαρισμός των μη ταξινομημένων φωτογραφιών',
			'KEEP_UNSORTED' => 'Διατήρηση των Μη Ταξινομημένων',

			'EDIT_SHARING' => 'Επεξεργασία Κοινής Χρήσης',
			'MAKE_PRIVATE' => 'Κάντε το Ιδιωτικό',

			'CLOSE_ALBUM' => 'Κλείσιμο Λευκώματος',
			'CLOSE_PHOTO' => 'Κλείσιμο Φωτογραφίας',
			'CLOSE_MAP' => 'Close Map',

			'ADD' => 'Προσθήκη',
			'MOVE' => 'Μετακίνηση',
			'MOVE_ALL' => 'Μετακίνηση Επιλεγμένων',
			'DUPLICATE' => 'Κλώνοποίηση',
			'DUPLICATE_ALL' => 'Κλώνοποίηση Επιλεγμένων',
			'COPY_TO' => 'Αντιγραφή σε …',
			'COPY_ALL_TO' => 'Αντιγραφή Επιλεγμένων σε …',
			'DELETE' => 'Διαγραφή',
			'SAVE' => 'Save',
			'DELETE_ALL' => 'Διαγραφή Επιλεγμένων',
			'DOWNLOAD' => 'Λήψη',
			'DOWNLOAD_ALL' => 'Λήψη Επιλεγμένων',
			'UPLOAD_PHOTO' => 'Μεταφόρτωση Φωτογραφίας',
			'IMPORT_LINK' => 'Εισαγωγή από Σύνδεσμο',
			'IMPORT_DROPBOX' => 'Εισαγωγή από Dropbox',
			'IMPORT_SERVER' => 'Εισαγωγή από Εξυπηρετητή',
			'NEW_ALBUM' => 'Νέο Λεύκωμα',
			'NEW_TAG_ALBUM' => 'New Tag Album',
			'UPLOAD_TRACK' => 'Upload track',
			'DELETE_TRACK' => 'Delete track',

			'TITLE_NEW_ALBUM' => 'Εισάγετε έναν τίτλο για το νέο λεύκωμα:',
			'UNTITLED' => 'Χωρίς Τίτλο',
			'UNSORTED' => 'Μη Ταξινομημένα',
			'STARRED' => 'Με Αστέρι',
			'RECENT' => 'Πρόσφατα',
			'PUBLIC' => 'Δημόσια',
			'NUM_PHOTOS' => 'Φωτογραφίες',

			'CREATE_ALBUM' => 'Δημιουργία Λευκώματος',
			'CREATE_TAG_ALBUM' => 'Create Tag Album',

			'STAR_PHOTO' => 'Βάλτε Αστέρι στη Φωτογραφία',
			'STAR' => 'Βάλτε Αστέρι',
			'UNSTAR' => 'Unstar',
			'STAR_ALL' => 'Βάλτε Αστέρι στα επιλεγμένα',
			'UNSTAR_ALL' => 'Unstar Selected',
			'TAG' => 'Ετικέτες',
			'TAG_ALL' => 'Ετικέτες στα επιλεγμένα',
			'UNSTAR_PHOTO' => 'Αφαιρέστε Αστέρια από τη Φωτογραφία',
			'SET_COVER' => 'Set Album Cover',
			'REMOVE_COVER' => 'Remove Album Cover',

			'FULL_PHOTO' => 'Πρωτότυπη Φωτογραφία',
			'ABOUT_PHOTO' => 'Πληροφορίες Φωτογραφίας',
			'DISPLAY_FULL_MAP' => 'Map',
			'DIRECT_LINK' => 'Απευθείας Σύνδεσμος',
			'DIRECT_LINKS' => 'Απευθείας Σύνδεσμοι',
			'QR_CODE' => 'QR Code',

			'ALBUM_ABOUT' => 'Περί',
			'ALBUM_BASICS' => 'Βασικές Πληροφορίες',
			'ALBUM_TITLE' => 'Τίτλος',
			'ALBUM_NEW_TITLE' => 'Εισάγετε έναν νέο τίτλο για αυτό το Λεύκωμα:',
			'ALBUMS_NEW_TITLE' => 'Εισάγετε νέο τίτλο για όλα %d τα επιλεγμένα λευκώματα:',
			'ALBUM_SET_TITLE' => 'Ορίστε Τίτλο',
			'ALBUM_DESCRIPTION' => 'Περιγραφή',
			'ALBUM_SHOW_TAGS' => 'Tags to show',
			'ALBUM_NEW_DESCRIPTION' => 'Εισάγετε μία νέα περιγραφή για αυτό το λεύκωμα:',
			'ALBUM_SET_DESCRIPTION' => 'Ορίστε Περιγραφή',
			'ALBUM_NEW_SHOWTAGS' => 'Enter tags of photos that will be visible in this album:',
			'ALBUM_SET_SHOWTAGS' => 'Set tags to show',
			'ALBUM_ALBUM' => 'Λεύκωμα',
			'ALBUM_CREATED' => 'Δημιουργήθηκε',
			'ALBUM_IMAGES' => 'Εικόνες',
			'ALBUM_VIDEOS' => 'Βίντεο',
			'ALBUM_SUBALBUMS' => 'Υπο-λευκώματα',
			'ALBUM_OWNER' => 'Owner',
			'ALBUM_SHARING' => 'Κοινή Χρήση',
			'ALBUM_SHR_YES' => 'ΝΑΙ',
			'ALBUM_SHR_NO' => 'Όχι',
			'ALBUM_PUBLIC' => 'Δημόσιο',
			'ALBUM_PUBLIC_EXPL' => 'Anonymous users can access this album, subject to the restrictions below.',
			'ALBUM_FULL' => 'Πρωτότυπο',
			'ALBUM_FULL_EXPL' => 'Anonymous users can behold full-resolution photos.',
			'ALBUM_HIDDEN' => 'Κρυφό',
			'ALBUM_HIDDEN_EXPL' => 'Anonymous users need a direct link to access this album.',
			'ALBUM_MARK_NSFW' => 'Mark album as sensitive',
			'ALBUM_UNMARK_NSFW' => 'Unmark album as sensitive',
			'ALBUM_NSFW' => 'Sensitive',
			'ALBUM_NSFW_EXPL' => 'Album is marked to contain sensitive content.',
			'ALBUM_DOWNLOADABLE' => 'Δυνατότητα Λήψης',
			'ALBUM_DOWNLOADABLE_EXPL' => 'Anonymous users can download this album.',
			'ALBUM_SHARE_BUTTON_VISIBLE' => 'Share button is visible',
			'ALBUM_SHARE_BUTTON_VISIBLE_EXPL' => 'Anonymous users can see social media sharing links.',
			'ALBUM_PASSWORD' => 'Κωδικός Πρόσβασης',
			'ALBUM_PASSWORD_PROT' => 'Προστατεύεται με κωδικό πρόσβασης',
			'ALBUM_PASSWORD_PROT_EXPL' => 'Anonymous users need a shared password to access this album.',
			'ALBUM_PASSWORD_REQUIRED' => 'Αυτό το λεύκωμα προστατεύεται με κωδικό πρόσβασης. Εισάγετε τον κωδικό πρόσβασης παρακάτω για να δείτε τις φωτογραφίες αυτού του λευκώματος:',
			'ALBUM_MERGE' => 'Είστε σίγουρη/ος πως θέλετε να συγχωνεύσετε αυτό το λεύκωμα «%1$s» σε αυτό το λεύκωμα «%2$s»?',
			'ALBUMS_MERGE' => 'Είστε σίγουρη/ος πως θέλετε να συγχωνεύσετε όλα τα επιλεγμένα λευκώματα «%s»?',
			'MERGE_ALBUM' => 'Συγχώνευση Λευκωμάτων',
			'DONT_MERGE' => 'Να μη γίνει συγχώνευση',
			'ALBUM_MOVE' => 'Είστε σίγουρη/ος πως θέλετε να μετακινήσετε το λεύκωμα «%1$s» σε αυτό το λεύκωμα «%2$s»?',
			'ALBUMS_MOVE' => 'Είστε σίγουρη/ος πως θέλετε να μετακινήσετε όλα τα επιλεγμένα λευκώματα σε αυτό το λεύκωμα «%s»?',
			'MOVE_ALBUMS' => 'Μετακίνηση Λευκωμάτων',
			'NOT_MOVE_ALBUMS' => 'Να μη γίνει μετακίνηση',
			'ROOT' => 'Λευκώματα',
			'ALBUM_REUSE' => 'Επαναχρησιμοποίηση',
			'ALBUM_LICENSE' => 'Άδεια',
			'ALBUM_SET_LICENSE' => 'Ορισμός Άδειας',
			'ALBUM_LICENSE_HELP' => 'Χρειάζεστε βοήθεια για την επιλογή άδειας;',
			'ALBUM_LICENSE_NONE' => 'Καμία',
			'ALBUM_RESERVED' => 'Με επιφύλαξη παντός δικαιώματος',
			'ALBUM_SET_ORDER' => 'Set Order',
			'ALBUM_ORDERING' => 'Order by',

			'PHOTO_ABOUT' => 'Περί',
			'PHOTO_BASICS' => 'Βασικές Πληροφορίες',
			'PHOTO_TITLE' => 'Τίτλος',
			'PHOTO_NEW_TITLE' => 'Εισάγετε έναν νέο τίτλο για αυτή τη φωτογραφία:',
			'PHOTO_SET_TITLE' => 'Ορισμός Τίτλου',
			'PHOTO_UPLOADED' => 'Μεταφορτώθηκε',
			'PHOTO_DESCRIPTION' => 'Περιγραφή',
			'PHOTO_NEW_DESCRIPTION' => 'Εισάγετε μία νέα περιγραφή για αυτή τη φωτογραφία:',
			'PHOTO_SET_DESCRIPTION' => 'Ορισμός Περιγραφής',
			'PHOTO_NEW_LICENSE' => 'Προσθήκη Άδειας',
			'PHOTO_SET_LICENSE' => 'Ορισμός Άδειας',
			'PHOTO_LICENSE' => 'Άδεια',
			'PHOTO_LICENSE_HELP' => 'Need help choosing?',
			'PHOTO_REUSE' => 'Επαναχρησιμοποίηση',
			'PHOTO_LICENSE_NONE' => 'Καμία',
			'PHOTO_RESERVED' => 'Με επιφύλαξη παντός δικαιώματος',
			'PHOTO_LATITUDE' => 'Γεωγραφικό πλάτος',
			'PHOTO_LONGITUDE' => 'Γεωγραφικό μήκος',
			'PHOTO_ALTITUDE' => 'Υψόμετρο',
			'PHOTO_IMGDIRECTION' => 'Κατεύθυνση',
			'PHOTO_LOCATION' => 'Location',
			'PHOTO_IMAGE' => 'Εικόνα',
			'PHOTO_VIDEO' => 'Video',
			'PHOTO_SIZE' => 'Μέγεθος',
			'PHOTO_FORMAT' => 'Μορφή',
			'PHOTO_RESOLUTION' => 'Ανάλυση',
			'PHOTO_DURATION' => 'Duration',
			'PHOTO_FPS' => 'Ρυθμός καρέ',
			'PHOTO_TAGS' => 'Ετικέτες',
			'PHOTO_NOTAGS' => 'Χωρίς Ετικέτες',
			'PHOTO_NEW_TAGS' => 'Εισάγετε τις ετικέτες σας για αυτή τη φωτογραφία. Μπορείτε να προσθέσετε πολλαπλές ετικέτες χωρίζοντάς ’τες με ένα κόμμα:',
			'PHOTOS_NEW_TAGS' => 'Εισάγετε τις ετικέτες σας για όλες %d τις επιλεγμένες φωγογραφίες. Υφιστάμενες ετικέτες θα αντικατασταθούν. Μπορείτε να προσθέσετε πολλαπλές ετικέτες χωρίζοντάς ’τες με ένα κόμμα:',
			'PHOTO_SET_TAGS' => 'Ορισμός Ετικετών',
			'PHOTO_CAMERA' => 'Κάμερα',
			'PHOTO_CAPTURED' => 'Φωτογραφήθηκε',
			'PHOTO_MAKE' => 'Έτος Κατασκευής',
			'PHOTO_TYPE' => 'Τύπος/Μοντέλο',
			'PHOTO_LENS' => 'Lens',
			'PHOTO_SHUTTER' => 'Ταχύτητα Κλείστρου',
			'PHOTO_APERTURE' => 'Διάφραγμα',
			'PHOTO_FOCAL' => 'Εστιακό μήκος',
			'PHOTO_ISO' => 'ISO %s',
			'PHOTO_SHARING' => 'Κοινή Χρήση',
			'PHOTO_SHR_PUBLIC' => 'Δημόσια',
			'PHOTO_SHR_ALB' => 'Ναι (Λεύκωμα)',
			'PHOTO_SHR_PHT' => 'Ναι (Φωτογραφία)',
			'PHOTO_SHR_NO' => 'Όχι',
			'PHOTO_DELETE' => 'Διαγραφή Φωτογραφίας',
			'PHOTO_KEEP' => 'Να μη γίνει διαγραφή',
			'PHOTO_DELETE_CONFIRMATION' => 'Είστε σίγουρη/ος πως θέλετε να διαγράψετε αυτή τη φωτογραφία «%s»? Αυτή η ενέργεια δεν μπορεί να αναιρεθεί!',
			'PHOTO_DELETE_ALL' => 'Είστε σίγουρη/ος πως θέλετε να διαγράψετε όλες %d τις επιλεγμένες φωτογραφίες; Αυτή η ενέργεια δεν μπορεί να αναιρεθεί!',
			'PHOTOS_NEW_TITLE' => 'Εισάγετε νέο τίτλο για όλες %d τις επιλεγμένες φωτογραφίες:',
			'PHOTO_MAKE_PRIVATE_ALBUM' => 'Αυτή η φωτογραφία βρίσκεται σε ένα δημόσιο λεύκωμα. Για να κάνετε αυτή τη φωτογραφία ιδιωτική ή δημόσια, επεξεργαστείτε τις ρυθμίσεις ορατότητας του συσχετιζόμενου Λευκώματος.',
			'PHOTO_SHOW_ALBUM' => 'Εμφάνιση Λευκώματος',
			'PHOTO_PUBLIC' => 'Δημόσια',
			'PHOTO_PUBLIC_EXPL' => 'Anonymous users can view this photo, subject to the restrictions below.',
			'PHOTO_FULL' => 'Πρωτότυπη',
			'PHOTO_FULL_EXPL' => 'Anonymous users can behold full-resolution photo.',
			'PHOTO_HIDDEN' => 'Hidden',
			'PHOTO_HIDDEN_EXPL' => 'Anonymous users need a direct link to view this photo.',
			'PHOTO_DOWNLOADABLE' => 'Δυνατότητα Λήψης',
			'PHOTO_DOWNLOADABLE_EXPL' => 'Anonymous users may download this photo.',
			'PHOTO_SHARE_BUTTON_VISIBLE' => 'Share button is visible',
			'PHOTO_SHARE_BUTTON_VISIBLE_EXPL' => 'Anonymous users can see social media sharing links.',
			'PHOTO_PASSWORD_PROT' => 'Προστατεύεται με κωδικό πρόσβασης',
			'PHOTO_PASSWORD_PROT_EXPL' => 'Anonymous users need a shared password to view this photo.',
			'PHOTO_EDIT_SHARING_TEXT' => 'Οι ιδιότητες κοινής χρήσης αυτής της φωτογραφίας θα αλλάξουν στις ακόλουθες:',
			'PHOTO_NO_EDIT_SHARING_TEXT' => 'Επειδή αυτή η φωτογραφία βρίσκεται σε ένα δημόσιο λεύκωμα, κληρονομεί τις ρυθμίσεις ορατότητας του λευκώματος στο οποίο ανήκει. Η τρέχουσα ορατότητά της φαίνεται παρακάτω για ενημερωτικούς λόγους μόνο.',
			'PHOTO_EDIT_GLOBAL_SHARING_TEXT' => 'Η ορατότητα αυτής της φωτογραφίας μπορεί να ρυθμιστεί με μεγαλύτερη λεπτομέρεια χρησιμοποιώντας τις γενικές ρυθμίσεις του Lychee. Η τρέχουσα ορατότητά της φαίνεται παρακάτω για ενημερωτικούς λόγους μόνο.',

			'LOADING' => 'Φορτώνει',
			'ERROR' => 'Σφάλμα',
			'ERROR_TEXT' => 'Ουπς, φαίνεται πως κάτι πήγε στραβά. Παρακαλούμε κάντε ανανέωση της σελίδας και προσπαθήστε ξανά!',
			'ERROR_UNKNOWN' => 'Κάτι απρόσμενο συνέβη. Παρακαλούμε προσπαθείστε ξανά και ελέγξτε την εγκατάστασή σας και τον εξυπηρετητή. Ρίξτε μια ματιά στο αρχείο readme για περισσότερες πληροφορίες.',
			'ERROR_LOGIN' => 'Αδυναμία αποθήκευσης στοιχείων εισόδου. Παρακαλούμε δοκιμάστε ξανά με διαφορετικό όνομα χρήστη και κωδικό πρόσβασης!',
			'ERROR_MAP_DEACTIVATED' => 'Map functionality has been deactivated under settings.',
			'ERROR_SEARCH_DEACTIVATED' => 'Search functionality has been deactivated under settings.',
			'SUCCESS' => 'OK',
			'RETRY' => 'Προσπάθεια ξανά',
			'OVERRIDE' => 'Override',
			'TAGS_OVERRIDE_INFO' => 'If this is unchecked, the tags will be added to the existing tags of the photo.',

			'SETTINGS_SUCCESS_LOGIN' => 'Τα στοιχεία εισόδου ενημερώθηκαν.',
			'SETTINGS_SUCCESS_SORT' => 'Η Ταξινόμηση ενημερώθηκε.',
			'SETTINGS_SUCCESS_DROPBOX' => 'Το κλειδί για το Dropbox ενημερώθηκε.',
			'SETTINGS_SUCCESS_LANG' => 'Η γλώσσα ενημερώθηκε',
			'SETTINGS_SUCCESS_LAYOUT' => 'Η διάταξη ενημερώθηκε',
			'SETTINGS_SUCCESS_IMAGE_OVERLAY' => 'Οι ρυθμίσεις επιφάνειας EXIF ενημερώθηκαν',
			'SETTINGS_SUCCESS_PUBLIC_SEARCH' => 'Η δημόσια αναζήτηση ενημερώθηκε',
			'SETTINGS_SUCCESS_LICENSE' => 'Η προεπιλεγμένη άδεια ενημερώθηκε',
			'SETTINGS_SUCCESS_MAP_DISPLAY' => 'Οι ρυθμίσεις εμφάνισης χάρτη ενημερώθηκαν',
			'SETTINGS_SUCCESS_MAP_DISPLAY_PUBLIC' => 'Map display settings for public albums updated',
			'SETTINGS_SUCCESS_MAP_PROVIDER' => 'Map provider settings updated',
			'SETTINGS_SUCCESS_CSS' => 'Stylesheets updated',
			'SETTINGS_SUCCESS_UPDATE' => 'Settings updated successfully',
			'SETTINGS_DROPBOX_KEY' => 'Dropbox API Key',
			'SETTINGS_ADVANCED_WARNING_EXPL' => 'Changing these advanced settings can be harmful to the stability, security and performance of this application. You should only modify them if you are sure of what you are doing.',
			'SETTINGS_ADVANCED_SAVE' => 'Save my modifications, I accept the risk!',

			'U2F_NOT_SUPPORTED' => 'U2F not supported. Sorry.',
			'U2F_NOT_SECURE' => 'Environment not secured. U2F not available.',
			'U2F_REGISTER_KEY' => 'Register new device.',
			'U2F_REGISTRATION_SUCCESS' => 'Registration successful!',
			'U2F_AUTHENTIFICATION_SUCCESS' => 'Authentication successful!',
			'U2F_CREDENTIALS' => 'Credentials',
			'U2F_CREDENTIALS_DELETED' => 'Credentials deleted!',

			'NEW_PHOTOS_NOTIFICATION' => 'Send new photos notification emails.',
			'SETTINGS_SUCCESS_NEW_PHOTOS_NOTIFICATION' => 'New photos notification updated',
			'USER_EMAIL_INSTRUCTION' => 'Add your email below to enable receiving email notifications. To stop receiving emails, simply remove your email below.',

			'LOGIN_TITLE' => 'Εισάγετε ένα όνομα χρήστη και κωδικό πρόσβασης για την εγκατάστασή σας:',
			'LOGIN_USERNAME' => 'Νέο όνομα χρήστη',
			'LOGIN_PASSWORD' => 'Νέος κωδικός πρόσβασης',
			'LOGIN_PASSWORD_CONFIRM' => 'Επιβεβαίωση κωδικού πρόσβασης',
			'LOGIN_CREATE' => 'Δημιουργία στοιχείων εισόδου',

			'PASSWORD_TITLE' => 'Εισάγετε τον τρέχον κωδικό πρόσβασης:',
			'PASSWORD_CURRENT' => 'Τρέχον κωδικός πρόσβασης',
			'PASSWORD_TEXT' => 'Το όνομα χρήστη και ο κωδικός πρόσβασής σας θα αλλάξουν στα παρακάτω:',
			'PASSWORD_CHANGE' => 'Αλλαγή στοιχείων εισόδου',

			'EDIT_SHARING_TITLE' => 'Επεξεργασία κοινής χρήσης',
			'EDIT_SHARING_TEXT' => 'Οι ιδιότητες κοινής χρήσης αυτού του λευκώματος θα αλλάξουν στις παρακάτω:',
			'SHARE_ALBUM_TEXT' => 'Αυτό το λεύκωμα θα κοινοποιείται με τις παρακάτω ιδιότητες:',

			'SORT_DIALOG_ATTRIBUTE_LABEL' => 'Attribute',
			'SORT_DIALOG_ORDER_LABEL' => 'Order',

			'SORT_ALBUM_BY' => 'Ταξινόμηση λευκωμάτων κατά %1$s με %2$s σειρά.',

			'SORT_ALBUM_SELECT_1' => 'Ημερομηνία Δημιουργίας',
			'SORT_ALBUM_SELECT_2' => 'Τίτλος',
			'SORT_ALBUM_SELECT_3' => 'Περιγραφή',
			'SORT_ALBUM_SELECT_4' => 'Δημόσιο',
			'SORT_ALBUM_SELECT_5' => 'Νεότερη Ημερομηνία Λήψης',
			'SORT_ALBUM_SELECT_6' => 'Παλαιότερη Ημερομηνία Λήψης',

			'SORT_PHOTO_BY' => 'Ταξινόμηση Φωτογραφιών κατά %1$s με %2$s σειρά.',

			'SORT_PHOTO_SELECT_1' => 'Ημερομηνία Μεταφόρτωσης',
			'SORT_PHOTO_SELECT_2' => 'Ημερομηνία Λήψης',
			'SORT_PHOTO_SELECT_3' => 'Τίτλος',
			'SORT_PHOTO_SELECT_4' => 'Περιγραφή',
			'SORT_PHOTO_SELECT_5' => 'Δημόσιο',
			'SORT_PHOTO_SELECT_6' => 'Αστέρια',
			'SORT_PHOTO_SELECT_7' => 'Μορφή Φωτογραφίας',

			'SORT_ASCENDING' => 'Αύξουσα',
			'SORT_DESCENDING' => 'Φθίνουσα',
			'SORT_CHANGE' => 'Αλλαγή Ταξινόμησης',

			'DROPBOX_TITLE' => 'Ορισμός Κλειδιού Dropbox',
			'DROPBOX_TEXT' => "Για να μπορέσουμε να εισάγουμε φωτογραφίες από το δικό σας Dropbox, θα χρειαστείτε ένα έγκυρο κλειδί drop-ins app από <a href='https://www.dropbox.com/developers/apps/create'>την ιστοσελίδα του Dropbox</a>. Παράγετε ένα προσωπικό κλειδί και εισάγετέ το παρακάτω:",

			'LANG_TEXT' => 'Αλλαγή γλώσσας του Lychee για:',
			'LANG_TITLE' => 'Αλλαγή Γλώσσας',

			'CSS_TEXT' => 'Personalize CSS:',
			'CSS_TITLE' => 'Change CSS',
			'PUBLIC_SEARCH_TEXT' => 'Να επιτρέπεται η δημόσια αναζήτηση:',
			'OVERLAY_TYPE' => 'Δεδομένα που θα χρησιμοποιηθούν στο overlay εικόνας:',
			'OVERLAY_NONE' => 'None',
			'OVERLAY_EXIF' => 'EXIF δεδομένα φωτογραφίας',
			'OVERLAY_DESCRIPTION' => 'Περιγραφή φωτογραφίας',
			'OVERLAY_DATE' => 'Ημερομηνία λήψης της φωτογραφίας',
			'MAP_DISPLAY_TEXT' => 'Εμφάνιση συντεταγμένων στον χάρτη (OpenStreetMap):',
			'MAP_DISPLAY_PUBLIC_TEXT' => 'Enable maps for public albums (provided by OpenStreetMap):',
			'MAP_PROVIDER' => 'Provider of OpenStreetMap tiles:',
			'MAP_PROVIDER_WIKIMEDIA' => 'Wikimedia',
			'MAP_PROVIDER_OSM_ORG' => 'OpenStreetMap.org (no HiDPI)',
			'MAP_PROVIDER_OSM_DE' => 'OpenStreetMap.de (no HiDPI)',
			'MAP_PROVIDER_OSM_FR' => 'OpenStreetMap.fr (no HiDPI)',
			'MAP_PROVIDER_RRZE' => 'University of Erlangen, Germany (only HiDPI)',
			'MAP_INCLUDE_SUBALBUMS_TEXT' => 'Include photos of subalbums on map:',
			'LOCATION_DECODING' => 'Decode GPS data into location name',
			'LOCATION_SHOW' => 'Show location name',
			'LOCATION_SHOW_PUBLIC' => 'Show location name for public mode',

			'LAYOUT_TYPE' => 'Διάταξη φωτογραφιών:',
			'LAYOUT_SQUARES' => 'Τετράγωνες μικρογραφίες',
			'LAYOUT_JUSTIFIED' => 'Με ίσες αναλογίες',
			'LAYOUT_UNJUSTIFIED' => 'Με άνισες αναλογίες',
			'SET_LAYOUT' => 'Αλλαγή διάταξης',

			'NSFW_VISIBLE_TEXT_1' => 'Make Sensitive albums visible by default.',
			'NSFW_VISIBLE_TEXT_2' => 'If the album is public, it is still accessible, just hidden from the view and <b>can be revealed by pressing <kbd>H</kbd></b>.',
			'SETTINGS_SUCCESS_NSFW_VISIBLE' => 'Default sensitive album visibility updated with success.',

			'VIEW_NO_RESULT' => 'Κανένα αποτέλεσμα',
			'VIEW_NO_PUBLIC_ALBUMS' => 'Κανένα δημόσιο λεύκωμα',
			'VIEW_NO_CONFIGURATION' => 'Καμία ρύθμιση',
			'VIEW_PHOTO_NOT_FOUND' => 'Η φωτογραφία δεν βρέθηκε',

			'NO_TAGS' => 'Καμία ετικέτα',

			'UPLOAD_MANAGE_NEW_PHOTOS' => 'Μπορείτε τώρα να διαχειριστείτε τις νέες φωτογραφίες σας.',
			'UPLOAD_COMPLETE' => 'Η μεταφόρτωση ολοκληρώθηκε',
			'UPLOAD_COMPLETE_FAILED' => 'Αποτυχία μεταφόρτωσης μιας ή περισσότερων φωτογραφιών.',
			'UPLOAD_IMPORTING' => 'Γίνεται εισαγωγή',
			'UPLOAD_IMPORTING_URL' => 'Εισαγωγή URL',
			'UPLOAD_UPLOADING' => 'Γίνεται μεταφόρτωση',
			'UPLOAD_FINISHED' => 'Ολοκληρώθηκε',
			'UPLOAD_PROCESSING' => 'Γίνεται επεξεργασία',
			'UPLOAD_FAILED' => 'Απέτυχε',
			'UPLOAD_FAILED_ERROR' => 'Η μεταφόρτωση απέτυχε. Ο εξυπηρετητής επέστρεψε ένα σφάλμα!',
			'UPLOAD_FAILED_WARNING' => 'Η μεταφόρτωση απέτυχε. Ο εξυπηρετητής επέστρεψε μία προειδοποίηση!',
			'UPLOAD_CANCELLED' => 'Cancelled',
			'UPLOAD_SKIPPED' => 'Παραλείφθηκε',
			'UPLOAD_UPDATED' => 'Updated',
			'UPLOAD_GENERAL' => 'General',
			'UPLOAD_IMPORT_SKIPPED_DUPLICATE' => 'This photo has been skipped because it’s already in your library.',
			'UPLOAD_IMPORT_RESYNCED_DUPLICATE' => 'This photo has been skipped because it’s already in your library, but its metadata has been updated.',
			'UPLOAD_ERROR_CONSOLE' => 'Παρακαλούμε ρίξτε μια ματιά στην κονσόλα του περιηγητή σας για περισσότερες λεπτομέρειες.',
			'UPLOAD_UNKNOWN' => 'Ο εξυπηρετητής επέστρεψε μία άγνωστη απόκριση. Παρακαλούμε ρίξτε μια ματιά στην κονσόλα του περιηγητή σας για περισσότερες λεπτομέρειες.',
			'UPLOAD_ERROR_UNKNOWN' => 'Η μεταφόρτωση απέτυχε. Ο εξυπηρετητής επέστρεψε ένα άγνωστο σφάλμα!',
			'UPLOAD_ERROR_POSTSIZE' => 'Upload failed. The PHP post_max_size may be too small! Otherwise check the FAQ.',
			'UPLOAD_ERROR_FILESIZE' => 'Upload failed. The PHP upload_max_filesize may be too small! Otherwise check the FAQ.',
			'UPLOAD_IN_PROGRESS' => 'Το Lychee αυτή τη στιγμή μεταφορτώνει!',
			'UPLOAD_IMPORT_WARN_ERR' => 'Η εισαγωγή ολοκληρώθηκε, αλλά επέστρεψε προειδοποιήσεις ή σφάλματα. Παρακαλούμε ρίξτε μια ματία στις καταγραφές (Ρυθμίσεις -> Εμφάνιση Καταγραφών) για περισσότερες λεπτομέρειες.',
			'UPLOAD_IMPORT_COMPLETE' => 'Η εισαγωγή ολοκληρώθηκε',
			'UPLOAD_IMPORT_INSTR' => 'Παρακαλούμε εισάγετε τον απευθείας σύνδεσμο μιας φωτογραφίας για να την εισάγετε:',
			'UPLOAD_IMPORT' => 'Εισαγωγή',
			'UPLOAD_IMPORT_SERVER' => 'Γίνεται εισαγωγή από εξυπηρετητή',
			'UPLOAD_IMPORT_SERVER_FOLD' => 'Ο φάκελος είναι άδειος ή μη αναγνώσιμα αρχεία προς επεξεργασία. Παρακαλούμε ρίξτε μια ματία στις καταγραφές (Ρυθμίσεις -> Εμφάνιση Καταγραφών) για περισσότερες λεπτομέρειες.',
			'UPLOAD_IMPORT_SERVER_INSTR' => 'Import all photos, folders and sub-folders located in the folders with the following absolute paths (on server). Paths are space separated, use \\ to escape a space in a path.',
			'UPLOAD_ABSOLUTE_PATH' => 'Absolute path to directories, space separated',
			'UPLOAD_IMPORT_SERVER_EMPT' => 'Δεν ήταν δυνατό να ξεκινήσει η διαδικασία εισαγωγής, διότι ο κατάλογος ήταν άδειος!',
			'UPLOAD_IMPORT_DELETE_ORIGINALS' => 'Διαγραφή πρωτότυπων',
			'UPLOAD_IMPORT_DELETE_ORIGINALS_EXPL' => 'Αν είναι εφικτό τα πρωτότυπα αρχεία θα διαγραφούν αφού ολοκληρωθεί η εισαγωγή τους.',
			'UPLOAD_IMPORT_VIA_SYMLINK' => 'Symbolic links',
			'UPLOAD_IMPORT_VIA_SYMLINK_EXPL' => 'Import files using symbolic links to originals.',
			'UPLOAD_IMPORT_SKIP_DUPLICATES' => 'Skip duplicates',
			'UPLOAD_IMPORT_SKIP_DUPLICATES_EXPL' => 'Existing media files are skipped.',
			'UPLOAD_IMPORT_RESYNC_METADATA' => 'Re-sync metadata',
			'UPLOAD_IMPORT_RESYNC_METADATA_EXPL' => 'Update metadata of existing media files.',
			'UPLOAD_IMPORT_LOW_MEMORY_EXPL' => 'Η διεργασία εισαγωγής στον εξυπηρετητή πλησιάζει τα όρια μνήμης και μπορεί να τερματιστεί πρόωρα.',
			'UPLOAD_WARNING' => 'Προειδοποίηση',
			'UPLOAD_IMPORT_NOT_A_DIRECTORY' => 'Η δοθείσα διαδρομή δεν είναι ένας αναγνώσιμος κατάλογος!',
			'UPLOAD_IMPORT_PATH_RESERVED' => 'Η δοθείσα διαδρομή χρησιμοποιείται από το Lychee!',
			'UPLOAD_IMPORT_FAILED' => 'Δεν ήταν δυνατή η εισαγωγή του αρχείου!',
			'UPLOAD_IMPORT_UNSUPPORTED' => 'Μη υποστηριζόμενος τύπος αρχείου!',
			'UPLOAD_IMPORT_CANCELLED' => 'Import cancelled',

			'ABOUT_SUBTITLE' => 'Αυτό-φιλοξενούμενη διαχείριση φωτογραφιών καμωμένη σωστά',
			'ABOUT_DESCRIPTION' => '<a target=\'_blank\' href=\'%s\'>Lychee</a> είναι ένα δωρεάν εργαλείο διαχείρισης φωτογραφιών, το οποίο "τρέχει" στον δικό σας εξυπηρετητή ή δικτυακό-χώρο. Εγκαθίσταται σε μερικά δευτερόλεπτα. Μεταφορτώστε, διαχειριστείτε και κοινοποιήστε φωτογραφίες σαν από εγκατεστημένη εφαρμογή. Το Lychee παρέχεται με όλες τις λειτουργίες που χρειάζεστε και όλες οι φωτογραφίες σας είναι αποθηκευμένες με ασφάλεια.',
			'FOOTER_COPYRIGHT' => 'Όλες οι εικόνες σε αυτή την ιστοσελίδα υπόκεινται σε πνευματικά δικαιώματα από %1$s &copy; %2$s',
			'HOSTED_WITH_LYCHEE' => 'Φιλοξενείται από το Lychee',

			'URL_COPY_TO_CLIPBOARD' => 'Αντιγραφή στο πρόχειρο',
			'URL_COPIED_TO_CLIPBOARD' => 'Η διεύθυνση URL αντιγράφηκε στο πρόχειρο!',
			'PHOTO_DIRECT_LINKS_TO_IMAGES' => 'Απευθείας σύνδεσμοι στα αρχεία εικόνων:',
			'PHOTO_MEDIUM' => 'Μέτρια',
			'PHOTO_MEDIUM_HIDPI' => 'Μέτρια HiDPI',
			'PHOTO_SMALL' => 'Μικρογραφία',
			'PHOTO_SMALL_HIDPI' => 'Μικρογραφία HiDPI',
			'PHOTO_THUMB' => 'Τετράγωνη Μικρογραφία',
			'PHOTO_THUMB_HIDPI' => 'Τετράγωνη Μικρογραφία HiDPI',
			'PHOTO_THUMBNAIL' => 'Photo thumbnail',
			'PHOTO_LIVE_VIDEO' => 'Video part of live-photo',
			'PHOTO_VIEW' => 'Lychee Προβολή Φωτογραφιών:',

			'PHOTO_EDIT_ROTATECWISE' => 'Rotate clockwise',
			'PHOTO_EDIT_ROTATECCWISE' => 'Rotate counter-clockwise',

			'ERROR_GPX' => 'Error loading GPX file: ',
			'ERROR_EITHER_ALBUMS_OR_PHOTOS' => 'Please select either albums or photos!',
			'ERROR_COULD_NOT_FIND' => 'Could not find what you want.',
			'ERROR_INVALID_EMAIL' => 'Not a valid email address.',
			'EMAIL_SUCCESS' => 'Email updated!',
			'ERROR_PHOTO_NOT_FOUND' => 'Error: photo %s not found !',
			'ERROR_EMPTY_USERNAME' => 'new username cannot be empty.',
			'ERROR_PASSWORD_DOES_NOT_MATCH' => 'new password does not match.',
			'ERROR_EMPTY_PASSWORD' => 'new password cannot be empty.',
			'ERROR_SELECT_ALBUM' => 'Select an album to share!',
			'ERROR_SELECT_USER' => 'Select a user to share with!',
			'ERROR_SELECT_SHARING' => 'Select a sharing to remove!',
			'SHARING_SUCCESS' => 'Sharing updated!',
			'SHARING_REMOVED' => 'Sharing removed!',
			'USER_CREATED' => 'User created!',
			'USER_DELETED' => 'User deleted!',
			'USER_UPDATED' => 'User updated!',
			'ENTER_EMAIL' => 'Enter your email address:',
			'ERROR_ALBUM_JSON_NOT_FOUND' => 'Error: Album json not found!',
			'ERROR_ALBUM_NOT_FOUND' => 'Error: album %s not found',
			'ERROR_DROPBOX_KEY' => 'Error: Dropbox key not set',
			'ERROR_SESSION' => 'Session expired.',
			'CAMERA_DATE' => 'Camera date',
			'NEW_PASSWORD' => 'new password',
			'ALLOW_UPLOADS' => 'Allow uploads',
			'RESTRICTED_ACCOUNT' => 'Restricted account',
			'OSM_CONTRIBUTORS' => 'OpenStreetMap contributors',
		];
	}
}
