<?php

    if ( !defined('K_COUCH_DIR') ) die(); // cannot be loaded directly

    // Romanian translation courtesy atisz (http://www.couchcms.com/forum/memberlist.php?mode=viewprofile&u=263)

    ///////////EDIT BELOW THIS////////////////////////////////////////

    // Header
    $t['greeting'] = 'Buna';
    $t['view_site'] = 'Vizualizare site';
    $t['logout'] = 'Deconectare';
    $t['javascript_msg'] = 'JavaScriptul este dezactivat sau nu este suportat de browserul dumneavoastra.<br/>
                            Va rugam upgradati browserul dumneavoastra sau <a title="Activati JavaScriptul in browserul Dvs." href="http://www.google.com/support/bin/answer.py?answer=23852"><b>activati JavaScript</b></a> pentru utilizarea Panoului de Admin.';
    $t['add_new'] = 'Adauga';
    $t['add_new_page'] = 'Adauga pagina noua';
    $t['add_new_user'] = 'Adauga utilizator nou';
    $t['view'] = 'Vizualizare';
    $t['list'] = 'Lista pagini';
    $t['edit'] = 'Editare';
    $t['delete'] = 'Stergere';
    $t['delete_selected'] = 'Sterge pagini selectate';
    $t['advanced_settings'] = 'Setari avansate';

    // Sidebar
    $t['comment'] = 'Comentariu';
    $t['comments'] = 'Comentarii';
    $t['manage_comments'] = 'Administrare Comentarii';
    $t['users'] = 'Utilizatori';
    $t['manage_users'] = 'Administrare Utilizatori';

    // List pages
    $t['view_all_folders'] = 'Vizualizeaza toate folderele';
    $t['filter'] = 'Filtrare';
    $t['showing'] = 'Afisare';
    $t['title'] = 'Titlu';
    $t['folder'] = 'Dosar';
    $t['date'] = 'Data';
    $t['actions'] = 'Actiuni';
    $t['no_pages_found'] = 'Nicio pagina gasita';
    $t['published'] = 'Publicat';
    $t['unpublished'] = 'Nepublicat';
    $t['confirm_delete_page'] = 'Sunteti sigur ca doriti stergerea paginii'; // No question mark please
    $t['confirm_delete_selected_pages'] = 'Sunteti sigur ca doriti stergerea paginilor selectate?';
    $t['remove_template'] = 'Stergere Sablon';
    $t['template_missing'] = 'Sablon inexistent';
    $t['prev'] = 'Anterior'; // Pagination button
    $t['next'] = 'Urmator'; // Pagination button

    // Pages
    $t['welcome'] = 'Bine ai venit';
    $t['no_regions_defined'] = 'Nu exista definite Campuri Editabile';
    $t['no_templates_defined'] = 'Nu exista sabloane administrate de CMS';
    $t['access_level'] = 'Nivel de acces';
    $t['superadmin'] = 'Super Admin';
    $t['admin'] = 'Administrator';
    $t['authenticated_user_special'] = 'Utilizator Autentificat (Special)';
    $t['authenitcated_user'] = 'Utilizator Autentificat';
    $t['unauthenticated_user'] = 'Toata Lumea';
    $t['allow_comments'] = 'Permite utilizatorilor sa comenteze';
    $t['status'] = 'Stare';
    $t['name'] = 'Nume';
    $t['title_desc'] = 'lasati acest camp liber pentru a utiliza numele generat de sistem din titlu';
    $t['required'] = 'obligatoriu'; // Required field
    $t['required_msg'] = 'Campul obligatoriu nu poate fi necompletat';
    $t['browse_server'] = 'Selectare fisier';
    $t['view_image'] = 'Vizualizare Imagine';
    $t['thumb_created_auto'] = 'Va fi creata automat';
    $t['recreate'] = 'Recreare';
    $t['thumb_recreated'] = 'Miniatura recreata';
    $t['crop_from'] = 'trunchiere de la';
    $t['top_left'] = 'Stanga Sus';
    $t['top_center'] = 'Centru Sus';
    $t['top_right'] = 'Dreapta sus';
    $t['middle_left'] = 'Mijloc Stanga';
    $t['middle'] = 'Mijloc';
    $t['middle_right'] = 'Mijloc Dreapta';
    $t['bottom_left'] = 'Stanga Jos';
    $t['bottom_center'] = 'Centru Jos';
    $t['bottom_right'] = 'Dreapta Jos';
    $t['view_thumbnail'] = 'Vizualizare Miniatura';
    $t['field_not_found'] = 'Camp negasit!';
    $t['delete_permanently'] = 'Stergere Definitiva?';
    $t['view_code'] = 'Vizualizare Cod';
    $t['confirm_delete_field'] = 'Sunteti sigur ca dorit stergerea definitiva a acestui camp?';
    $t['save'] = 'Salvare';

    // Comments
    $t['all'] = 'Toate';
    $t['unapprove'] = 'Dezaproba';
    $t['unapproved'] = 'Dezaprobate';
    $t['approve'] = 'Aproba';
    $t['approved'] = 'Aprobate';
    $t['select-deselect'] = 'Selectare/Deselectare Toate';
    $t['confirm_delete_comment'] = 'Sunteti sigur ca doriti sa stergeti acest comentariu?';
    $t['confirm_delete_selected_comments'] = 'Sunteti sigur ca doriti sa stergeti comentariile selectate?';
    $t['bulk_action'] = 'Actiune in masa cu articolele selectate';
    $t['apply'] = 'Aplica';
    $t['submitted_on'] = 'Trimis la';
    $t['email'] = 'Email';
    $t['website'] = 'Site web';
    $t['duplicate_content'] = 'Continut duplicat';
    $t['insufficient_interval'] = 'Interval de timp insuficient intre comentarii';

    // Users
    $t['user_name_restrictions'] = 'Sunt permise doar caractere mici, numere, cratima si underscore';
    $t['display_name'] = 'Nume afisat';
    $t['role'] = 'Rol';
    $t['no_users_found'] = 'Nu s-a gasit niciun utilizator';
    $t['confirm_delete_user'] = 'Sunteti sigur ca doriti sa stergeti utilizatorul'; // No question mark please
    $t['confirm_delete_selected_users'] = 'Sunteti sigur ca doriti sa stergeti utilizatorii selectati?';
    $t['disabled'] = 'Dezactivat';
    $t['new_password'] = 'Parola noua';
    $t['new_password_msg'] = 'Daca doriti sa schimbati parola, tastati parola noua. Altfel, lasati campul necompletat.';
    $t['repeat_password'] = 'Repetati Parola';
    $t['repeat_password_msg'] = 'Introduceti din nou parola cea noua.';
    $t['user_name_exists'] = 'Nume de utilizator existent deja';
    $t['email_exists'] = 'Adresa email existenta deja';

    // Login
    $t['user_name'] = 'Nume utilizator';
    $t['password'] = 'Parola';
    $t['login'] = 'Autentificare';
    $t['forgot_password'] = 'Ati uitat parola?';
    $t['prompt_cookies'] = 'Utilizarea cookie-urilor trebuie activata pentru a folosi acest CMS';
    $t['prompt_username'] = 'Va rugam introduceti numele de utilizator';
    $t['prompt_password'] = 'Va rugam introduceti parola';
    $t['invalid_credentials'] = 'Nume utilizator sau parola incorecta';
    $t['account_disabled'] = 'Cont suspendat';
    $t['access_denied'] = 'Acces interzis';
    $t['insufficient_privileges'] = 'Nu aveti suficiente privilegii pentru a vizualiza pagina solicitata.
                                    Pentru a vedea aceasta pagina, trebuie sa va deconectati si apoi sa va autentificati cu privilegii suficiente.';

    // Password recovery
    $t['recovery_prompt'] = 'Va rugam introduceti numele de utilizator sau adresa de email<br/>
                            Parola Dvs. va fi trimisa prin email, pe adresa utilizata la crearea contului.';
    $t['name_or_email'] = 'Nume de utilizator sau Email';
    $t['submit'] = 'Trimite';
    $t['submit_error'] = 'Va rugam introduceti numele de utilizator sau adresa de email.';
    $t['no_such_user'] = 'Utilizator inexistent.';
    $t['reset_req_email_subject'] = 'Solicitare de resetare a parolei';
    $t['reset_req_email_msg_0'] = 'O cerere a fost primita pentru a reseta parola pentru urmatorul site si nume de utilizator';
    $t['reset_req_email_msg_1'] = 'Pentru a confirma faptul ca cererea a fost facuta de Dvs. va rugam sa vizitati urmatoarea adresa, altfel ignorati acest email.';
    $t['email_failed'] = 'Emailul nu a putut fi trimis.';
    $t['reset_req_email_confirm'] = 'V-a fost trimis un email de confirmare<br/>
                                    Va rugam verificati-va contul de email.';
    $t['invalid_key'] = 'Cheie invalida';
    $t['reset_email_subject'] = 'Noua Dvs. parola';
    $t['reset_email_msg_0'] = 'Parola dumneavoastra a fost resetata pentru urmatorul site si nume de utilizator';
    $t['reset_email_msg_1'] = 'Dupa autentificare aveti posibilitatea de modificare a parolei Dvs.';
    $t['reset_email_confirm'] = 'Parola dumneavoastra a fost resetata<br/>
                                Va rugam verificati contul dvs. de email pentru aflarea noii parole.';

    // Maintenance Mode
    $t['back_soon'] = '<h2>Mod de Mentenanta</h2>
                        <p>
                            Ne pare rau pentru aceasta inconvenienta.<br/>
                            Site-ul nostru este in prezent in curs de intretinere programata.<br/>
                            <b>Va rugam sa reveniti mai tarziu.</b>
                        </p>';


    // Addendum to Version 1.1 /////////////////////////////////////
    // Admin Panel
    $t['admin_panel'] = 'Panou de Administrare';
    $t['login_title'] = 'CouchCMS';

    // Folders
    $t['no_folders'] = 'Nu sunt definite dosare';
    $t['select_folder'] = 'Selectare Dosar';
    $t['folders'] = 'Dosare';
    $t['manage_folders'] = 'Administrare Dosare';
    $t['add_new_folder'] = 'Adaugare dosar nou';
    $t['parent_folder'] = 'Dosar Parinte';
    $t['weight'] = 'Greutate';
    $t['weight_desc'] = 'Cu cat este mai mare valoarea, cu atat mai jos va aparea dosarul in lista. Poate fi setat la negativ.';
    $t['desc'] = 'Descriere';
    $t['image'] = 'Imagine';
    $t['cannot_be_own_parent'] = 'Nu poate fi propriul parinte';
    $t['name_already_exists'] = 'Nume deja existent';
    $t['pages'] = 'Pagini';
    $t['none'] = 'Nici unul';
    $t['confirm_delete_folder'] = 'Sunteti sigur ca doriti sa stergeti dosarul'; // No question mark please
    $t['confirm_delete_selected_folders'] = 'Sunteti sigur ca doriti sa stergeti dosarele selectate?';

    // Drafts
    $t['draft_caps'] = 'CIORNA'; // Upper case
    $t['draft'] = 'Ciorna';
    $t['drafts'] = 'Ciorne';
    $t['create_draft'] = 'Creeaza Ciorna';
    $t['create_draft_msg'] = 'Creeaza o copie a acestei pagini (dupa salvarea modificarilor)';
    $t['manage_drafts'] = 'Administrare Ciorne'; // Plural
    $t['update_original'] = 'Actualizare Original';
    $t['update_original_msg'] = 'Copiaza continutul acestei ciorne pe pagina originala (si sterge ciorna)';
    $t['recreate_original'] = 'Recreare Original';
    $t['no_drafts_found'] = 'Nu s-a gasit nicio ciorna';
    $t['original_page'] = 'Pagina originala';
    $t['template'] = 'Sablon';
    $t['modified'] = 'Data modificarii'; // Date of last modification
    $t['preview'] = 'Previzualizare';
    $t['confirm_delete_draft'] = 'Sunteti sigur ca doriti sa stergeti aceasta ciorna?';
    $t['confirm_delete_selected_drafts'] = 'Sunteti sigur ca doriti sa stergeti ciornele selectate?';
    $t['confirm_apply_selected_drafts'] = 'Sunteti sigur ca doriti sa aplicati ciornele selectate?';
    $t['view_all_drafts'] = 'Vizualizare toate ciornele';
    $t['original_deleted'] = 'ORIGINAL STERS'; // Upper case

    // Addendum to Version 1.2 /////////////////////////////////////
    // Nested Pages
    $t['parent_page'] = 'Pagina Parinte';
    $t['page_weight_desc'] = 'Cu cat este mai mare valoarea, cu atat mai jos va aparea pagina in lista. Poate fi setat la negativ.';
    $t['active'] = 'Activ';
    $t['inactive'] = 'Inactiv';
    $t['menu'] = 'Meniu';
    $t['menu_text'] = 'Text Meniu';
    $t['show_in_menu'] = 'Arata in meniu';
    $t['not_shown_in_menu'] = 'Neafisat in meniu';
    $t['leave_empty'] = 'A se lasa necompletat pentru utilizarea titului paginii';
    $t['menu_link'] = 'Link Meniu';
    $t['link_url'] = 'Aceasta pagina arata catre urmatoarea locatie';
    $t['link_url_desc'] = 'Poate fi lasat necompletat';
    $t['separate_window'] = 'Deschide in fereastra separata';
    $t['pointer_page'] = 'Pagina Pointer';
    $t['points_to_another_page'] = 'Arata catre o alta pagina';
    $t['points_to'] = 'Arata catre';
    $t['redirects'] = 'Redirectionari';
    $t['masquerades'] = 'Mascare';
    $t['strict_matching'] = 'Marcati ca selectat in meniu pentru toate paginile aflate mai jos de acest link';
    $t['up'] = 'Mutare in Sus';
    $t['down'] = 'Mutare in Jos';
    $t['remove_template_completely'] = 'Stergeti toate paginile si ciornele acestui sablon pentru a-l indeparta complet';
    $t['remove_uncloned_template_completely'] = 'Stergeti toate ciornele acestui sablon pentru a-l indeparta complet';

    // Addendum to Version 1.2.5 /////////////////////////////////////
    // Gallery
    $t['bulk_upload'] = 'Incarcare';
    $t['folder_empty'] = 'Dosar gol. Va rugam folositi butonul de incarcare de mai sus pentru a adauga imagini.';
    $t['root'] = 'Radacina';
    $t['item'] = 'imagine'; // Single
    $t['items'] = 'imagini'; // Multiple
    $t['container'] = 'dosar'; // Single
    $t['containers'] = 'dosare'; // Multiple

    //
    $t['columns_missing'] = 'Lipsesc unele coloane!';
    $t['confirm_delete_columns'] = 'Sunteti sigur ca doriti sa stergeti definitiv coloanele care lipsesc?';
    $t['add_row'] = 'Adauga Rand nou';
