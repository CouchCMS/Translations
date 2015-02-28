<?php

    if ( !defined('K_COUCH_DIR') ) die(); // cannot be loaded directly

    // Slovak translation courtesy Artemis (http://www.couchcms.com/forum/memberlist.php?mode=viewprofile&u=18795)

    ///////////EDIT BELOW THIS////////////////////////////////////////

    // Header
    $t['greeting'] = 'Vitajte';
    $t['view_site'] = 'Prezrieť stránku';
    $t['logout'] = 'Odhlásiť';
    $t['javascript_msg'] = 'JavaScript je vypnutý alebo nieje podporovaný Vašim prehliadačom.<br/>
                            Prosím, aktualizujte svoj prehliadač alebo <a title="Zapnite JavaScript vo vašom prehliadači" href="http://www.google.com/support/bin/answer.py?answer=23852"><b>zapnúť JavaScript</b></a> pre použitie v Admin Paneli.';
    $t['add_new'] = 'Pridať nový';
    $t['add_new_page'] = 'Pridať novú stránku';
    $t['add_new_user'] = 'Pridať nového užívateľa';
    $t['view'] = 'Prezrieť';
    $t['list'] = 'Zoznam';
    $t['edit'] = 'Editovať';
    $t['delete'] = 'Vymazať';
    $t['delete_selected'] = 'Vymazať vybraté';
    $t['advanced_settings'] = 'Pokročilé nastavenia';

    // Sidebar
    $t['comment'] = 'Komentár';
    $t['comments'] = 'Komentáre';
    $t['manage_comments'] = 'Spravovať Komentáre';
    $t['users'] = 'Užívatelia';
    $t['manage_users'] = 'Spravovať užívateľov';

    // List pages
    $t['view_all_folders'] = 'Prezrieť všetky priečinky';
    $t['filter'] = 'Filter';
    $t['showing'] = 'Zobrazovanie';
    $t['title'] = 'Názov';
    $t['folder'] = 'Priečinok';
    $t['date'] = 'Dátum';
    $t['actions'] = 'Akcie';
    $t['no_pages_found'] = 'Stránky neboli nájdené';
    $t['published'] = 'Publikovať';
    $t['unpublished'] = 'Nepublikovať';
    $t['confirm_delete_page'] = 'Ste si istý že chcete vymazať stránku'; // No question mark please
    $t['confirm_delete_selected_pages'] = 'Ste si istý že chcete vymazať zvolené stránky?';
    $t['remove_template'] = 'Odobrať šablónu';
    $t['template_missing'] = 'Chýbajúca šablóna';
    $t['prev'] = 'Nasl.'; // Pagination button
    $t['next'] = 'Predch.'; // Pagination button

    // Pages
    $t['welcome'] = 'Vitajte';
    $t['no_regions_defined'] = 'Nebol definovaný editovateľný región';
    $t['no_templates_defined'] = 'Žiadne šablóny niesú spravované systémom CMS';
    $t['access_level'] = 'Prístupové práva';
    $t['superadmin'] = 'Super Admin';
    $t['admin'] = 'Administrátor';
    $t['authenticated_user_special'] = 'Overený užívateľ (Osobitný)';
    $t['authenitcated_user'] = 'Overený užívateľ';
    $t['unauthenticated_user'] = 'Všetci';
    $t['allow_comments'] = 'Povoliť užívateľom komentáre';
    $t['status'] = 'Status';
    $t['name'] = 'URL Názov';
    $t['title_desc'] = 'ponechajte toto pole prázdne a systém bude generovať URL z názvu';
    $t['required'] = 'Vyžadované'; // Required field
    $t['required_msg'] = 'Vyžadované pole nemôže ostať prázdne';
    $t['browse_server'] = 'Prehľadať Server';
    $t['view_image'] = 'Náhľad obrázka';
    $t['thumb_created_auto'] = 'Bude vytvorený automaticky';
    $t['recreate'] = 'Vytvoriť znovu';
    $t['thumb_recreated'] = 'Náhlad vytvorený';
    $t['crop_from'] = 'odstrihnúť z';
    $t['top_left'] = 'Vľavo hore';
    $t['top_center'] = 'Zhora v strede';
    $t['top_right'] = 'vpravo hore';
    $t['middle_left'] = 'Od stredu vľavo';
    $t['middle'] = 'v strede';
    $t['middle_right'] = 'Od stredu vpravo';
    $t['bottom_left'] = 'Vľavo dole';
    $t['bottom_center'] = 'Zdola v strede';
    $t['bottom_right'] = 'Zdola v pravo';
    $t['view_thumbnail'] = 'Prezrieť náhľad';
    $t['field_not_found'] = 'Pole nenájdené!';
    $t['delete_permanently'] = 'Vymazať navždy?';
    $t['view_code'] = 'Prezrieť kód';
    $t['confirm_delete_field'] = 'Ste si istý že chcete natrvalo vymazať toto pole?';
    $t['save'] = 'Uložiť';

    // Comments
    $t['all'] = 'Všetky';
    $t['unapprove'] = 'Nepovoliť';
    $t['unapproved'] = 'Nepovolené';
    $t['approve'] = 'Povoliť';
    $t['approved'] = 'Povolené';
    $t['select-deselect'] = 'Označit/Zrusiť Všetky';
    $t['confirm_delete_comment'] = 'Ste si istý že chcete vymazať tento komentár?';
    $t['confirm_delete_selected_comments'] = 'Ste si istý že chcete vymazať zvolené komentáre?';
    $t['bulk_action'] = 'Hromadná akcia so zvolenými';
    $t['apply'] = 'Použiť';
    $t['submitted_on'] = 'Zaradený do';
    $t['email'] = 'E-Mail';
    $t['website'] = 'Webstránka';
    $t['duplicate_content'] = 'Duplicitný obsah';
    $t['insufficient_interval'] = 'Nepovolený interval medzi komentármi';

    // Users
    $t['user_name_restrictions'] = 'Dovolené sú len malé písmená, číslice, pomlčka a podčiarkovník';
    $t['display_name'] = 'Zobraziť Meno';
    $t['role'] = 'Funkcia';
    $t['no_users_found'] = 'Užívateľ nenájdený';
    $t['confirm_delete_user'] = 'Ste si istý že chcete vymazať užívateľa'; // No question mark please
    $t['confirm_delete_selected_users'] = 'Ste si istý že chcete vymazať zvolených užívateľov?';
    $t['disabled'] = 'Deaktivovať';
    $t['new_password'] = 'Nové heslo';
    $t['new_password_msg'] = 'Ak chcete zmeniť heslo, zadajte nové. Inak ponechajte pole prázdne.';
    $t['repeat_password'] = 'Zopakovať heslo';
    $t['repeat_password_msg'] = 'Zadajte Vaše nové heslo.';
    $t['user_name_exists'] = 'Užívateľ existuje';
    $t['email_exists'] = 'E-Mail už existuje';

    // Login
    $t['user_name'] = 'Prihlasovacie meno';
    $t['password'] = 'Heslo';
    $t['login'] = 'Login';
    $t['forgot_password'] = 'Zabudli ste heslo?';
    $t['prompt_cookies'] = 'Cookies musia byť zapnuté';
    $t['prompt_username'] = 'Prosím, zadajte Vaše užívateľské meno';
    $t['prompt_password'] = 'Prosím, zadajte Vaše heslo';
    $t['invalid_credentials'] = 'Nesprávne meno alebo heslo';
    $t['account_disabled'] = 'Účet deaktivovaný';
    $t['access_denied'] = 'Prístup zamietnutý';
    $t['insufficient_privileges'] = 'Nemáte dostatočné práva na prezeranie tejto stránky.
                                    Musíte sa znova prihlásiť s dostatočnými právami.';

    // Password recovery
    $t['recovery_prompt'] = 'Prosím, zadajte svoje užívateľské meno alebo emailovú adresu.<br/>
                            Heslo Vám bude odoslané na zadaný email.';
    $t['name_or_email'] = 'Vaše užívateľské meno alebo email';
    $t['submit'] = 'Odoslať';
    $t['submit_error'] = 'Prosím, zadajte Vaše užívateľské meno alebo emailovú adresu.';
    $t['no_such_user'] = 'Takýto užívateľ neexistuje.';
    $t['reset_req_email_subject'] = 'Požiadavka na zmenu hesla';
    $t['reset_req_email_msg_0'] = 'Bola prijatá žiadosť na obnovenie hesla pre nasledujúcu stránku a užívateľské meno';
    $t['reset_req_email_msg_1'] = 'Ak chcete potvrdiť zmenu hesla, navštívte nasledujúcu adresu. Inak prosím tento e-mail ignorujte.';
    $t['email_failed'] = 'E-Mail nemohol byť odoslaný.';
    $t['reset_req_email_confirm'] = 'Email s potvrdením Vám bol odoslaný<br/>
                                    Prosím, skontrolujte Vašu emailovú schránku.';
    $t['invalid_key'] = 'Nesprávny kľuč';
    $t['reset_email_subject'] = 'Vaše nové heslo';
    $t['reset_email_msg_0'] = 'Pre nasledujúcu stránku a užívateľské meno bolo Vaše heslo zmenené';
    $t['reset_email_msg_1'] = 'Po prihlásení môžete Vaše heslo zmeniť.';
    $t['reset_email_confirm'] = 'Vaše heslo bolo zmenené<br/>
                                Prosím, skontrolujte Vašu emailovú schránku.';

    // Maintenance Mode
    $t['back_soon'] = '<h2>Režim údržby</h2>
                        <p>
                            Ospravedlňujeme sa za nepríjemnosti.<br/>
                            Naše webové stránky v súčasnej dobe prechádzajú plánovanou údržbou.<br/>
                            <b>Prosím, skúste to znova pozdejšie.</b>
                        </p>';


    // Addendum to Version 1.1 /////////////////////////////////////
    // Admin Panel
    $t['admin_panel'] = 'Admin Panel';
    $t['login_title'] = 'CouchCMS';

    // Folders
    $t['no_folders'] = 'Niesú definované žiadne priečinky';
    $t['select_folder'] = 'Zadajte priečinok';
    $t['folders'] = 'Priečinky';
    $t['manage_folders'] = 'Spravovať priečinky';
    $t['add_new_folder'] = 'Pridať nový priečinok';
    $t['parent_folder'] = 'Nadradený priečinok';
    $t['weight'] = 'Pozícia';
    $t['weight_desc'] = 'Vyššia hodnota reprezentuje nižšiu pozíciu priečinka v zozname. Môže byť nastavená aj negatívna hodnota.';
    $t['desc'] = 'Popis';
    $t['image'] = 'Obrázok';
    $t['cannot_be_own_parent'] = 'Nemôže byť nadradený sám sebe';
    $t['name_already_exists'] = 'Meno už existuje';
    $t['pages'] = 'Stránky';
    $t['none'] = 'Žiadny';
    $t['confirm_delete_folder'] = 'Ste si istý že chcete vymazať priečinok'; // No question mark please
    $t['confirm_delete_selected_folders'] = 'Ste si istý že chcete vymazať zvolené priečinky?';

    // Drafts
    $t['draft_caps'] = 'KONCEPT'; // Upper case
    $t['draft'] = 'Koncept';
    $t['drafts'] = 'Koncepty';
    $t['create_draft'] = 'Vytvoriť koncept';
    $t['create_draft_msg'] = 'Vytvoriť kópiu tejto stránky (po uložení zmien)';
    $t['manage_drafts'] = 'Spravovať koncepty'; // Plural
    $t['update_original'] = 'Aktualizovať Originál';
    $t['update_original_msg'] = 'Kopírovať obsah tohto konceptu do pôvodnej stránky (a zmazať koncept)';
    $t['recreate_original'] = 'Znovu vytvoriť originál';
    $t['no_drafts_found'] = 'Žiadne koncepty sa nenašli';
    $t['original_page'] = 'Povodná stránka';
    $t['template'] = 'Šablóna';
    $t['modified'] = 'Upravený'; // Date of last modification
    $t['preview'] = 'Zobraziť náhľad';
    $t['confirm_delete_draft'] = 'Ste si istý že chcete vymazať tento koncept?';
    $t['confirm_delete_selected_drafts'] = 'Ste si istý že chcete vymazať zvolené koncepty?';
    $t['confirm_apply_selected_drafts'] = 'Ste si istý že chcete použiť zvolené koncepty?';
    $t['view_all_drafts'] = 'Zobraziť všetky koncepty';
    $t['original_deleted'] = 'ORIGINÁL VYMAZANÝ'; // Upper case

    // Addendum to Version 1.2 /////////////////////////////////////
    // Nested Pages
    $t['parent_page'] = 'Nadradená stránka';
    $t['page_weight_desc'] = 'Vyššia hodnota reprezentuje nižšiu pozíciu stránky v zozname. Môže byť nastavená aj negatívna hodnota.';
    $t['active'] = 'Aktívne';
    $t['inactive'] = 'Neaktívne';
    $t['menu'] = 'Ponuka (Menu)';
    $t['menu_text'] = 'Text ponuky';
    $t['show_in_menu'] = 'Zobraziť v ponuke';
    $t['not_shown_in_menu'] = 'Nezobraziť v ponuke';
    $t['leave_empty'] = 'Ponechajte prázdne a použije sa názov stránky';
    $t['menu_link'] = 'Odkaz ponuky (Menu Link)';
    $t['link_url'] = 'Táto stránka odkazuje na nasledujúce umiestnenie';
    $t['link_url_desc'] = 'Môže ostať prázdne';
    $t['separate_window'] = 'Otvoriť v novom okne';
    $t['pointer_page'] = 'Cieľová stránka';
    $t['points_to_another_page'] = 'Smerovať na inú stránku';
    $t['points_to'] = 'Smerovať na';
    $t['redirects'] = 'Presmerovania';
    $t['masquerades'] = 'Maskovania';
    $t['strict_matching'] = 'Označiť v ponuke ako vybraté pre všetky stránky od tohto odkazu nižšie';
    $t['up'] = 'Posunúť hore';
    $t['down'] = 'Posunúť dole';
    $t['remove_template_completely'] = 'Vymazať všetky stránky a koncepty tejto šablóny a úplne odstrániť šablónu';
    $t['remove_uncloned_template_completely'] = 'Vymazať všetky koncepty tejto šablóny a úplne odstrániť šablónu';

    // Addendum to Version 1.2.5 /////////////////////////////////////
    // Gallery
    $t['bulk_upload'] = 'Nahrať';
    $t['folder_empty'] = 'Prázdny prečinok. Pre nahranie obrázkov použite tlačidlo vyššie.';
    $t['root'] = 'Koreňový priečinok';
    $t['item'] = 'obrázok'; // Single
    $t['items'] = 'obrázky'; // Multiple
    $t['container'] = 'priečinok'; // Single
    $t['containers'] = 'priečinky'; // Multiple

    //
    $t['columns_missing'] = 'Niektoré stĺpce chýbajú!';
    $t['confirm_delete_columns'] = 'Ste si istý že chcete natrvalo vymazať chýbajúce stĺpce?';
    $t['add_row'] = 'Pridať riadok';
