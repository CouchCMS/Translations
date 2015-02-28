<?php

    if ( !defined('K_COUCH_DIR') ) die(); // cannot be loaded directly

    // Italian translation courtesy fabioferrero (http://www.couchcms.com/forum/memberlist.php?mode=viewprofile&u=18412)

    ///////////EDIT BELOW THIS////////////////////////////////////////

    // Header
    $t['greeting'] = 'Ciao';
    $t['view_site'] = 'Vedi sito';
    $t['logout'] = 'Logout';
    $t['javascript_msg'] = 'JavaScript è disattivato o non supportato dal tuo browser.<br/>
                            Per favore aggiornalo o <a title="abilita javascript nel tuo browser" href="http://www.google.com/support/bin/answer.py?answer=23852"><b>enable JavaScript</b></a> per usare il pannello di controllo.';
    $t['add_new'] = 'Aggiungi';
    $t['add_new_page'] = 'Nuova pagina';
    $t['add_new_user'] = 'Nuovo utente';
    $t['view'] = 'Vedi';
    $t['list'] = 'Lista';
    $t['edit'] = 'Modifica';
    $t['delete'] = 'Cancella';
    $t['delete_selected'] = 'Cancella selezionate';
    $t['advanced_settings'] = 'Impostazioni avanzate';

    // Sidebar
    $t['comment'] = 'Commento';
    $t['comments'] = 'Commenti';
    $t['manage_comments'] = 'Gestisci commenti';
    $t['users'] = 'Utenti';
    $t['manage_users'] = 'Gestisci utenti';

    // List pages
    $t['view_all_folders'] = 'Visualizza tutte le cartelle';
    $t['filter'] = 'Filtra';
    $t['showing'] = 'Mostra';
    $t['title'] = 'Titolo';
    $t['folder'] = 'Cartella';
    $t['date'] = 'Data';
    $t['actions'] = 'Azione';
    $t['no_pages_found'] = 'Nessuna pagina trovata';
    $t['published'] = 'Pubblicato';
    $t['unpublished'] = 'Non pubblicato';
    $t['confirm_delete_page'] = 'Sei sicuro di voler cancellare la pagina'; // No question mark please
    $t['confirm_delete_selected_pages'] = 'Sei sicuro di voler cancellare le pagine selezionate?';
    $t['remove_template'] = 'Rimuovi Template';
    $t['template_missing'] = 'Template mancante';
    $t['prev'] = 'Prec'; // Pagination button
    $t['next'] = 'Succ'; // Pagination button

    // Pages
    $t['welcome'] = 'Benvenuto';
    $t['no_regions_defined'] = 'Nessuna regione modificabile definita';
    $t['no_templates_defined'] = 'Nessun template gestito dal CMS';
    $t['access_level'] = 'Livello di accesso';
    $t['superadmin'] = 'Super Admin';
    $t['admin'] = 'Amministratore';
    $t['authenticated_user_special'] = 'Utente autenticato (Speciale)';
    $t['authenitcated_user'] = 'Utente autenticato';
    $t['unauthenticated_user'] = 'Tutti';
    $t['allow_comments'] = 'Permetti i commenti';
    $t['status'] = 'Stato';
    $t['name'] = 'Nome';
    $t['title_desc'] = 'lascia questo campo vuoto per utilizzare il nome generato automaticamente dal titolo';
    $t['required'] = 'obbligatorio'; // Required field
    $t['required_msg'] = 'Il campo obbligatorio non può essere lasciato vuoto';
    $t['browse_server'] = 'Sfoglia le immagini';
    $t['view_image'] = 'Visualizza immagini';
    $t['thumb_created_auto'] = 'Sarà creata automaticamente';
    $t['recreate'] = 'Ricrea';
    $t['thumb_recreated'] = 'Miniatura ricreata';
    $t['crop_from'] = 'tagliata da';
    $t['top_left'] = 'Alto Sinistra';
    $t['top_center'] = 'Alto Centrato';
    $t['top_right'] = 'Alto Destra';
    $t['middle_left'] = 'Centro Sinistra';
    $t['middle'] = 'Centro';
    $t['middle_right'] = 'Centro Destra';
    $t['bottom_left'] = 'Basso Sinistra';
    $t['bottom_center'] = 'Basso Centrato';
    $t['bottom_right'] = 'Basso Destra';
    $t['view_thumbnail'] = 'Vedi miniature';
    $t['field_not_found'] = 'Campo non trovato!';
    $t['delete_permanently'] = 'Cancella definitivamente?';
    $t['view_code'] = 'Vedi codice';
    $t['confirm_delete_field'] = 'Sei sicuro di voler cancellare definitivamente questo campo?';
    $t['save'] = 'Salva';

    // Comments
    $t['all'] = 'Tutti';
    $t['unapprove'] = 'Non approva';
    $t['unapproved'] = 'Non approvati';
    $t['approve'] = 'Approva';
    $t['approved'] = 'Approvati';
    $t['select-deselect'] = 'Seleziona/Deseleziona Tutti';
    $t['confirm_delete_comment'] = 'Sei sicuro di voler cancellare questo commento?';
    $t['confirm_delete_selected_comments'] = 'Sei sicuro di voler cancellare i commenti selezionati?';
    $t['bulk_action'] = 'Agisci sui selezionati';
    $t['apply'] = 'Applica';
    $t['submitted_on'] = 'Inviato il';
    $t['email'] = 'E-Mail';
    $t['website'] = 'Sito web';
    $t['duplicate_content'] = 'Duplica contenuto';
    $t['insufficient_interval'] = 'Intervallo insufficiente tra i commenti';

    // Users
    $t['user_name_restrictions'] = 'Sono permesse solo lettere minuscole, numeri, trattino e sottolineato';
    $t['display_name'] = 'Visualizza Nome';
    $t['role'] = 'Ruolo';
    $t['no_users_found'] = 'Nessun utente trovato';
    $t['confirm_delete_user'] = 'Sei sicuro di voler cancellare l\'utente'; // No question mark please
    $t['confirm_delete_selected_users'] = 'Sei sicuro di voler cancellare gli utenti selezionati?';
    $t['disabled'] = 'Disattivato';
    $t['new_password'] = 'Nuova password';
    $t['new_password_msg'] = 'Se vuoi modificare la password, digitane una nuova. Altrimenti lascialo bianco.';
    $t['repeat_password'] = 'Ripeti password';
    $t['repeat_password_msg'] = 'Inserisci di nuovo la tua nuova password.';
    $t['user_name_exists'] = 'Nome utente già esistente';
    $t['email_exists'] = 'E-Mail già esistente';

    // Login
    $t['user_name'] = 'Nome utente';
    $t['password'] = 'Password';
    $t['login'] = 'Entra';
    $t['forgot_password'] = 'Password dimenticata?';
    $t['prompt_cookies'] = 'I Cookies devono essere attivi per usare questo CMS';
    $t['prompt_username'] = 'Inserisci il tuo nome utente';
    $t['prompt_password'] = 'Inserisci la tua password';
    $t['invalid_credentials'] = 'Nome utente o password non validi';
    $t['account_disabled'] = 'Utente disattivato';
    $t['access_denied'] = 'Accesso rifiutato';
    $t['insufficient_privileges'] = 'Non hai privilegi sufficienti per visualizzare la pagina richiesta.
                                    Per vedere la pagina devi scollegarti e rientrare con i privilegi necessari.';

    // Password recovery
    $t['recovery_prompt'] = 'Inserisci il tuo nome utente o il tuo indirizzo email<br/>
                            Riceverai la tua password per email.';
    $t['name_or_email'] = 'Nome utente o E-mail';
    $t['submit'] = 'Invia';
    $t['submit_error'] = 'Inserisci il tuo nome utente o il tuo indirizzo email.';
    $t['no_such_user'] = 'Utente non esistente.';
    $t['reset_req_email_subject'] = 'Richiesto reset della password';
    $t['reset_req_email_msg_0'] = 'È stata ricevuta una richiesta di reset della password per il seguente sito e nome utente';
    $t['reset_req_email_msg_1'] = 'Per confermare che la richiesta sia tua, visita il seguente indirizzo, altrimenti ignora questa mail.';
    $t['email_failed'] = 'L\'E-Mail non può essere inviata.';
    $t['reset_req_email_confirm'] = 'Ti è stata inviata una email di conferma<br/>
                                    Per favore controlla la tua posta.';
    $t['invalid_key'] = 'Chiave non valida';
    $t['reset_email_subject'] = 'Nuova password';
    $t['reset_email_msg_0'] = 'La tua password è stata resettata per il seguente sito e nome utente';
    $t['reset_email_msg_1'] = 'Una volta collegato puoi cambiare la tua password.';
    $t['reset_email_confirm'] = 'La tua password è stata resettata<br/>
                                Controlla la tua email per la nuova password.';

    // Maintenance Mode
    $t['back_soon'] = '<h2>Sito in manutenzione</h2>
                        <p>
                            Scusateci per l\'inconveniente.<br/>
                            Il nostro sito è attualmente in manutenzione.<br/>
                            <b>Per favore, riprova tra qualche istante.</b>
                        </p>';


    // Addendum to Version 1.1 /////////////////////////////////////
    // Admin Panel
    $t['admin_panel'] = 'Pannello amministrazione';
    $t['login_title'] = 'CouchCMS';

    // Folders
    $t['no_folders'] = 'Nessuna cartella definita';
    $t['select_folder'] = 'Seleziona cartella';
    $t['folders'] = 'Cartelle';
    $t['manage_folders'] = 'Gestisci cartelle';
    $t['add_new_folder'] = 'Aggiungi cartella';
    $t['parent_folder'] = 'Cartella superiore';
    $t['weight'] = 'Peso';
    $t['weight_desc'] = 'Più alto è il valore, più in basso apparirà la cartella nella lista. Può essere negativo.';
    $t['desc'] = 'Descrizione';
    $t['image'] = 'Immagine';
    $t['cannot_be_own_parent'] = 'Non può essere sopra a se stessa';
    $t['name_already_exists'] = 'Nome già esistente';
    $t['pages'] = 'Pagine';
    $t['none'] = 'Nessuno';
    $t['confirm_delete_folder'] = 'Sei sicuro di voler cancellare la cartella'; // No question mark please
    $t['confirm_delete_selected_folders'] = 'Sei sicuro di voler cancellare le cartelle selezionate?';

    // Drafts
    $t['draft_caps'] = 'BOZZA'; // Upper case
    $t['draft'] = 'Bozza';
    $t['drafts'] = 'Bozze';
    $t['create_draft'] = 'Crea bozza';
    $t['create_draft_msg'] = 'Crea una copia di questa pagina (dopo aver salvato le modifiche)';
    $t['manage_drafts'] = 'Gestisci bozze'; // Plural
    $t['update_original'] = 'Aggiorna originale';
    $t['update_original_msg'] = 'Copia il contenuto di questa bozza nella pagina originale (e cancella la bozza)';
    $t['recreate_original'] = 'Ricrea l\'originale';
    $t['no_drafts_found'] = 'Nessuna bozza trovata';
    $t['original_page'] = 'Pagina originale';
    $t['template'] = 'Template';
    $t['modified'] = 'Modificata'; // Date of last modification
    $t['preview'] = 'Anteprima';
    $t['confirm_delete_draft'] = 'Sei sicuro di voler cancellare questa bozza?';
    $t['confirm_delete_selected_drafts'] = 'Sei sicuro di voler cancellare le bozze selezionate?';
    $t['confirm_apply_selected_drafts'] = 'Sei sicuro di voler applicare le bozze selezionate?';
    $t['view_all_drafts'] = 'Visualizza tutte le bozze';
    $t['original_deleted'] = 'ORIGINALE CANCELLATO'; // Upper case

    // Addendum to Version 1.2 /////////////////////////////////////
    // Nested Pages
    $t['parent_page'] = 'Pagina superiore';
    $t['page_weight_desc'] = 'Più alto è il valore, più in basso apparirà la cartella nella lista. Può essere negativo.';
    $t['active'] = 'Attivo';
    $t['inactive'] = 'Inattivo';
    $t['menu'] = 'Menu';
    $t['menu_text'] = 'Testo menu';
    $t['show_in_menu'] = 'Visualizza nel menu';
    $t['not_shown_in_menu'] = 'Non visualizzato nel menu';
    $t['leave_empty'] = 'Lascia vuoto per usare il titolo della pagina';
    $t['menu_link'] = 'Link menu';
    $t['link_url'] = 'Questa pagina punta ai seguenti url';
    $t['link_url_desc'] = 'Può essere lasciato vuoto';
    $t['separate_window'] = 'Apre in un\'altra finestra';
    $t['pointer_page'] = 'Pagina puntata';
    $t['points_to_another_page'] = 'Punta ad un\'altra pagina';
    $t['points_to'] = 'Punta a';
    $t['redirects'] = 'Redirige';
    $t['masquerades'] = 'Maschere';
    $t['strict_matching'] = 'Selezionata nel menu per tutte le pagine sotto a questo link';
    $t['up'] = 'Sposta sù';
    $t['down'] = 'Sposta giù';
    $t['remove_template_completely'] = 'Cancella tutte le pagine e le bozze di questo template per rimuovere completamente';
    $t['remove_uncloned_template_completely'] = 'Cancella tutte le bozze di questo template per rimuovere completamente';

    // Addendum to Version 1.2.5 /////////////////////////////////////
    // Gallery
    $t['bulk_upload'] = 'Carica';
    $t['folder_empty'] = 'Cartella vuota. Usa il bottone "Carica" per inviare delle immagini.';
    $t['root'] = 'Root';
    $t['item'] = 'immagine'; // Single
    $t['items'] = 'immagini'; // Multiple
    $t['container'] = 'cartella'; // Single
    $t['containers'] = 'cartelle'; // Multiple

    //
    $t['columns_missing'] = 'Mancano alcune colonne!';
    $t['confirm_delete_columns'] = 'Sei sicuro di voler cancellare le colonne mancanti?';
    $t['add_row'] = 'Aggiungi una riga';
