<?php

    if ( !defined('K_COUCH_DIR') ) die(); // cannot be loaded directly

    // Greek translation courtesy diktyo2001 (http://www.couchcms.com/forum/memberlist.php?mode=viewprofile&u=18207)

    ///////////EDIT BELOW THIS////////////////////////////////////////

    // Header
    $t['greeting'] = 'Γειά σας';
    $t['view_site'] = 'Δείτε τον Ιστοχώρο';
    $t['logout'] = 'Αποσύνδεση';
    $t['javascript_msg'] = 'Η JavaScript είναι απενεργοποιημένη ή δεν υποστηρίζεται από τον φυλλομετρητή σας.<br/>
                            Παρακαλώ αλλάξτε φυλλομετρητή ή <a title="Enable JavaScript in your browser" href="http://www.google.com/support/bin/answer.py?answer=23852"><b>ενεργοποίηση της JavaScript</b></a> γιά να χρησιμοποιήσετε το Πάνελ Διαχείρησης.';
    $t['add_new'] = 'Προσθήκη νέου';
    $t['add_new_page'] = 'Προσθήκη νέας σελίδας';
    $t['add_new_user'] = 'Προσθήκη νέου χρήστη';
    $t['view'] = 'Εμφάνιση';
    $t['list'] = 'Λίστα';
    $t['edit'] = 'Μεταβολή';
    $t['delete'] = 'Διαγραφή';
    $t['delete_selected'] = 'Διαγραφή Επιλεγμένων';
    $t['advanced_settings'] = 'Ρυθμίσεις γιά Προχωρημένους';

    // Sidebar
    $t['comment'] = 'Σχόλιο';
    $t['comments'] = 'Σχόλια';
    $t['manage_comments'] = 'Διαχείριση Σχολίων';
    $t['users'] = 'Χρήστες';
    $t['manage_users'] = 'Διαχείριση Χρηστών';

    // List pages
    $t['view_all_folders'] = 'Εμφάνιση όλων των φακέλων';
    $t['filter'] = 'Φίλτρο';
    $t['showing'] = 'Δείχνω';
    $t['title'] = 'Τίτλος';
    $t['folder'] = 'Φάκελος';
    $t['date'] = 'Ημερομηνία';
    $t['actions'] = 'Ενέργειες';
    $t['no_pages_found'] = 'Δεν βρέθηκαν σελίδες';
    $t['published'] = 'Δημοσιευμένο';
    $t['unpublished'] = 'Ξε-δημοσιευμένο';
    $t['confirm_delete_page'] = 'Σίγουρα θέλετε να διαγράψετε τη σελίδα'; // No question mark please
    $t['confirm_delete_selected_pages'] = 'Σίγουρα θέλετε να διαγράψετε τις επιλεγμένες σελίδες;';
    $t['remove_template'] = 'Αφαίρεση Προτύπου';
    $t['template_missing'] = 'Το Πρότυπο λείπει';
    $t['prev'] = 'Προηγούμενη'; // Pagination button
    $t['next'] = 'Επόμενη'; // Pagination button

    // Pages
    $t['welcome'] = 'Καλωσήλθατε';
    $t['no_regions_defined'] = 'Δεν ορίσθηκαν Μεταβαλόμενες Περιοχές';
    $t['no_templates_defined'] = 'Δεν βρέθηκαν πρότυπα που να διαχειρίζεται το CMS';
    $t['access_level'] = 'Επίπεδο πρόσβασης';
    $t['superadmin'] = 'Υπερ-Διαχειριστής';
    $t['admin'] = 'Διαχειριστής';
    $t['authenticated_user_special'] = 'Διαπιστευμένος Χρήστης (Ειδικός)';
    $t['authenitcated_user'] = 'Διαπιστευμένος Χρήστης';
    $t['unauthenticated_user'] = 'Ο καθένας';
    $t['allow_comments'] = 'Να επιτραπεί ο σχολιασμός από τους χρήστες';
    $t['status'] = 'Κατάσταση';
    $t['name'] = 'Όνομα';
    $t['title_desc'] = 'αφήστε το πεδίο κενό γιά να χρησιμοποιηθεί το όνομα που θα δημιουργήσει το σύστημα από τον τίτλο';
    $t['required'] = 'υποχρεωτικό'; // Required field
    $t['required_msg'] = 'Τα υποχρεωτικά πεδία δεν επιτρέπεται να είναι κενά';
    $t['browse_server'] = 'Αναζήτηση στον Διακομιστή';
    $t['view_image'] = 'Εμφάνιση Εικόνας';
    $t['thumb_created_auto'] = 'Θα δημιουργηθεί αυτόματα';
    $t['recreate'] = 'Επαναδημιουργία';
    $t['thumb_recreated'] = 'Η μικρογραφία ξαναδημιουργήθηκε';
    $t['crop_from'] = 'περικοπή από';
    $t['top_left'] = 'Άνω Αριστερά';
    $t['top_center'] = 'Άνω Κέντρο';
    $t['top_right'] = 'Άνω Δεξιά';
    $t['middle_left'] = 'Μέσο Αριστερά';
    $t['middle'] = 'Μέσο';
    $t['middle_right'] = 'Μέσο Δεξιά';
    $t['bottom_left'] = 'Κάτω Αριστερά';
    $t['bottom_center'] = 'Κάτω Κέντρο';
    $t['bottom_right'] = 'Κάτω Δεξιά';
    $t['view_thumbnail'] = 'Εμφάνιση Μικρογραφίας';
    $t['field_not_found'] = 'Το πεδίο δεν βρέθηκε!';
    $t['delete_permanently'] = 'Οριστική διαγραφή;';
    $t['view_code'] = 'Εμφάνιση Κώδικα';
    $t['confirm_delete_field'] = 'Σίγουρα θέλετε να διαγράψετε οριστικά αυτό το πεδίο;';
    $t['save'] = 'Αποθήκευση';

    // Comments
    $t['all'] = 'Όλα';
    $t['unapprove'] = 'Αναίρεση έγκρισης';
    $t['unapproved'] = 'Με ανηρημένη έγκριση';
    $t['approve'] = 'Έγκριση';
    $t['approved'] = 'Εγκεκριμμένο';
    $t['select-deselect'] = 'Επιλογή/Αποεπιλογή Όλων';
    $t['confirm_delete_comment'] = 'Σίγουρα θέλετε να διαγράψετε αυτό το σχόλιο;';
    $t['confirm_delete_selected_comments'] = 'Σίγουρα θέλετε να διαγράψετε τα επιλεγμένα σχόλια;';
    $t['bulk_action'] = 'Μαζική ενέργεια στα επιλεγμένα';
    $t['apply'] = 'Εφαρμογή';
    $t['submitted_on'] = 'Υποβλήθηκε την';
    $t['email'] = 'E-Mail';
    $t['website'] = 'Ιστοχώρος';
    $t['duplicate_content'] = 'Αναπαραγωγή περιεχομένου';
    $t['insufficient_interval'] = 'Δεν πέρασε αρκετός χρόνος ανάμεσα στα σχόλια';

    // Users
    $t['user_name_restrictions'] = 'Επιτρέπονται μόνον πεζά (Αγγλικά) γράμματα, αριθμοί, παύλα και υπογράμμιση';
    $t['display_name'] = 'Εμφανιζόμενο Όνομα';
    $t['role'] = 'Ρόλος';
    $t['no_users_found'] = 'Δεν βρέθηκε κανείς χρήστης';
    $t['confirm_delete_user'] = 'Σίγουρα θέλετε να διαγράψετε τον χρήστη'; // No question mark please
    $t['confirm_delete_selected_users'] = 'Σίγουρα θέλετε να διαγράψετε τους επιλεγμένους χρήστες;';
    $t['disabled'] = 'Απενεργοποιημένο';
    $t['new_password'] = 'Νέος Κωδικός';
    $t['new_password_msg'] = 'Αν θέλετε να αλλάξετε τον κωδικό, γράψτε έναν νέο. Αλλιώς αφήστε τον κενό.';
    $t['repeat_password'] = 'Επανάληψη Κωδικού';
    $t['repeat_password_msg'] = 'Γράψτε πάλι τον νέο σας κωδικό.';
    $t['user_name_exists'] = 'Το Όνομα Χρήστη υπάρχει ήδη';
    $t['email_exists'] = 'Το E-Mail υπάρχει ήδη';

    // Login
    $t['user_name'] = 'Όνομα Χρήστη';
    $t['password'] = 'Κωδικός';
    $t['login'] = 'Σύνδεση';
    $t['forgot_password'] = 'Ξεχάσατε τον κωδικό σας;';
    $t['prompt_cookies'] = 'Τα cookies πρέπει να είναι ενεργοποιημένα γιά να χρησιμοποιήσετε αυτό το CMS';
    $t['prompt_username'] = 'Παρακαλώ δώστε το όνομα χρήστη';
    $t['prompt_password'] = 'Παρακαλώ δώστε τον κωδικό σας';
    $t['invalid_credentials'] = 'Μη έγκυρο όνομα χρήστη ή κωδικός';
    $t['account_disabled'] = 'Ο λογαριασμός έχει απενεργοποιηθεί';
    $t['access_denied'] = 'Απαγορευμένη Πρόσβαση';
    $t['insufficient_privileges'] = 'Δεν έχετε επαρκή δικαιώματα γιά να δείτε τη σελίδα που ζητήθηκε.
                                    Γιά να δείτε αυτή τη σελίδα πρέπει να αποσυνδεθείτε και μετά να συνδεθείτε με άλλο λογαριασμό με επαρκή δικαιώματα.';

    // Password recovery
    $t['recovery_prompt'] = 'Παρακαλώ υποβάλετε το όνομα χρήστη ή τη διεύθυνση email που έχετε<br/>
                            Θα λάβετε τον κωδικό σας με email.';
    $t['name_or_email'] = 'Το Όνομά σας Χρήστη ή το E-mail σας';
    $t['submit'] = 'Υποβολή';
    $t['submit_error'] = 'Παρακαλώ δώστε το όνομα χρήστη ή τη διεύθυνση σας email.';
    $t['no_such_user'] = 'Δεν υπάρχει τέτοιος χρήστης.';
    $t['reset_req_email_subject'] = 'Ζητήθηκε αλλαγή κωδικού';
    $t['reset_req_email_msg_0'] = 'Ελήφθη μία αίτηση αλλαγής κωδικού γιά τον ακόλουθο ιστοχώρο και χρήστη';
    $t['reset_req_email_msg_1'] = 'Γιά να επιβεβαιώσετε οτι η αίτηση έγινε από εσάς παρακαλώ επισκεφθήτε την ακόλουθη διεύθυνση, αλλιώς αγνοήστε αυτό το email.';
    $t['email_failed'] = 'Το E-Mail δεν μπόρεσε να αποσταλεί.';
    $t['reset_req_email_confirm'] = 'Ένα email επιβεβαίωσης σας έχει αποσταλεί<br/>
                                    Παρακαλώ ελέγξατε την αλληλογραφία σας.';
    $t['invalid_key'] = 'Μη έγκυρο κλειδί';
    $t['reset_email_subject'] = 'Ο νέος σας κωδικός';
    $t['reset_email_msg_0'] = 'Ο κωδικός σας έχει αλλάξει γιά τον ακόλουθο ιστοχώρο και όνομα χρήστη';
    $t['reset_email_msg_1'] = 'Αφού συνδεθείτε μπορείτε να αλλάξετε τον κωδικό σας.';
    $t['reset_email_confirm'] = 'Ο κωδικός σας έχει αλλάξει<br/>
                                Παρακαλώ ελέγξατε το email σας γιά τον νέο κωδικό.';

    // Maintenance Mode
    $t['back_soon'] = '<h2>Συντήρηση Ιστοχώρου</h2>
                        <p>
                            Λυπούμαστε γιά την αναστάτωση.<br/>
                            Ο ιστοχώρος μας υφίσταται προγραμματισμένη συντήρηση.<br/>
                            <b>Παρακαλώ επισκεφθήτε μας πάλι μετά από λίγη ώρα.</b>
                        </p>';


    // Addendum to Version 1.1 /////////////////////////////////////
    // Admin Panel
    $t['admin_panel'] = 'Πάνελ Διαχειριστή';
    $t['login_title'] = 'CouchCMS';

    // Folders
    $t['no_folders'] = 'Δεν ορίστηκαν φάκελοι';
    $t['select_folder'] = 'Επιλογή Φακέλου';
    $t['folders'] = 'Φάκελοι';
    $t['manage_folders'] = 'Διαχείριση Φακέλων';
    $t['add_new_folder'] = 'Προσθήκη νέου φακέλου';
    $t['parent_folder'] = 'Γονικός Φάκελος';
    $t['weight'] = 'Βάρος';
    $t['weight_desc'] = 'Όσο υψηλότερη τιμή τόσο χαμηλώτερα θα εμφανίζεται ο φάκελος στη λίστα. Μπορεί να είναι και αρνητικό.';
    $t['desc'] = 'Περιγραφή';
    $t['image'] = 'Εικόνα';
    $t['cannot_be_own_parent'] = 'Δεν μπορεί να είναι γονέας του ευατού του';
    $t['name_already_exists'] = 'Το όνομα υπάρχει ήδη';
    $t['pages'] = 'Σελίδες';
    $t['none'] = 'Τίποτα';
    $t['confirm_delete_folder'] = 'Σίγουρα θέλετε να διαγράψετε τον φάκελο'; // No question mark please
    $t['confirm_delete_selected_folders'] = 'Σίγουρα θέλετε να διαγράψετε τους επιλεγμένους φακέλους;';

    // Drafts
    $t['draft_caps'] = 'ΠΡΟΧΕΙΡΟ'; // Upper case
    $t['draft'] = 'Πρόχειρο';
    $t['drafts'] = 'Πρόχειρα';
    $t['create_draft'] = 'Δημιουργία Προχείρου';
    $t['create_draft_msg'] = 'Δημιουργία αντιγράφου αυτής της σελίδας (μετά την αποθήκευση των αλλαγών)';
    $t['manage_drafts'] = 'Διαχείριση Προχείρων'; // Plural
    $t['update_original'] = 'Ενημέρωση Πρωτοτύπου';
    $t['update_original_msg'] = 'Αντιγραφή των περιεχομένων αυτού του προχείρου στην πρωτότυπη σελίδα (και διαγραφή του προχείρου)';
    $t['recreate_original'] = 'Αναδημιουργία Πρωτοτύπου';
    $t['no_drafts_found'] = 'Δεν βρέθηκαν πρόχειρα';
    $t['original_page'] = 'Πρωτότυπη σελίδα';
    $t['template'] = 'Πρότυπο';
    $t['modified'] = 'Μετεβλήθη την'; // Date of last modification
    $t['preview'] = 'Προεπισκόπηση';
    $t['confirm_delete_draft'] = 'Σίγουρα θέλετε να διαγράψετε αυτό το πρόχειρο;';
    $t['confirm_delete_selected_drafts'] = 'Σίγουρα θέλετε να διαγράψετε τα επιλεγμένα πρόχειρα;';
    $t['confirm_apply_selected_drafts'] = 'Σίγουρα θέλετε να εφαρμόσετε τα επιλεγμένα πρόχειρα;';
    $t['view_all_drafts'] = 'Εμφάνιση όλων των προχείρων';
    $t['original_deleted'] = 'ΤΟ ΠΡΩΤΟΤΥΠΟ ΔΙΕΓΡΑΦΗ'; // Upper case

    // Addendum to Version 1.2 /////////////////////////////////////
    // Nested Pages
    $t['parent_page'] = 'Γονική Σελίδα';
    $t['page_weight_desc'] = 'Όσο υψηλότερη τιμή τόσο χαμηλώτερα θα εμφανίζεται η σελίδα στη λίστα. Μπορεί να είναι και αρνητικό.';
    $t['active'] = 'Ενεργή';
    $t['inactive'] = 'Ανενεργή';
    $t['menu'] = 'Μενού';
    $t['menu_text'] = 'Κείμενο Μενού';
    $t['show_in_menu'] = 'Εμφανίζεται στο μενού';
    $t['not_shown_in_menu'] = 'Δεν εμφανίζεται στο μενού';
    $t['leave_empty'] = 'Αφήστε το κενό γιά να χρησιμοποιηθεί ο τίτλος της σελίδας';
    $t['menu_link'] = 'Σύνδεσμος Μενού';
    $t['link_url'] = 'Αυτή σελίδα δείχνει στην ακόλουθη τοποθεσία';
    $t['link_url_desc'] = 'Μπορεί να μείνει κενή';
    $t['separate_window'] = 'Άνοιγμα σε νέο παράθυρο';
    $t['pointer_page'] = 'Σελίδα Δείκτης';
    $t['points_to_another_page'] = 'Δείχνει σε μία άλλη σελίδα';
    $t['points_to'] = 'Δείχνει σε';
    $t['redirects'] = 'Ανακατευθύνει';
    $t['masquerades'] = 'Μεταμφιέζει';
    $t['strict_matching'] = 'Σημάδεψε ως επιλεγμένες στο μενού όλες τις σελίδες κάτω από αυτόν τον σύνδεσμο';
    $t['up'] = 'Μετακίνηση επάνω';
    $t['down'] = 'Μετακίνηση κάτω';
    $t['remove_template_completely'] = 'Διαγράψτε όλες τις σελίδες και τα  πρόχειρα αυτού του προτύπου γιά να το αφαιρέσετε εντελώς';
    $t['remove_uncloned_template_completely'] = 'Διαγράψτε όλα τα πρόχειρα αυτού του προτύπου γιά να το αφαιρέσετε εντελώς';

    // Addendum to Version 1.2.5 /////////////////////////////////////
    // Gallery
    $t['bulk_upload'] = 'Μεταφόρτωση';
    $t['folder_empty'] = 'Ο φάκελος είναι άδειος. Χρησιμοποιείστε το κουμπί μεταφόρτωσης από πάνω γιά να προσθέσετε εικόνες.';
    $t['root'] = 'Ρίζα (αρχικός φάκελος)';
    $t['item'] = 'εικόνα'; // Single
    $t['items'] = 'εικόνες'; // Multiple
    $t['container'] = 'φάκελος'; // Single
    $t['containers'] = 'φάκελοι'; // Multiple

    //
    $t['columns_missing'] = 'Μερικές στήλες λείπουν!';
    $t['confirm_delete_columns'] = 'Σίγουρα θέλετε να διαγράψετε οριστικά τις στήλες που λείπουν;';
    $t['add_row'] = 'Προσθήκη Γραμμής';
