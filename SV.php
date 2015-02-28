<?php

    if ( !defined('K_COUCH_DIR') ) die(); // cannot be loaded directly

    // Swedish translation courtesy Cuowee (http://www.couchcms.com/forum/memberlist.php?mode=viewprofile&u=918)

    ///////////EDIT BELOW THIS////////////////////////////////////////

    // Header
    $t['greeting'] = 'Hej';
    $t['view_site'] = 'Granska hemsida';
    $t['logout'] = 'Logga ut';
    $t['javascript_msg'] = 'JavaScript är ej aktiverat eller stödjs ej av din webbläsare.<br/>
                            Uppdatera din webbläsare <a title="Enable JavaScript in your browser" href="http://www.google.com/support/bin/answer.py?answer=23852"><b>Aktivera JavaScript</b></a> för att använda Wasabi Web Update.';
    $t['add_new'] = 'Lägg till';
    $t['add_new_page'] = 'Lägg till ny sida';
    $t['add_new_user'] = 'Ny användare';
    $t['view'] = 'Granska';
    $t['list'] = 'Lista';
    $t['edit'] = 'Redigera';
    $t['delete'] = 'Radera';
    $t['delete_selected'] = 'Radera markerade';
    $t['advanced_settings'] = 'Avancerade inställningar';

    // Sidebar
    $t['comment'] = 'Kommentar';
    $t['comments'] = 'Kommentarer';
    $t['manage_comments'] = 'Hantera kommentarer';
    $t['users'] = 'Användare';
    $t['manage_users'] = 'Hantera användare';

    // List pages
    $t['view_all_folders'] = 'Visa alla mappar';
    $t['filter'] = 'Filter';
    $t['showing'] = 'Visar';
    $t['title'] = 'Titel';
    $t['folder'] = 'Mapp';
    $t['date'] = 'Datum';
    $t['actions'] = 'Actions';
    $t['no_pages_found'] = 'Inga sidor funna';
    $t['published'] = 'Publicerad';
    $t['unpublished'] = 'Ej publicerad';
    $t['confirm_delete_page'] = 'Är du säker att du vill radera denna sida'; // No question mark please
    $t['confirm_delete_selected_pages'] = 'Är du säker att du vill radera de markerade sidorna?';
    $t['remove_template'] = 'Ta bort mall';
    $t['template_missing'] = 'Mall saknas';
    $t['prev'] = 'Föregående'; // Pagination button
    $t['next'] = 'Nästa'; // Pagination button

    // Pages
    $t['welcome'] = 'Välkommen';
    $t['no_regions_defined'] = 'Inga editerbara områden funna';
    $t['no_templates_defined'] = 'Inga mallar hanteras av Wasabi Web Update';
    $t['access_level'] = 'Access nivå';
    $t['superadmin'] = 'Super Admin';
    $t['admin'] = 'Administrator';
    $t['authenticated_user_special'] = 'Användare (Special)';
    $t['authenitcated_user'] = 'Användare';
    $t['unauthenticated_user'] = 'Alla';
    $t['allow_comments'] = 'Tillåt användare att kommentera';
    $t['status'] = 'Status';
    $t['name'] = 'Namn';
    $t['title_desc'] = 'lämna detta fält tomt för att låta systemet generera ett namn (rekommenderat)';
    $t['required'] = 'Krävs'; // Required field
    $t['required_msg'] = 'Begärda fält kan ej lämnas tomma';
    $t['browse_server'] = 'Bläddra server';
    $t['view_image'] = 'Visa bild';
    $t['thumb_created_auto'] = 'Kommer att skapas automatiskt';
    $t['recreate'] = 'Återskapa';
    $t['thumb_recreated'] = 'Tumnagel återskapad';
    $t['crop_from'] = 'skalar från';
    $t['top_left'] = 'Topp Vänster';
    $t['top_center'] = 'Topp Mitten';
    $t['top_right'] = 'Topp Höger';
    $t['middle_left'] = 'Mitten vänster';
    $t['middle'] = 'Mitten';
    $t['middle_right'] = 'Mitten Höger';
    $t['bottom_left'] = 'Nedre Vänster';
    $t['bottom_center'] = 'Nedre Mitten';
    $t['bottom_right'] = 'Nedre Höger';
    $t['view_thumbnail'] = 'Visa tumnagel';
    $t['field_not_found'] = 'Fält hittades ej';
    $t['delete_permanently'] = 'Radera permanent?';
    $t['view_code'] = 'Visa kod';
    $t['confirm_delete_field'] = 'Är du säker att du vill radera detta fält?';
    $t['save'] = 'Spara';

    // Comments
    $t['all'] = 'Alla';
    $t['unapprove'] = 'Godkänn ej';
    $t['unapproved'] = 'Ej godkänd';
    $t['approve'] = 'Godkänn';
    $t['approved'] = 'Godkänd';
    $t['select-deselect'] = 'Markera/Avmarkera alla';
    $t['confirm_delete_comment'] = 'Är du säker att du vill radera denna kommentar?';
    $t['confirm_delete_selected_comments'] = 'Är du säker att du vill radera markerade kommentarer?';
    $t['bulk_action'] = 'Bulk action with selected';
    $t['apply'] = 'Verkställ';
    $t['submitted_on'] = 'Insänd den';
    $t['email'] = 'E-Mail';
    $t['website'] = 'Hemsida';
    $t['duplicate_content'] = 'Duplicera innehåll';
    $t['insufficient_interval'] = 'Du väntade inte tillräckligt länge innan du kommenterade igen';

    // Users
    $t['user_name_restrictions'] = 'Enbart småbokstäver, siffror, bindestreck, understräck tillåtna';
    $t['display_name'] = 'Visa namn';
    $t['role'] = 'Roll';
    $t['no_users_found'] = 'Inga användare funna';
    $t['confirm_delete_user'] = 'Är du säker att du vill ta bort användaren'; // No question mark please
    $t['confirm_delete_selected_users'] = 'Är du säker att du vill ta bort markerade användare?';
    $t['disabled'] = 'Avaktiverad';
    $t['new_password'] = 'Nytt lösenord';
    $t['new_password_msg'] = 'Om du vill ha ett nytt lösenord, skriv in ett nytt. Annars lämna detta fält blankt.';
    $t['repeat_password'] = 'Upprepa lösenord';
    $t['repeat_password_msg'] = 'Skriv ditt lösenord igen.';
    $t['user_name_exists'] = 'Användare existerar redan';
    $t['email_exists'] = 'E-Mail existerar redan';

    // Login
    $t['user_name'] = 'Användare';
    $t['password'] = 'Lösenord';
    $t['login'] = 'Logga in';
    $t['forgot_password'] = 'Glömt ditt lösenord?';
    $t['prompt_cookies'] = 'Cookies måste vara aktiverat för att använda detta CMS';
    $t['prompt_username'] = 'Var god fyll i ditt användarnamn';
    $t['prompt_password'] = 'Var god fyll i ditt lösenord';
    $t['invalid_credentials'] = 'Ej giltigt användarnamn och lösenord';
    $t['account_disabled'] = 'Konto ej aktiverat';
    $t['access_denied'] = 'Åtkomst nekad';
    $t['insufficient_privileges'] = 'Du har inte tillräckliga privilegier för att visa denna sida.
                                    För att visa denna sida måste du logga ut och logga in igen med ett konto som har högre roll.';

    // Password recovery
    $t['recovery_prompt'] = 'Var god fyll i ditt användarnamn samt e-mail adress<br/>
                            Ditt lösenord skickas via epost';
    $t['name_or_email'] = 'Ditt Användarnamn eller E-mail';
    $t['submit'] = 'Skicka';
    $t['submit_error'] = 'Vargod fyll i ditt användarnamn eller e-mail';
    $t['no_such_user'] = 'Det existerar ej någon sådan användare.';
    $t['reset_req_email_subject'] = 'Lösenords återställning begärd';
    $t['reset_req_email_msg_0'] = 'En lösenords återställning är begärd av följande hemsida och användarnamn';
    $t['reset_req_email_msg_1'] = 'För att bekräfta, var god och besök denna adress. Ignorera detta mail ifall inte.';
    $t['email_failed'] = 'E-Mail kunde ej skickas.';
    $t['reset_req_email_confirm'] = 'Ett bekräftelse mail har skickats till dig<br/>
                                    Var god och kolla din e-mail.';
    $t['invalid_key'] = 'Ogiltig nyckel';
    $t['reset_email_subject'] = 'Ditt nya lösenord';
    $t['reset_email_msg_0'] = 'Ditt lösenord har blivit återställt av följande hemsida och användarnamn';
    $t['reset_email_msg_1'] = 'När du har loggat in kan du ändra ditt lösenord.';
    $t['reset_email_confirm'] = 'Ditt lösenord har återställts<br/>
                                Var god att kolla din e-mail efter ditt nya lösenord.';

    // Maintenance Mode
    $t['back_soon'] = '<h2>Underhållning</h2>
                        <p>
                            Ursäkta för underhållet,<br/>
                            vi håller just nu på att göra denna hemsida till något bättre.<br/>
                            <b>Var god försök lite senare</b>
                        </p>';


    // Addendum to Version 1.1 /////////////////////////////////////
    // Admin Panel
    $t['admin_panel'] = 'Admin Panel';
    $t['login_title'] = 'CouchCMS';

    // Folders
    $t['no_folders'] = 'Inga mappar defineradeNo folders defined';
    $t['select_folder'] = 'Välj mapp';
    $t['folders'] = 'Mappar';
    $t['manage_folders'] = 'Hantera mappar';
    $t['add_new_folder'] = 'Lägg till ny mapp';
    $t['parent_folder'] = 'Föräldra Mapp';
    $t['weight'] = 'Ranking';
    $t['weight_desc'] = 'Ju högre ranking, desto lägre i listan kommer mappen att synas. Kan vara en negativ rank.';
    $t['desc'] = 'Beskrivning';
    $t['image'] = 'Bild';
    $t['cannot_be_own_parent'] = 'Kan inte vara sin egen förälder';
    $t['name_already_exists'] = 'Namn existerar redan';
    $t['pages'] = 'Sidor';
    $t['none'] = 'Inga';
    $t['confirm_delete_folder'] = 'Är du säker att du vill radera mappen'; // No question mark please
    $t['confirm_delete_selected_folders'] = 'Är du säker att du vill radera markerade mappar?';

    // Drafts
    $t['draft_caps'] = 'UTKAST'; // Upper case
    $t['draft'] = 'Utkast';
    $t['drafts'] = 'Utkast';
    $t['create_draft'] = 'Skapa utkast';
    $t['create_draft_msg'] = 'Skapa en kopia av denna sida (efter du har sparat ändringar)';
    $t['manage_drafts'] = 'Hantera utkast'; // Plural
    $t['update_original'] = 'Uppdatera orginal';
    $t['update_original_msg'] = 'Kopiera innehållet i detta utkast till orginal sidan (och radera utkastet)';
    $t['recreate_original'] = 'Återskapa orginal';
    $t['no_drafts_found'] = 'Inga utkast funna';
    $t['original_page'] = 'Original sida';
    $t['template'] = 'Mall';
    $t['modified'] = 'Modifierad'; // Date of last modification
    $t['preview'] = 'Granska';
    $t['confirm_delete_draft'] = 'Är du säker att du vill ta bort detta utkast?';
    $t['confirm_delete_selected_drafts'] = 'Är du säker att du vill ta bort markerade utkast?';
    $t['confirm_apply_selected_drafts'] = 'Är du säker att du vill verkställa de markerade utkasten?';
    $t['view_all_drafts'] = 'Granska alla utkast';
    $t['original_deleted'] = 'ORIGINAL RADERAT'; // Upper case
