<?php

    if ( !defined('K_COUCH_DIR') ) die(); // cannot be loaded directly

    // Czech translation courtesy Mishack (http://www.couchcms.com/forum/memberlist.php?mode=viewprofile&u=18604)

    ///////////EDIT BELOW THIS////////////////////////////////////////

    // Header
    $t['greeting'] = 'Zdravím vás';
    $t['view_site'] = 'Ukaž web';
    $t['logout'] = 'Odhlásit';
    $t['javascript_msg'] = 'JavaScript je vypnutý nebo není vaším prohlížečem podporován.<br/>
                            Prosím, aktualizujte svůj prohlížeč nebo <a title="Enable JavaScript in your browser" href="http://www.google.com/support/bin/answer.py?answer=23852"><b> si zapněte JavaScript (EN)</b></a>.';
    $t['add_new'] = 'Přidat nový';
    $t['add_new_page'] = 'Přidat novou stránku';
    $t['add_new_user'] = 'Přidat nového uživatele';
    $t['view'] = 'Prohlédnout';
    $t['list'] = 'Seznam';
    $t['edit'] = 'Upravit';
    $t['delete'] = 'Smazat';
    $t['delete_selected'] = 'Smazat vybrané';
    $t['advanced_settings'] = 'Pokročilá nastavení';

    // Sidebar
    $t['comment'] = 'Komentář';
    $t['comments'] = 'Komentáře';
    $t['manage_comments'] = 'Spravovat komentáře';
    $t['users'] = 'Uživatelé';
    $t['manage_users'] = 'Spravovat uživatele';

    // List pages
    $t['view_all_folders'] = 'Zobrazit všechny složky';
    $t['filter'] = 'Filter';
    $t['showing'] = 'Zobrazuji';
    $t['title'] = 'Název';
    $t['folder'] = 'Složka';
    $t['date'] = 'Datum';
    $t['actions'] = 'Akce';
    $t['no_pages_found'] = 'Žádné stránky nebyly nalezeny';
    $t['published'] = 'Publikováno';
    $t['unpublished'] = 'Nepublikováno';
    $t['confirm_delete_page'] = 'Jste si jisti, že chcete smazat stránk'; // No question mark please
    $t['confirm_delete_selected_pages'] = 'Jste si jisti, že chcete smazat označené stránky?';
    $t['remove_template'] = 'Odebrat šablonu';
    $t['template_missing'] = 'Šablona chybí';
    $t['prev'] = 'Předchozí'; // Pagination button
    $t['next'] = 'Další'; // Pagination button

    // Pages
    $t['welcome'] = 'Vítejte';
    $t['no_regions_defined'] = 'Žádné editovatelné oblasti nejsou definované';
    $t['no_templates_defined'] = 'No templates are being managed by the CMS';
    $t['access_level'] = 'Úroveň přístupu';
    $t['superadmin'] = 'Super Admin';
    $t['admin'] = 'Administrátor';
    $t['authenticated_user_special'] = 'Ověřený uživatel (speciální)';
    $t['authenitcated_user'] = 'Ověřený uživatel';
    $t['unauthenticated_user'] = 'Všichni';
    $t['allow_comments'] = 'Povolit uživatelům komentovat';
    $t['status'] = 'Stav';
    $t['name'] = 'Jméno';
    $t['title_desc'] = 'nechte pole prázdné a systém vygeneruje název automaticky z názvu';
    $t['required'] = 'vyžadováno'; // Required field
    $t['required_msg'] = 'Vyžadovaná pole nesmí zůstat prázdná';
    $t['browse_server'] = 'Procházet';
    $t['view_image'] = 'Prohlédnout obrázek';
    $t['thumb_created_auto'] = 'Bude vygenerováno automaticky';
    $t['recreate'] = 'Znovuvytvořit';
    $t['thumb_recreated'] = 'Náhled obnoven';
    $t['crop_from'] = 'oříznutí z/ze';
    $t['top_left'] = 'Horní levý roh';
    $t['top_center'] = 'Horní prostředek';
    $t['top_right'] = 'Horní pravý roh';
    $t['middle_left'] = 'Levý prostředek';
    $t['middle'] = 'Střed';
    $t['middle_right'] = 'Pravý prostředek';
    $t['bottom_left'] = 'Dolní levý roh';
    $t['bottom_center'] = 'Spodní prostředek';
    $t['bottom_right'] = 'Pravý dolní roh';
    $t['view_thumbnail'] = 'Prohlédnout náhled';
    $t['field_not_found'] = 'Pole nenalezeno!';
    $t['delete_permanently'] = 'Trvale smazat?';
    $t['view_code'] = 'Prohlédnout kód';
    $t['confirm_delete_field'] = 'Jste si jisti, že chcete trvale smazat toto pole?';
    $t['save'] = 'Uložit';

    // Comments
    $t['all'] = 'Všechny';
    $t['unapprove'] = 'Un-approve';
    $t['unapproved'] = 'Un-approved';
    $t['approve'] = 'Schválit';
    $t['approved'] = 'Schváleno';
    $t['select-deselect'] = 'Označit/Odznačit vše';
    $t['confirm_delete_comment'] = 'Jste si jisti, že chcete smazat tento komentář?';
    $t['confirm_delete_selected_comments'] = 'Jste si jisti, že chcete smazat vybrané komentáře?';
    $t['bulk_action'] = 'Hromadná akce s vybranými položkami';
    $t['apply'] = 'Použít';
    $t['submitted_on'] = 'Odesláno';
    $t['email'] = 'E-Mail';
    $t['website'] = 'Web';
    $t['duplicate_content'] = 'Duplikovat obsah';
    $t['insufficient_interval'] = 'Nedostatečný interval mezi komentáři';

    // Users
    $t['user_name_restrictions'] = 'Povolena pouze malá písmena, číslice, pomlčky a podtržítko';
    $t['display_name'] = 'Zobrazované jméno';
    $t['role'] = 'Role';
    $t['no_users_found'] = 'Nebyli nalezení žadní uživatelé';
    $t['confirm_delete_user'] = 'Jste si jisti, že chcete smazat tohoto uživatele'; // No question mark please
    $t['confirm_delete_selected_users'] = 'Jste si jisti, že chcete smazat vybrané uživatele?';
    $t['disabled'] = 'Deaktivovaný';
    $t['new_password'] = 'Nové heslo';
    $t['new_password_msg'] = 'Jestliže chcete změnit heslo - napište nové. Jinak nechte pole prázdné.';
    $t['repeat_password'] = 'Heslo znovu';
    $t['repeat_password_msg'] = 'Vaše nové heslo znovu.';
    $t['user_name_exists'] = 'Tento uživatel již existuje';
    $t['email_exists'] = 'Tento email již byl použit';

    // Login
    $t['user_name'] = 'Uživatelské jméno';
    $t['password'] = 'Heslo';
    $t['login'] = 'Přihlásit';
    $t['forgot_password'] = 'Zapomněli jste heslo?';
    $t['prompt_cookies'] = 'Pro správnou funkčnost musíte mít povolené cookies.';
    $t['prompt_username'] = 'Prosím, zadejte své uživatelské jméno';
    $t['prompt_password'] = 'Prosím, zadejte své heslo';
    $t['invalid_credentials'] = 'Nesprávné uživatelské jméno nebo heslo';
    $t['account_disabled'] = 'Účet deaktivován';
    $t['access_denied'] = 'Přístup zamítnut';
    $t['insufficient_privileges'] = 'Nemáte dostatečná práva pro zobrazení požadované stránky.
                                    Pro zobrazení obsahu je nutné se odhlásit a přihlásit s účtem, který má přiřazena vyšší oprávnění.';

    // Password recovery
    $t['recovery_prompt'] = 'Prosím, zadejte přihlašovací jméno nebo email<br/>
                            Nové heslo obdržíte emailem.';
    $t['name_or_email'] = 'Vaše přihlašovací jméno nebo email.';
    $t['submit'] = 'Odeslat';
    $t['submit_error'] = 'Prosím, zadejte své přihlašovací jméno nebo email.';
    $t['no_such_user'] = 'Takový uživatel neexistuje.';
    $t['reset_req_email_subject'] = 'Vyžádán reset hesla';
    $t['reset_req_email_msg_0'] = 'Žádost o resetování hesla pro tuto stránku a uživatelské jméno byla přijata';
    $t['reset_req_email_msg_1'] = 'Pro potvrzení, že žádosti o změnu byla podána vámi, prosím, navštivte následující adresu. V opačném případě tento email ignorujte.';
    $t['email_failed'] = 'Email nemohl být odeslán.';
    $t['reset_req_email_confirm'] = 'Potvrzovací email byl právě odeslán.<br/>
                                    Prosím zkontrolujte svoji schránku.';
    $t['invalid_key'] = 'Neplatný klíč';
    $t['reset_email_subject'] = 'Vaše nové heslo';
    $t['reset_email_msg_0'] = 'Vaše heslo bylo resetováno pro následující stránku a uživatelské jméno.';
    $t['reset_email_msg_1'] = 'Jakmile se přihlásíte, budete moci své heslo změnit.';
    $t['reset_email_confirm'] = 'Vaše heslo bylo resetováno.<br/>
                                Nové heslo najdete ve vaší emailové schránce.';

    // Maintenance Mode
    $t['back_soon'] = '<h2>Údržba stránek</h2>
                        <p>
                            Omlouváme se za nepříjemnosti.<br/>
                            Na našich stránkách právě probíhá plánovaná údržba.<br/>
                            <b>Zkuste to, prosím, později.</b><br/>Děkujeme za pochopení.
                        </p>';


    // Addendum to Version 1.1 /////////////////////////////////////
    // Admin Panel
    $t['admin_panel'] = 'Admin Panel';
    $t['login_title'] = 'CouchCMS';

    // Folders
    $t['no_folders'] = 'Nejsou vytvořené žádné složky';
    $t['select_folder'] = 'Vybrat složku';
    $t['folders'] = 'Složky';
    $t['manage_folders'] = 'Spravovat složky';
    $t['add_new_folder'] = 'Přidat novou složku';
    $t['parent_folder'] = 'Rodičovská složka';
    $t['weight'] = 'Váha';
    $t['weight_desc'] = 'Čím nižší hodnota, tím nižší pozice složky v seznamu. Lze nastavit i negativní hodnotu.';
    $t['desc'] = 'Popis';
    $t['image'] = 'Obrázek';
    $t['cannot_be_own_parent'] = 'Nemůže být svým vlastním rodičem';
    $t['name_already_exists'] = 'Název již existuje';
    $t['pages'] = 'Stránky';
    $t['none'] = 'None';
    $t['confirm_delete_folder'] = 'Jste si jisti, že chcete smazat tuto složku'; // No question mark please
    $t['confirm_delete_selected_folders'] = 'Jste si jisti, že chcete smazat vybrané složky?';

    // Drafts
    $t['draft_caps'] = 'KONCEPT'; // Upper case
    $t['draft'] = 'Koncept';
    $t['drafts'] = 'Koncepty';
    $t['create_draft'] = 'Vytvořit koncept';
    $t['create_draft_msg'] = 'Vytvořit kopii této stránky (po uložení změn)';
    $t['manage_drafts'] = 'Spravovat koncepty'; // Plural
    $t['update_original'] = 'Aktualizovat originál';
    $t['update_original_msg'] = 'Zkopírovat obsah tohoto konceptu do originální stránky (a vymazat koncept)';
    $t['recreate_original'] = 'Znovuvytvořit originál';
    $t['no_drafts_found'] = 'Nebyly nalezeny žádné koncepty';
    $t['original_page'] = 'Originální stránka';
    $t['template'] = 'Šablona';
    $t['modified'] = 'Změněno'; // Date of last modification
    $t['preview'] = 'Náhled';
    $t['confirm_delete_draft'] = 'Jste si jisti, že chcete vymazat tento koncept?';
    $t['confirm_delete_selected_drafts'] = 'Jste si jisti, že chcete vymazat vybrané koncepty?';
    $t['confirm_apply_selected_drafts'] = 'Jste si jisti, že chcete aplikovat vybrané koncepty?';
    $t['view_all_drafts'] = 'Ukaž všechny koncepty';
    $t['original_deleted'] = 'ORIGINÁL SMAZÁN'; // Upper case

    // Addendum to Version 1.2 /////////////////////////////////////
    // Nested Pages
    $t['parent_page'] = 'Nadřazená stránka';
    $t['page_weight_desc'] = 'Čím vyšší hodnota, tím nižší pozice stránky v seznamu. Lze nastavit i negativní hodnotu.';
    $t['active'] = 'Aktivní';
    $t['inactive'] = 'Neaktivní';
    $t['menu'] = 'Menu';
    $t['menu_text'] = 'Menu Text';
    $t['show_in_menu'] = 'Zobrazovat v menu';
    $t['not_shown_in_menu'] = 'Nezobrazovat v menu';
    $t['leave_empty'] = 'Když necháte prázdné, použije se titulek stránky';
    $t['menu_link'] = 'Odkaz v menu';
    $t['link_url'] = 'Tato stránka ukazuje na tuto pozici';
    $t['link_url_desc'] = 'Je možné nechat prázdné';
    $t['separate_window'] = 'Otevřít v novém okně';
    $t['pointer_page'] = 'Ukazatel stránky';
    $t['points_to_another_page'] = 'Ukazatel na jinou stránku';
    $t['points_to'] = 'Ukazuje na';
    $t['redirects'] = 'Přesměrování';
    $t['masquerades'] = 'Maskování';
    $t['strict_matching'] = 'Mark as selected in menu for all pages below this link';
    $t['up'] = 'Posunout nahoru';
    $t['down'] = 'Posunout dolů';
    $t['remove_template_completely'] = 'Vymazat všechny stránky a koncepty této šablony a zcela odebrat';
    $t['remove_uncloned_template_completely'] = 'Vymazat všechny koncepty této šablony a zcela odebrat';

    // Addendum to Version 1.2.5 /////////////////////////////////////
    // Gallery
    $t['bulk_upload'] = 'Nahrát';
    $t['folder_empty'] = 'Složka je prázdná. Prosím, použijte tlačítko nahoře pro náhrání obrázků.';
    $t['root'] = 'Root';
    $t['item'] = 'obrázek'; // Single
    $t['items'] = 'obrázky'; // Multiple
    $t['container'] = 'složka'; // Single
    $t['containers'] = 'složky'; // Multiple

    //
    $t['columns_missing'] = 'Chybí některé sloupce!';
    $t['confirm_delete_columns'] = 'Jste si jisti, že chcete trvale odstranit chybějící sloupce?';
    $t['add_row'] = 'Přidat řádek';
