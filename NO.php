<?php

    if ( !defined('K_COUCH_DIR') ) die(); // cannot be loaded directly

    // Norwegian translation courtesy Morgan Bro (http://www.couchcms.com/forum/memberlist.php?mode=viewprofile&u=18524)

    ///////////EDIT BELOW THIS////////////////////////////////////////

    // Header
    $t['greeting'] = 'Velkommen';
    $t['view_site'] = 'Vis nettsiden';
    $t['logout'] = 'Logg ut';
    $t['javascript_msg'] = 'JavaScript er deaktivert eller ikke støttes av nettleseren din.<br/>
                            Du må oppgradere din nettleser eller <a title="Aktiver JavaScript i nettleseren din" href="http://www.google.com/support/bin/answer.py?answer=23852"><b>aktiver JavaScript</b></a> å bruke administrasjonspanelet.';
    $t['add_new'] = 'Legg til ny';
    $t['add_new_page'] = 'Ny side';
    $t['add_new_user'] = 'Ny bruker';
    $t['view'] = 'Vis';
    $t['list'] = 'Liste';
    $t['edit'] = 'Rediger';
    $t['delete'] = 'Slett';
    $t['delete_selected'] = 'Slett markerte';
    $t['advanced_settings'] = 'Avanserte innstillinger';

    // Sidebar
    $t['comment'] = 'Kommentar';
    $t['comments'] = 'Kommentarer';
    $t['manage_comments'] = 'Administrer kommentarer';
    $t['users'] = 'Brukere';
    $t['manage_users'] = 'Administrer brukere';

    // List pages
    $t['view_all_folders'] = 'Vis alle mapper';
    $t['filter'] = 'Filter';
    $t['showing'] = 'Viser';
    $t['title'] = 'Tittel';
    $t['folder'] = 'Mapper';
    $t['date'] = 'Dato';
    $t['actions'] = 'Handlinger';
    $t['no_pages_found'] = 'Ingen sider funnet';
    $t['published'] = 'Publisert';
    $t['unpublished'] = 'Upublisert';
    $t['confirm_delete_page'] = 'Er du sikker på at du vil slette siden'; // No question mark please
    $t['confirm_delete_selected_pages'] = 'Bekreft at du vil slette sidene';
    $t['remove_template'] = 'Fjern mal';
    $t['template_missing'] = 'Mal mangler';
    $t['prev'] = 'Forrige'; // Pagination button
    $t['next'] = 'Neste'; // Pagination button

    // Pages
    $t['welcome'] = 'Velkommen';
    $t['no_regions_defined'] = 'Ingen regioner er definert';
    $t['no_templates_defined'] = 'Ingen maler er definert';
    $t['access_level'] = 'Brukernivå';
    $t['superadmin'] = 'Super Admin';
    $t['admin'] = 'Administrator';
    $t['authenticated_user_special'] = 'Registrert Bruker (Spesiell)';
    $t['authenitcated_user'] = 'Registrert Bruker';
    $t['unauthenticated_user'] = 'Uautorisert bruker';
    $t['allow_comments'] = 'Tillat kommentarer';
    $t['status'] = 'Status';
    $t['name'] = 'Navn';
    $t['title_desc'] = 'la dette feltet stå tomt for å bruke det systemgenererte navnet fra tittelen';
    $t['required'] = 'påkrevd'; // Required field
    $t['required_msg'] = 'Påkrevde felt kan ikke stå tomt';
    $t['browse_server'] = 'Utforsk server';
    $t['view_image'] = 'Vis Bilde';
    $t['thumb_created_auto'] = 'Vil bli laget automatisk';
    $t['recreate'] = 'Gjenskap';
    $t['thumb_recreated'] = 'Miniatyrbilde gjenskapt';
    $t['crop_from'] = 'beskjæring fra';
    $t['top_left'] = 'Øverst til venstre';
    $t['top_center'] = 'Øverst til midten';
    $t['top_right'] = 'Øverst til høyre';
    $t['middle_left'] = 'Midten til venstre';
    $t['middle'] = 'Midten';
    $t['middle_right'] = 'Midten til høyre';
    $t['bottom_left'] = 'Nederst til venstre';
    $t['bottom_center'] = 'Nederst til midten';
    $t['bottom_right'] = 'Nederst til høyre';
    $t['view_thumbnail'] = 'Vis miniatyrbilde';
    $t['field_not_found'] = 'Felt ikke funnet!';
    $t['delete_permanently'] = 'Slett permanent?';
    $t['view_code'] = 'Vis kode';
    $t['confirm_delete_field'] = 'Er du sikker på at du vil slette dette feltet permanent?';
    $t['save'] = 'Lagre';

    // Comments
    $t['all'] = 'Alle';
    $t['unapprove'] = 'Ikke godkjenne';
    $t['unapproved'] = 'Ikke godkjent';
    $t['approve'] = 'Godkjenne';
    $t['approved'] = 'Godkjent';
    $t['select-deselect'] = 'Velg/Fjern all markering';
    $t['confirm_delete_comment'] = 'Er du sikker på at du vil slette denne kommentaren?';
    $t['confirm_delete_selected_comments'] = 'Er du sikker på at du vil slette de markerte kommentarene?';
    $t['bulk_action'] = 'Bulk handling med valgt';
    $t['apply'] = 'Send';
    $t['submitted_on'] = 'Sendt inn på';
    $t['email'] = 'E-post';
    $t['website'] = 'Web side';
    $t['duplicate_content'] = 'duplisert innhold';
    $t['insufficient_interval'] = 'Ikke tilstrekkelig intervall mellom kommentarer';

    // Users
    $t['user_name_restrictions'] = 'Kun små bokstaver, tall, bindestrek og understrek er tillatt';
    $t['display_name'] = 'Visningsnavn';
    $t['role'] = 'Rolle';
    $t['no_users_found'] = 'Ingen brukere funnet';
    $t['confirm_delete_user'] = 'Er du sikker på at du vil slette bruker'; // No question mark please
    $t['confirm_delete_selected_users'] = 'Er du sikker på at du vil slette de markerte brukerene?';
    $t['disabled'] = 'Deaktivert';
    $t['new_password'] = 'Nytt passord';
    $t['new_password_msg'] = 'Hvis du ønsker å endre passordet, lag et nytt et. Ellers la dette stå tomt.';
    $t['repeat_password'] = 'Repeter passord';
    $t['repeat_password_msg'] = 'Skriv ditt nye passord igjen.';
    $t['user_name_exists'] = 'Brukernavn finnes allerede';
    $t['email_exists'] = 'E-post finnes allerede';

    // Login
    $t['user_name'] = 'Brukernavn';
    $t['password'] = 'Passord';
    $t['login'] = 'Logg inn';
    $t['forgot_password'] = 'Glemt passord?';
    $t['prompt_cookies'] = 'Cookies må være aktivert for å bruke dette CMS-et';
    $t['prompt_username'] = 'Fyll inn brukernavn';
    $t['prompt_password'] = 'Fyll inn passord';
    $t['invalid_credentials'] = 'Feil brukernavn eller passord';
    $t['account_disabled'] = 'Bruker deaktivert';
    $t['access_denied'] = 'Ingen tilgang';
    $t['insufficient_privileges'] = 'Du har ikke tilstrekkelige rettigheter til å vise den forespurte siden.
                                    For å se denne siden må du logge ut og inn med tilstrekkelige rettigheter.';

    // Password recovery
    $t['recovery_prompt'] = 'Vennligst skriv inn ditt brukernavn eller e-post<br/>
                            Du vil motta ditt passord på mail.';
    $t['name_or_email'] = 'Ditt brukernavn eller e-post';
    $t['submit'] = 'Send inn';
    $t['submit_error'] = 'Vennligst skriv inn ditt brukernavn eller e-post.';
    $t['no_such_user'] = 'Brukeren finnes ikke.';
    $t['reset_req_email_subject'] = 'Forespørsel av passord har blitt utført';
    $t['reset_req_email_msg_0'] = 'En forespørsel ble mottatt for å tilbakestille passordet for følgende nettsted og brukernavn';
    $t['reset_req_email_msg_1'] = 'For å bekrefte at forespørselen ble gjort av deg kan du gå til følgende adresse, ellers kan du bare ignorere denne e-posten.';
    $t['email_failed'] = 'E-post kunne ikke bli sendt.';
    $t['reset_req_email_confirm'] = 'En bekreftelse e-post har blitt sendt til deg<br/>
                                    Vennligst sjekk e-posten din.';
    $t['invalid_key'] = 'Feil nøkkel';
    $t['reset_email_subject'] = 'Ditt nye passord';
    $t['reset_email_msg_0'] = 'Ditt passord har blitt tilbakestilt for følgende nettsted og brukernavn';
    $t['reset_email_msg_1'] = 'Når du er logget inn, kan du endre passordet ditt.';
    $t['reset_email_confirm'] = 'Ditt passord har blitt tilbakestilt<br/>
                                Vennligst sjekk mailen din for nytt passord.';

    // Maintenance Mode
    $t['back_soon'] = '<h2>Vedlikeholdsmodus</h2>
                        <p>
                            Beklager det inntrufne.<br/>
                            Vårt nettsted er for tiden under planlagt vedlikehold.<br/>
                            <b>Vennligst prøv igjen etter et øyeblikk.</b>
                        </p>';


    // Addendum to Version 1.1 /////////////////////////////////////
    // Admin Panel
    $t['admin_panel'] = 'Adminpanel';
    $t['login_title'] = 'CouchCMS';

    // Folders
    $t['no_folders'] = 'Ingen valgte mapper';
    $t['select_folder'] = 'Velg mappe';
    $t['folders'] = 'Mapper';
    $t['manage_folders'] = 'Behandle mapper';
    $t['add_new_folder'] = 'Legg til ny mappe';
    $t['parent_folder'] = 'Ordnede mappen';
    $t['weight'] = 'Vekt';
    $t['weight_desc'] = 'Ved høyere verdi, lavere vil mappen vises i listen. Kan settes til negativ.';
    $t['desc'] = 'Beskrivelse';
    $t['image'] = 'Bilde';
    $t['cannot_be_own_parent'] = 'Kan ikke være overordnet over seg selv';
    $t['name_already_exists'] = 'Navnet eksisterer allerede';
    $t['pages'] = 'Sider';
    $t['none'] = 'Ingen';
    $t['confirm_delete_folder'] = 'Er du sikker på at du vil slette denne mappen'; // No question mark please
    $t['confirm_delete_selected_folders'] = 'Er du sikker på at du vil slette de markerte mappene';

    // Drafts
    $t['draft_caps'] = 'UTKAST'; // Upper case
    $t['draft'] = 'Utkast';
    $t['drafts'] = 'Utkast';
    $t['create_draft'] = 'Opprett utkast';
    $t['create_draft_msg'] = 'Lag en kopi av denne siden (etter å lagre endringer)';
    $t['manage_drafts'] = 'Behandle utklast'; // Plural
    $t['update_original'] = 'Oppdater Originalen';
    $t['update_original_msg'] = 'Kopier innholdet i dette utkastet til den opprinnelige siden (og slette utkast)';
    $t['recreate_original'] = 'Gjenskap originalen';
    $t['no_drafts_found'] = 'Ingen utkast funnet';
    $t['original_page'] = 'Original side';
    $t['template'] = 'Mail';
    $t['modified'] = 'Modifisert'; // Date of last modification
    $t['preview'] = 'Forhåndsvisning';
    $t['confirm_delete_draft'] = 'Er du sikker på at du vil slette dette utkastet?';
    $t['confirm_delete_selected_drafts'] = 'Er du sikker på at du vil slette de markerte utkastene?';
    $t['confirm_apply_selected_drafts'] = 'Er du sikker på at du vil bruke de markerte utkastene';
    $t['view_all_drafts'] = 'Vis alle utkast';
    $t['original_deleted'] = 'ORIGINAL SLETTET'; // Upper case

    // Addendum to Version 1.2 /////////////////////////////////////
    // Nested Pages
    $t['parent_page'] = 'Overordnet side';
    $t['page_weight_desc'] = 'Ved høyere verdi, lavere vil siden vises i listen. Kan settes til negativ.';
    $t['active'] = 'Aktiv';
    $t['inactive'] = 'Inaktiv';
    $t['menu'] = 'Meny';
    $t['menu_text'] = 'Menytekst';
    $t['show_in_menu'] = 'Vis i meny';
    $t['not_shown_in_menu'] = 'Ikke vist i menyen';
    $t['leave_empty'] = 'La stå tomt for å bruke sidetittel';
    $t['menu_link'] = 'Meny lenke';
    $t['link_url'] = 'Denne siden viser til følgende plassering';
    $t['link_url_desc'] = 'Kan være tom';
    $t['separate_window'] = 'Åpne i separert vindu';
    $t['pointer_page'] = 'Pekerside';
    $t['points_to_another_page'] = 'peker til en annen side';
    $t['points_to'] = 'Peker til';
    $t['redirects'] = 'omdirigeringer';
    $t['masquerades'] = 'maskerader';
    $t['strict_matching'] = 'Marker som er valgt i menyen, for alle sidene under denne linken';
    $t['up'] = 'Flytt opp';
    $t['down'] = 'Flytt ned';
    $t['remove_template_completely'] = 'Slett alle sider og utkast til denne malen for å fjerne det helt';
    $t['remove_uncloned_template_completely'] = 'Slett alle utkastene til denne malen for å fjerne det helt';

    // Addendum to Version 1.2.5 /////////////////////////////////////
    // Gallery
    $t['bulk_upload'] = 'Last opp';
    $t['folder_empty'] = 'Tom mappe. Vennligst bruk opplastingsknappen over for å legge til bilder.';
    $t['root'] = 'Root';
    $t['item'] = 'bilde'; // Single
    $t['items'] = 'bilder'; // Multiple
    $t['container'] = 'mappe'; // Single
    $t['containers'] = 'mapper'; // Multiple

    //
    $t['columns_missing'] = 'Noen kolonner mangler!';
    $t['confirm_delete_columns'] = 'Er du sikker på at du vil slette de manglende kolonnene permanent?';
    $t['add_row'] = 'Legg til ny rad';
