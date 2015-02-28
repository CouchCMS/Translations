<?php

    if ( !defined('K_COUCH_DIR') ) die(); // cannot be loaded directly

    // Croatian translation courtesy proteus (http://www.couchcms.com/forum/memberlist.php?mode=viewprofile&u=18676)

    ///////////EDIT BELOW THIS////////////////////////////////////////

    // Header
    $t['greeting'] = 'Pozdrav';
    $t['view_site'] = 'Pregled stranice';
    $t['logout'] = 'Odjava';
    $t['javascript_msg'] = 'JavaScript je onemogućen ili nije podržan u Vašem pregledniku.<br/>
                            Molimo nadogradite preglednik ili <a title="Omogućite JavaScript u vašem pregledniku" href="http://www.google.com/support/bin/answer.py?answer=23852"><b>omogućite JavaScript</b></a> da bi koristili administracijsko sučelje.';
    $t['add_new'] = 'Dodaj novo';
    $t['add_new_page'] = 'Nova stranica';
    $t['add_new_user'] = 'Novi korisnik';
    $t['view'] = 'Pregled';
    $t['list'] = 'Lista';
    $t['edit'] = 'Uredi';
    $t['delete'] = 'Izbriši';
    $t['delete_selected'] = 'Izbriši označeno';
    $t['advanced_settings'] = 'Napredne postavke';

    // Sidebar
    $t['comment'] = 'Komentar';
    $t['comments'] = 'Komentar';
    $t['manage_comments'] = 'Upravljanje komentarima';
    $t['users'] = 'Korisnici';
    $t['manage_users'] = 'Upravljanje korisnicima';

    // List pages
    $t['view_all_folders'] = 'Pogledaj sve direktorije';
    $t['filter'] = 'Filter';
    $t['showing'] = 'Prikazujem';
    $t['title'] = 'Naslov';
    $t['folder'] = 'Direktorij';
    $t['date'] = 'Datum';
    $t['actions'] = 'Radnje';
    $t['no_pages_found'] = 'Nema stranica';
    $t['published'] = 'Objavljeno';
    $t['unpublished'] = 'Neobjavljeno';
    $t['confirm_delete_page'] = 'Jeste li sigurni da želite izbrisati stranicu'; // No question mark please
    $t['confirm_delete_selected_pages'] = 'Jeste li sigurni da želite obrisati označene stranice?';
    $t['remove_template'] = 'Ukloni predložak';
    $t['template_missing'] = 'Nedostaje predložak';
    $t['prev'] = 'Prethodna'; // Pagination button
    $t['next'] = 'Sljedeća'; // Pagination button

    // Pages
    $t['welcome'] = 'Dobrodošli';
    $t['no_regions_defined'] = 'Uređivačke regije nisu definirane';
    $t['no_templates_defined'] = 'Nema predložaka kojima upravlja CMS';
    $t['access_level'] = 'Pristupni nivo';
    $t['superadmin'] = 'Super Admin';
    $t['admin'] = 'Administrator';
    $t['authenticated_user_special'] = 'Authenticated User (Special)';
    $t['authenitcated_user'] = 'Authenticated User';
    $t['unauthenticated_user'] = 'Everybody';
    $t['allow_comments'] = 'Dozvoli korisnicima komentiranje';
    $t['status'] = 'Status';
    $t['name'] = 'Ime';
    $t['title_desc'] = 'ostaviti ovo polje prazno jer sustav automatski generira ime iz naslova';
    $t['required'] = 'obavezno'; // Required field
    $t['required_msg'] = 'Obavezno polje ne može biti prazno';
    $t['browse_server'] = 'Pretraži server';
    $t['view_image'] = 'Pogledajte sliku';
    $t['thumb_created_auto'] = 'stvoriti će se automatski';
    $t['recreate'] = 'Ponovo stvori';
    $t['thumb_recreated'] = 'Sličica ponovo stvorena';
    $t['crop_from'] = 'obrezivanje iz';
    $t['top_left'] = 'Gore lijevo';
    $t['top_center'] = 'Gore centar';
    $t['top_right'] = 'Gore desno';
    $t['middle_left'] = 'Sredine lijevo';
    $t['middle'] = 'Sredine';
    $t['middle_right'] = 'Sredine desno';
    $t['bottom_left'] = 'Dolje lijevo';
    $t['bottom_center'] = 'Dolje centar';
    $t['bottom_right'] = 'Dolje desno';
    $t['view_thumbnail'] = 'Vidi sličicu';
    $t['field_not_found'] = 'Polje nije pronađeno!';
    $t['delete_permanently'] = 'Trajno brisanje?';
    $t['view_code'] = 'Pregled koda';
    $t['confirm_delete_field'] = 'Jeste li sigurni da želite trajno izbrisati ovo polje?';
    $t['save'] = 'Snimi';

    // Comments
    $t['all'] = 'Sve';
    $t['unapprove'] = 'Nemoj odobriti';
    $t['unapproved'] = 'Nije odobren';
    $t['approve'] = 'Odobri';
    $t['approved'] = 'Odobreno';
    $t['select-deselect'] = 'Odaberi/odustani od izbora svih';
    $t['confirm_delete_comment'] = 'Jeste li sigurni da želite obrisati ovaj komentar?';
    $t['confirm_delete_selected_comments'] = 'Jeste li sigurni da želite obrisati označene komentare?';
    $t['bulk_action'] = 'Skupno djelovanje s odabranim';
    $t['apply'] = 'Prihvati';
    $t['submitted_on'] = 'Podnesen na';
    $t['email'] = 'E-mail';
    $t['website'] = 'web stranica';
    $t['duplicate_content'] = 'Duplicirani sadržaj';
    $t['insufficient_interval'] = 'Nije dovoljan razmak između komentara';

    // Users
    $t['user_name_restrictions'] = 'Samo mala slova, brojke, crta i donja crta su dopušteni';
    $t['display_name'] = 'Prikaži ime';
    $t['role'] = 'Uloga';
    $t['no_users_found'] = 'Nema korisnika';
    $t['confirm_delete_user'] = 'Jeste li sigurni da želite izbrisati korisnika'; // No question mark please
    $t['confirm_delete_selected_users'] = 'Jeste li sigurni da želite obrisati označene korisnike?';
    $t['disabled'] = 'Onemogućen';
    $t['new_password'] = 'Nova lozinka';
    $t['new_password_msg'] = 'Ako želite promijeniti lozinku, upišite novu. Inače ostavite praznim.';
    $t['repeat_password'] = 'Ponovi lozinku';
    $t['repeat_password_msg'] = 'Ponovno upišite svoju novu lozinku.';
    $t['user_name_exists'] = 'Korisničko ime već postoji';
    $t['email_exists'] = 'E-mail već postoji';

    // Login
    $t['user_name'] = 'Korisničko ime';
    $t['password'] = 'Lozinka';
    $t['login'] = 'Prijava';
    $t['forgot_password'] = 'Zaboravili ste lozinku?';
    $t['prompt_cookies'] = 'Kolačići moraju biti omogućeni kako bi koristili CMS';
    $t['prompt_username'] = 'Molimo unesite svoje korisničko ime';
    $t['prompt_password'] = 'Unesite svoju lozinku';
    $t['invalid_credentials'] = 'Pogrešno korisničko ime ili lozinka';
    $t['account_disabled'] = 'Korisnički račun je onemogućen';
    $t['access_denied'] = 'Pristup zabranjen';
    $t['insufficient_privileges'] = 'Nemate dovoljno ovlasti za pregled tražene stranice.
                                    Da biste vidjeli ovu stranicu morate se odjaviti i prijaviti s dovoljnim ovlastima.';

    // Password recovery
    $t['recovery_prompt'] = 'Molimo dostavite svoje korisničko ime ili e-mail adresu<br/>
                            Dobit ćete lozinku putem e-maila.';
    $t['name_or_email'] = 'Vaše korisničko ime ili email';
    $t['submit'] = 'Pošalji';
    $t['submit_error'] = 'Molimo unesite svoje korisničko ime ili adresu e-pošte.';
    $t['no_such_user'] = 'Takvav korisnik ne postoji.';
    $t['reset_req_email_subject'] = 'Zatraženo resetiranje lozinke';
    $t['reset_req_email_msg_0'] = 'Zahtjev za resetiranjem vaše lozinku je zaprimljen za sljedeću stranicu i korisničko ime';
    $t['reset_req_email_msg_1'] = 'Da bi Vi potvrdili podneseni zahtjev posjetite sljedeću adresu, inače ignorirajte ovaj e-mail.';
    $t['email_failed'] = 'E-mail nije mogao biti poslan.';
    $t['reset_req_email_confirm'] = 'Vaš potvrdni email je poslan<br/>
                                    Molimo provjerite svoju e-poštu.';
    $t['invalid_key'] = 'Neispravan ključ';
    $t['reset_email_subject'] = 'Vaša nova lozinka';
    $t['reset_email_msg_0'] = 'Vaša lozinka je resetirana za sljedeću stranicu i korisničko ime';
    $t['reset_email_msg_1'] = 'Nakon što se prijavite možete promijeniti svoju lozinku.';
    $t['reset_email_confirm'] = 'Vaša lozinka je resetiranabr />
                                Provjerite Vašu e-poštu sa novom lozinkom.';

    // Maintenance Mode
    $t['back_soon'] = '<h2>Način za održavanje</h2>
                        <p>
                            Ispričavamo se zbog neugodnosti.<br/>
                            Naša web stranica trenutno prolazi kroz planirano održavanje.<br/>
                            <b>Pokušajte ponovno nakon nekog vremena.</b>
                        </p>';


    // Addendum to Version 1.1 /////////////////////////////////////
    // Admin Panel
    $t['admin_panel'] = 'Administracijsko sučelje';
    $t['login_title'] = 'CouchCMS';

    // Folders
    $t['no_folders'] = 'Direktoriji nisu definirani';
    $t['select_folder'] = 'Označi direktorij';
    $t['folders'] = 'Direktoriji';
    $t['manage_folders'] = 'Upravljaj direktorijima';
    $t['add_new_folder'] = 'Dodaj novi';
    $t['parent_folder'] = 'Roditelj';
    $t['weight'] = 'Značaj';
    $t['weight_desc'] = 'Veća vrijednost, direktorij se spušta u popisu. Može se postaviti i na negativnu vrijednost.';
    $t['desc'] = 'Opis';
    $t['image'] = 'Slika';
    $t['cannot_be_own_parent'] = 'Ne može biti vlastiti roditelj';
    $t['name_already_exists'] = 'Naziv već postoji';
    $t['pages'] = 'Stranice';
    $t['none'] = 'Ništa';
    $t['confirm_delete_folder'] = 'Jeste li sigurni da želite obrisati direktorij'; // No question mark please
    $t['confirm_delete_selected_folders'] = 'Jeste li sigurni da želite obrisati označene direktorije';

    // Drafts
    $t['draft_caps'] = 'PREDLOŽAK'; // Upper case
    $t['draft'] = 'Predložak';
    $t['drafts'] = 'Predlošci';
    $t['create_draft'] = 'Napravi predložak';
    $t['create_draft_msg'] = 'Napravite kopiju ove stranice (nakon spremanja promjena)';
    $t['manage_drafts'] = 'Uredi predloške'; // Plural
    $t['update_original'] = 'Ažuriranje originala';
    $t['update_original_msg'] = 'Kopiraj sadržaj ovog predloška na izvornu stranicu (i brisanje predloška)';
    $t['recreate_original'] = 'Ponovo napravi original';
    $t['no_drafts_found'] = 'Nema predloška';
    $t['original_page'] = 'Originalna stranica';
    $t['template'] = 'Predložak';
    $t['modified'] = 'Promijenjeo'; // Date of last modification
    $t['preview'] = 'Pregled';
    $t['confirm_delete_draft'] = 'Jeste li sigurni da želite izbrisati ovaj predložak?';
    $t['confirm_delete_selected_drafts'] = 'Jeste li sigurni da želite izbrisati označene predloške?';
    $t['confirm_apply_selected_drafts'] = 'Jeste li sigurni da želite prihvatiti odabrane predloške?';
    $t['view_all_drafts'] = 'Pregledaj sve predloške';
    $t['original_deleted'] = 'ORIGINAL IZBRISAN'; // Upper case

    // Addendum to Version 1.2 /////////////////////////////////////
    // Nested Pages
    $t['parent_page'] = 'Roditeljska stranica';
    $t['page_weight_desc'] = 'Veća vrijednost, stranica se spušta u popisu. Može se postaviti i na negativnu vrijednost.';
    $t['active'] = 'Aktivna';
    $t['inactive'] = 'Neaktivna';
    $t['menu'] = 'Izbornik';
    $t['menu_text'] = 'Tekst izbornika';
    $t['show_in_menu'] = 'Prikaži u izborniku';
    $t['not_shown_in_menu'] = 'Nije prikazano u izborniku';
    $t['leave_empty'] = 'Ostavite prazno za korištenje naslova stranice';
    $t['menu_link'] = 'Link u izborniku';
    $t['link_url'] = 'Ova stranica upućuje na sljedeću lokaciju';
    $t['link_url_desc'] = 'Može ostati prazno';
    $t['separate_window'] = 'Otvori u zasebnom prozoru';
    $t['pointer_page'] = 'Pokazivač stranice';
    $t['points_to_another_page'] = 'Pokazuje na drugu stranicu';
    $t['points_to'] = 'Pokazuje na';
    $t['redirects'] = 'Preusmjeravanja';
    $t['masquerades'] = 'Zamaskiran';
    $t['strict_matching'] = 'Označi kao odabrano u izborniku za sve stranice ispod ovog linka';
    $t['up'] = 'Pomakin gore';
    $t['down'] = 'Pomakni dolje';
    $t['remove_template_completely'] = 'Izbriši sve stranice i predloške kako bi ga uklonili u potpunosti';
    $t['remove_uncloned_template_completely'] = 'Izbriši sve predloške kako bi uklanjanje bilo potpuno';

    // Addendum to Version 1.2.5 /////////////////////////////////////
    // Gallery
    $t['bulk_upload'] = 'Dodaj';
    $t['folder_empty'] = 'Direktorij prazan. Molimo koristite gornji gumb za učitavanje kako bi dodali slike.';
    $t['root'] = 'Korjenski';
    $t['item'] = 'slika'; // Single
    $t['items'] = 'slike'; // Multiple
    $t['container'] = 'direktorij'; // Single
    $t['containers'] = 'direktoriji'; // Multiple

    //
    $t['columns_missing'] = 'Neki stupci nedostaju!';
    $t['confirm_delete_columns'] = 'Jeste li sigurni da želite trajno izbrisati stupce koji nedostaju?';
    $t['add_row'] = 'Dodaj redak';
