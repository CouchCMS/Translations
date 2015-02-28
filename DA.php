<?php

    if ( !defined('K_COUCH_DIR') ) die(); // cannot be loaded directly

    // Danish translation courtesy Gitte Olsen (http://www.couchcms.com/forum/memberlist.php?mode=viewprofile&u=18304)

    ///////////EDIT BELOW THIS////////////////////////////////////////

    // Header
    $t['greeting'] = 'Hej';
    $t['view_site'] = 'Se side';
    $t['logout'] = 'Log ud';
    $t['javascript_msg'] = 'JavaScript er deaktiveret eller understøttes ikke af denne browser.<br/>
                            Opdater venligst din browser <a title="Enable JavaScript in your browser" href="http://www.google.com/support/bin/answer.py?answer=23852"><b>enable JavaScript</b></a> for at bruge administrationspanelet.';
    $t['add_new'] = 'Tilføj ny';
    $t['add_new_page'] = 'Tilføj ny side';
    $t['add_new_user'] = 'Tilføj ny bruger';
    $t['view'] = 'Se';
    $t['list'] = 'Liste';
    $t['edit'] = 'Redigér';
    $t['delete'] = 'Slet';
    $t['delete_selected'] = 'Slet valgte';
    $t['advanced_settings'] = 'Avancerede indstillinger';

    // Sidebar
    $t['comment'] = 'Kommentér';
    $t['comments'] = 'Kommentarer';
    $t['manage_comments'] = 'Administrer kommentarer';
    $t['users'] = 'Brugere';
    $t['manage_users'] = 'Adminstrer brugere';

    // List pages
    $t['view_all_folders'] = 'Se alle mapper';
    $t['filter'] = 'Filtrér';
    $t['showing'] = 'Vises';
    $t['title'] = 'Titel';
    $t['folder'] = 'Mappe';
    $t['date'] = 'Dato';
    $t['actions'] = 'Handlinger';
    $t['no_pages_found'] = 'Ingen sider blev fundet';
    $t['published'] = 'Offentlig';
    $t['unpublished'] = 'Privat';
    $t['confirm_delete_page'] = 'Er du sikker på du vil slette denne side'; // No question mark please
    $t['confirm_delete_selected_pages'] = 'Er du sikker på, du vil slette de valgte sider?';
    $t['remove_template'] = 'Fjern skabelon';
    $t['template_missing'] = 'Skabelon mangler';
    $t['prev'] = 'Forrige'; // Pagination button
    $t['next'] = 'Næste'; // Pagination button

    // Pages
    $t['welcome'] = 'Velkommen';
    $t['no_regions_defined'] = 'Der er ikke defineret nogen områder, der kan redigeres';
    $t['no_templates_defined'] = 'Ingen skabeloner administreres af dette CMS';
    $t['access_level'] = 'Adgangsniveau';
    $t['superadmin'] = 'Super Admin';
    $t['admin'] = 'Administrater';
    $t['authenticated_user_special'] = 'Godkendt bruger (Speciel)';
    $t['authenitcated_user'] = 'Godkendt bruger';
    $t['unauthenticated_user'] = 'Alle';
    $t['allow_comments'] = 'Tillad brugere at kommentere';
    $t['status'] = 'Status';
    $t['name'] = 'Navn';
    $t['title_desc'] = 'Lad feltet være tomt, så laves navnet automatisk ud fra titlen';
    $t['required'] = 'Påkrævet'; // Required field
    $t['required_msg'] = 'Påkrævet felt skal udfyldes';
    $t['browse_server'] = 'Gennemse server';
    $t['view_image'] = 'Se billede';
    $t['thumb_created_auto'] = 'Bliver lavet automatisk';
    $t['recreate'] = 'Genskab';
    $t['thumb_recreated'] = 'Miniature genskabt';
    $t['crop_from'] = 'Beskåret fra';
    $t['top_left'] = 'Øverst til venstre';
    $t['top_center'] = 'Øverst i midten';
    $t['top_right'] = 'Øverst til højre';
    $t['middle_left'] = 'Midten til venstre';
    $t['middle'] = 'Midten';
    $t['middle_right'] = 'Midten til højre';
    $t['bottom_left'] = 'Nederst til venstre';
    $t['bottom_center'] = 'Nederst i midten';
    $t['bottom_right'] = 'Nederst til højre';
    $t['view_thumbnail'] = 'Se miniature';
    $t['field_not_found'] = 'Felt blev ikke fundet!';
    $t['delete_permanently'] = 'Slet permanent?';
    $t['view_code'] = 'Se kode';
    $t['confirm_delete_field'] = 'Er du sikker på du vil slette dette felt permanent?';
    $t['save'] = 'Gem';

    // Comments
    $t['all'] = 'Alle';
    $t['unapprove'] = 'Fjern godkendelse';
    $t['unapproved'] = 'Ikke godkendt';
    $t['approve'] = 'Godkend';
    $t['approved'] = 'Godkendt';
    $t['select-deselect'] = 'Vælg/fravælg alle';
    $t['confirm_delete_comment'] = 'Er du sikker på, du vil slette denne kommentar?';
    $t['confirm_delete_selected_comments'] = 'Er du sikke på at du vil slette de valgte kommentarer?';
    $t['bulk_action'] = 'Gennemfør handling med valgte';
    $t['apply'] = 'Anvend';
    $t['submitted_on'] = 'Sendt den';
    $t['email'] = 'E-Mail';
    $t['website'] = 'Website';
    $t['duplicate_content'] = 'Kopier indhold';
    $t['insufficient_interval'] = 'For kort tid siden sidste kommentar';

    // Users
    $t['user_name_restrictions'] = 'Kun små bogstaver, tal, bindestreg og underscore accepteres';
    $t['display_name'] = 'Kaldenavn';
    $t['role'] = 'Rolle';
    $t['no_users_found'] = 'Ingen brugere fundet';
    $t['confirm_delete_user'] = 'Er du sikker på, at du vil slette bruger'; // No question mark please
    $t['confirm_delete_selected_users'] = 'Er du sikker på, at du vil slette de valgte brugere?';
    $t['disabled'] = 'Deaktiveret';
    $t['new_password'] = 'Nyt kodeord';
    $t['new_password_msg'] = 'Hvis du vil ændre kodeordet, så skriv det, ellers lad feltet være tomt';
    $t['repeat_password'] = 'Gentag kodeord';
    $t['repeat_password_msg'] = 'Skriv dit nye kodeord igen.';
    $t['user_name_exists'] = 'Brugernavn findes allerede';
    $t['email_exists'] = 'E-mail findes allerede';

    // Login
    $t['user_name'] = 'Brugernavn';
    $t['password'] = 'Kodeord';
    $t['login'] = 'Log ind';
    $t['forgot_password'] = 'Har du glemt dit kodeord?';
    $t['prompt_cookies'] = 'Cookies skal være aktiveret for at bruge dette CMS';
    $t['prompt_username'] = 'Skriv venligst dit brugernavn';
    $t['prompt_password'] = 'Skriv venligst dit kodeord';
    $t['invalid_credentials'] = 'Ugyldigt brugernavn eller kodeord';
    $t['account_disabled'] = 'Konto spærret';
    $t['access_denied'] = 'Adgang nægtet';
    $t['insufficient_privileges'] = 'Du har ikke rettigheder til at se den anmodede side
                                    For at se denne side skal du logge ud og logge ind med de nødvendige rettigheder.';

    // Password recovery
    $t['recovery_prompt'] = 'Skriv venligst dit brugernavn eller email<br/>
                            Du vil modtage dit kodeord på mail.';
    $t['name_or_email'] = 'Dit brugernavn eller email';
    $t['submit'] = 'Send';
    $t['submit_error'] = 'Skriv venligst dit brugernavn eller email.';
    $t['no_such_user'] = 'Bruger findes ikke.';
    $t['reset_req_email_subject'] = 'Nulstilling af kodeord er blevet anmodet';
    $t['reset_req_email_msg_0'] = 'En anmodning om at nulstille dit kodeord på følgende webside og brugernavn';
    $t['reset_req_email_msg_1'] = 'Besøg venligst følgende link for at bekræfte at denne anmodning blev foretaget af dig. Har du ikke foretaget anmodningen så se venligst bort fra denne email';
    $t['email_failed'] = 'Email kunne ikke sendes.';
    $t['reset_req_email_confirm'] = 'En bekræftelsesmail er blevet sendt til dig<br/>
                                    Tjek venligst din email.';
    $t['invalid_key'] = 'Ugyldig nøgle';
    $t['reset_email_subject'] = 'Dit nye kodeord';
    $t['reset_email_msg_0'] = 'Dit kodeord er blevet nulstillet til følgende webside og brugernavn';
    $t['reset_email_msg_1'] = 'Når du logger ind, kan du ændre kodeordet.';
    $t['reset_email_confirm'] = 'Dit kodeord er blevet nulstillet<br/>
                                Tjek venligst din email for det nye kodeord.';

    // Maintenance Mode
    $t['back_soon'] = '<h2>Under opdatering</h2>
                        <p>
                            Vi beklager ulejligheden.<br/>
                            Vore webside er i gang med planlagt opdatering.<br/>
                            <b>Prøv venligst senere.</b>
                        </p>';


    // Addendum to Version 1.1 /////////////////////////////////////
    // Admin Panel
    $t['admin_panel'] = 'Administrationspanel';
    $t['login_title'] = 'CouchCMS';

    // Folders
    $t['no_folders'] = 'Ingen mapper';
    $t['select_folder'] = 'Vælg mappe';
    $t['folders'] = 'Mapper';
    $t['manage_folders'] = 'Administrer mapper';
    $t['add_new_folder'] = 'Tilføj ny mappe';
    $t['parent_folder'] = 'overliggende mappe';
    $t['weight'] = 'Rang';
    $t['weight_desc'] = 'Jo højere værdi des længere nede vil mappen blive placeret i listen. Værdien kan være negativ.';
    $t['desc'] = 'Beskrivelse';
    $t['image'] = 'Billede';
    $t['cannot_be_own_parent'] = 'Kan ikke være overliggende mappe for sig selv';
    $t['name_already_exists'] = 'Navnet findes allerede';
    $t['pages'] = 'Sider';
    $t['none'] = 'Ingen';
    $t['confirm_delete_folder'] = 'Er du sikker på du vil slette denne mappe'; // No question mark please
    $t['confirm_delete_selected_folders'] = 'Er du sikker på du vil slette de valgte foldere?';

    // Drafts
    $t['draft_caps'] = 'KLADDE'; // Upper case
    $t['draft'] = 'Kladde';
    $t['drafts'] = 'Kladder';
    $t['create_draft'] = 'Lav kladde';
    $t['create_draft_msg'] = 'Kopier denne side (efter ændringer er gemt)';
    $t['manage_drafts'] = 'Administrer kladder'; // Plural
    $t['update_original'] = 'Opdater Original';
    $t['update_original_msg'] = 'Kopier indholdet af kladden til den originale side(og slet udkast)';
    $t['recreate_original'] = 'Genskab original';
    $t['no_drafts_found'] = 'Ingen kladder blev fundet';
    $t['original_page'] = 'Original side';
    $t['template'] = 'kabelon';
    $t['modified'] = 'Ændret'; // Date of last modification
    $t['preview'] = 'Se eksempel';
    $t['confirm_delete_draft'] = 'Er du sikker på, du vil slette denne kladde?';
    $t['confirm_delete_selected_drafts'] = 'Er du sikker på, du vil slette de valgte kladder?';
    $t['confirm_apply_selected_drafts'] = 'Er du sikker på, du vil anvende de valgte kladder?';
    $t['view_all_drafts'] = 'Se alle kladder';
    $t['original_deleted'] = 'ORIGINAL SLETTET'; // Upper case

    // Addendum to Version 1.2 /////////////////////////////////////
    // Nested Pages
    $t['parent_page'] = 'Overliggende side';
    $t['page_weight_desc'] = 'Jo højere værdi des længere nede vil siden blive placeret i listen. Værdien kan være negativ.';
    $t['active'] = 'Aktiv';
    $t['inactive'] = 'Inaktiv';
    $t['menu'] = 'Menu';
    $t['menu_text'] = 'Menu Tekst';
    $t['show_in_menu'] = 'Vis i menu';
    $t['not_shown_in_menu'] = 'Vises ikke i menu';
    $t['leave_empty'] = 'Lad det være tomt for at bruge sidens titel';
    $t['menu_link'] = 'Menu link';
    $t['link_url'] = 'Denne side fører til følgende placering';
    $t['link_url_desc'] = 'Kan være tomt';
    $t['separate_window'] = 'Åbn i separat vindue';
    $t['pointer_page'] = 'Pointer Page';
    $t['points_to_another_page'] = 'Fører til en anden side';
    $t['points_to'] = 'Færer til';
    $t['redirects'] = 'Redelegering';
    $t['masquerades'] = 'Maskér';
    $t['strict_matching'] = 'Marker som valgt i menu for alle sider under dette link';
    $t['up'] = 'Flyt op';
    $t['down'] = 'Flyt ned';
    $t['remove_template_completely'] = 'Slet alle sider og kladder fra denne skabelon og fjern den helt';
    $t['remove_uncloned_template_completely'] = 'Slet alle kladder fra denne skabelon og fjern den helt';

    // Addendum to Version 1.2.5 /////////////////////////////////////
    // Gallery
    $t['bulk_upload'] = 'Upload';
    $t['folder_empty'] = 'Mappen er tom. Brug upload for at tilføje billeder.';
    $t['root'] = 'Hovedmappe (root)';
    $t['item'] = 'Billede'; // Single
    $t['items'] = 'Billeder'; // Multiple
    $t['container'] = 'Mappe'; // Single
    $t['containers'] = 'Mapper'; // Multiple

    //
    $t['columns_missing'] = 'Kolonner mangler!';
    $t['confirm_delete_columns'] = 'Er du sikker på du vil slette de manglende kolonner?';
    $t['add_row'] = 'Tilføj række';
