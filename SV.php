<?php

    if ( !defined('K_COUCH_DIR') ) die(); // cannot be loaded directly

    // Swedish translation courtesy nebrot (http://www.couchcms.com/forum/memberlist.php?mode=viewprofile&u=18711)

    ///////////EDIT BELOW THIS////////////////////////////////////////

    // Header
    $t['greeting'] = 'Hej';
    $t['view_site'] = 'Visa webbplatsen';
    $t['logout'] = 'Logga ut';
    $t['javascript_msg'] = 'JavaScript &auml;r inaktiverat eller st&ouml;ds inte av din webbl&auml;sare.<br/>
                            Var v&auml;nlig och uppgradera din webbl&auml;sare eller <a title="Sl&aring; p&aring; JavaScript i din webbl&auml;sare" href="http://www.google.com/support/bin/answer.py?answer=23852"><b>sl&aring; på JavaScript i din webbl&auml;sare</b></a> f&ouml;r att anv&auml;nda Admin panelen.';
    $t['add_new'] = 'Lägg till ny';
    $t['add_new_page'] = 'Lägg till ny sida';
    $t['add_new_user'] = 'Lägg till ny användare';
    $t['view'] = 'Visa';
    $t['list'] = 'Lista';
    $t['edit'] = 'Redigera';
    $t['delete'] = 'Ta bort';
    $t['delete_selected'] = 'Ta bort markerade';
    $t['advanced_settings'] = 'Avancerade inställningar';

    // Sidebar
    $t['comment'] = 'Kommentera';
    $t['comments'] = 'Kommentarer';
    $t['manage_comments'] = 'Hantera kommentarer';
    $t['users'] = 'Användare';
    $t['manage_users'] = 'Hantera användare';

    // List pages
    $t['view_all_folders'] = 'Visa alla mappar';
    $t['filter'] = 'Filtrera';
    $t['showing'] = 'Visar';
    $t['title'] = 'Titel';
    $t['folder'] = 'Mapp';
    $t['date'] = 'Datum';
    $t['actions'] = 'Åtgärder';
    $t['no_pages_found'] = 'Inga sidor hittades';
    $t['published'] = 'Publicerad';
    $t['unpublished'] = 'Avpublicerad';
    $t['confirm_delete_page'] = 'Är du säker att du vill ta bort sidan'; // No question mark please
    $t['confirm_delete_selected_pages'] = 'Är du säker att du vill ta bort de markerade sidorna?';
    $t['remove_template'] = 'Ta bort mall';
    $t['template_missing'] = 'Mall saknas';
    $t['prev'] = 'Föregående'; // Pagination button
    $t['next'] = 'Nästa'; // Pagination button

    // Pages
    $t['welcome'] = 'Välkommen';
    $t['no_regions_defined'] = 'Inga editerbara regioner definierade';
    $t['no_templates_defined'] = 'Inga mallar hanteras av CMS:et';
    $t['access_level'] = 'Rättighetsnivå';
    $t['superadmin'] = 'Superadmin';
    $t['admin'] = 'Administratör';
    $t['authenticated_user_special'] = 'Autentiserad användare (Special)';
    $t['authenitcated_user'] = 'Autentiserad användare';
    $t['unauthenticated_user'] = 'Alla';
    $t['allow_comments'] = 'Tillåt användare att kommentera';
    $t['status'] = 'Status';
    $t['name'] = 'Namn';
    $t['title_desc'] = 'lämna fältet tomt för att använda ett automatgenererat filnamn baserat på titeln';
    $t['required'] = 'Obligatoriskt'; // Required field
    $t['required_msg'] = 'Obligatoriska fält kan inte lämnas tomma';
    $t['browse_server'] = 'Välj från server';
    $t['view_image'] = 'Visa bild';
    $t['thumb_created_auto'] = 'Kommer att skapas automatiskt';
    $t['recreate'] = 'Återskapa';
    $t['thumb_recreated'] = 'Miniatyr återskapad';
    $t['crop_from'] = 'beskär från';
    $t['top_left'] = 'Övre vänstra hörnet';
    $t['top_center'] = 'Övre mitten';
    $t['top_right'] = 'Övre högra hörnet';
    $t['middle_left'] = 'Mitten från vänster';
    $t['middle'] = 'Mitten';
    $t['middle_right'] = 'Mitten från höger';
    $t['bottom_left'] = 'Nedre vänstra hörnet';
    $t['bottom_center'] = 'Nedre mitten';
    $t['bottom_right'] = 'Nedre högra hörnet';
    $t['view_thumbnail'] = 'Visa miniatyr';
    $t['field_not_found'] = 'Fältet hittades inte!';
    $t['delete_permanently'] = 'Ta bort permanent?';
    $t['view_code'] = 'Visa kod';
    $t['confirm_delete_field'] = 'Är du säker på att du vill ta bort detta fält permanent?';
    $t['save'] = 'Spara';

    // Comments
    $t['all'] = 'Allt';
    $t['unapprove'] = 'Ta bort godkännande';
    $t['unapproved'] = 'Icke godkänd';
    $t['approve'] = 'Godkänna';
    $t['approved'] = 'Godkänd';
    $t['select-deselect'] = 'Markera/avmarkera alla';
    $t['confirm_delete_comment'] = 'Är du säker på att du vill ta bort denna kommentar?';
    $t['confirm_delete_selected_comments'] = 'Är du säker på att du vill ta bort de valda kommentarerna?';
    $t['bulk_action'] = 'Bulkåtgärd för utvalda';
    $t['apply'] = 'Lägg till';
    $t['submitted_on'] = 'Lades till';
    $t['email'] = 'E-post';
    $t['website'] = 'Webbplats';
    $t['duplicate_content'] = 'Duplicerat innehåll';
    $t['insufficient_interval'] = 'Inte tillräckligt långt intervall mellan kommentarer';

    // Users
    $t['user_name_restrictions'] = 'Endast små bokstäver, siffror, bindestreck och understreck tillåtna';
    $t['display_name'] = 'Visningsnamn';
    $t['role'] = 'Roll';
    $t['no_users_found'] = 'Inga användare hittade';
    $t['confirm_delete_user'] = 'Är du säker på att du vill ta bort användaren'; // No question mark please
    $t['confirm_delete_selected_users'] = 'Är du säker på att du vill ta bort de markerade användarna?';
    $t['disabled'] = 'Inaktiverad';
    $t['new_password'] = 'Nytt lösenord';
    $t['new_password_msg'] = 'Om du vill ändra lösenordet skriver du in ett nytt. Annars lämnar du fältet tomt.';
    $t['repeat_password'] = 'Upprepa lösenord';
    $t['repeat_password_msg'] = 'Skriv ditt nya lösenord igen.';
    $t['user_name_exists'] = 'Användarnamn finns redan';
    $t['email_exists'] = 'E-post finns redan';

    // Login
    $t['user_name'] = 'Användarnamn';
    $t['password'] = 'Lösenord';
    $t['login'] = 'Logga in';
    $t['forgot_password'] = 'Glömt ditt lösenord?';
    $t['prompt_cookies'] = 'Cookies måste tillåtas för att använda detta CMS';
    $t['prompt_username'] = 'Ange ditt användarnamn';
    $t['prompt_password'] = 'Ange ditt lösenord';
    $t['invalid_credentials'] = 'Ogiltigt användarnamn eller lösenord';
    $t['account_disabled'] = 'Konto inaktiverad';
    $t['access_denied'] = 'Åtkomst nekad';
    $t['insufficient_privileges'] = 'Du har inte tillräcklig behörighet för att visa den efterfrågade sidan.
                                    För att få se denna sida måste du logga ut och in igen med en användare med tillräcklig behörighet.';

    // Password recovery
    $t['recovery_prompt'] = 'Skriv in ditt användarnamn eller e-postadress.<br/>
                            Ditt lösenord skickas till dig via e-post.';
    $t['name_or_email'] = 'Ditt användarnamn eller e-postadress';
    $t['submit'] = 'Skicka';
    $t['submit_error'] = 'Ange ditt användarnamn eller e-postadress.';
    $t['no_such_user'] = 'Ingen sådan användare kunde hittas.';
    $t['reset_req_email_subject'] = 'Begärd återställning av lösenordet';
    $t['reset_req_email_msg_0'] = 'En begäran mottogs för att återställa ditt lösenord. Denna gjordes för följande webbplats och användarnamn';
    $t['reset_req_email_msg_1'] = 'Besök följande adress för att bekräfta att begäran gjordes av er. Ignorera annars detta mail.';
    $t['email_failed'] = 'E-post kunde inte skickas.';
    $t['reset_req_email_confirm'] = 'En e-postbekräftelse har skickats till dig<br/>
                                    Kontrollera din e-post.';
    $t['invalid_key'] = 'Ogiltigt tecken';
    $t['reset_email_subject'] = 'Ditt nya lösenord';
    $t['reset_email_msg_0'] = 'Ditt lösenord har återställts för följande webbplats och användarnamn';
    $t['reset_email_msg_1'] = 'När du loggat in kan du ändra ditt lösenord.';
    $t['reset_email_confirm'] = 'Ditt lösenord har återställts<br/>
                                Kontrollera din e-post för det nya lösenordet.';

    // Maintenance Mode
    $t['back_soon'] = '<h2>Underh&aring;ll p&aring;g&aring;r</h2>
                        <p>
                            Ledsen f&ouml;r besv&auml;ret.<br/>
                            V&aring;r webbplats genomg&aring;r f&ouml;r n&auml;rvarande planerat underh&aring;ll.<br/>
                            <b>F&ouml;rs&ouml;k igen om en stund.</b>
                        </p>';


    // Addendum to Version 1.1 /////////////////////////////////////
    // Admin Panel
    $t['admin_panel'] = 'Administratörspanel';
    $t['login_title'] = 'CouchCMS';

    // Folders
    $t['no_folders'] = 'Inga mappar definierade';
    $t['select_folder'] = 'Välj mapp';
    $t['folders'] = 'Mappar';
    $t['manage_folders'] = 'Hantera mappar';
    $t['add_new_folder'] = 'Lägg till en ny mapp';
    $t['parent_folder'] = 'Föräldermapp';
    $t['weight'] = 'Vikt';
    $t['weight_desc'] = 'Ett högt värde gör att mappen hamnar långt ner i listan. Värdet får vara negativt';
    $t['desc'] = 'Beskrivning';
    $t['image'] = 'Bild';
    $t['cannot_be_own_parent'] = 'Kan inte vara sin egen förälder';
    $t['name_already_exists'] = 'Namnet finns redan';
    $t['pages'] = 'Sidor';
    $t['none'] = 'Ingen';
    $t['confirm_delete_folder'] = 'Är du säker på att du vill ta bort mappen'; // No question mark please
    $t['confirm_delete_selected_folders'] = 'Är du säker på att du vill ta bort de markerade mapparna?';

    // Drafts
    $t['draft_caps'] = 'UTKAST'; // Upper case
    $t['draft'] = 'Utkast';
    $t['drafts'] = 'Utkast';
    $t['create_draft'] = 'Skapa utkast';
    $t['create_draft_msg'] = 'Skapa en kopia av den här sidan (efter ändringarna har sparats)';
    $t['manage_drafts'] = 'Hantera utkast'; // Plural
    $t['update_original'] = 'Uppdatera ursprungssidan';
    $t['update_original_msg'] = 'Kopiera innehållet från detta utkast till den ursprungliga sidan (och ta bort utkastet)';
    $t['recreate_original'] = 'Återskapa ursprungssidan';
    $t['no_drafts_found'] = 'Inga utkast hittades';
    $t['original_page'] = 'Ursprungssida';
    $t['template'] = 'Mall';
    $t['modified'] = 'Modifierad'; // Date of last modification
    $t['preview'] = 'Förhandsgranska';
    $t['confirm_delete_draft'] = 'Är du säker på att du vill ta bort detta utkast?';
    $t['confirm_delete_selected_drafts'] = 'Är du säker på att du vill ta bort de markerade utkasten?';
    $t['confirm_apply_selected_drafts'] = 'Är du säker på att du vill tillämpa de markerade utkasten?';
    $t['view_all_drafts'] = 'Visa alla utkast';
    $t['original_deleted'] = 'URSPRUNGSIDAN BORTTAGEN'; // Upper case

    // Addendum to Version 1.2 /////////////////////////////////////
    // Nested Pages
    $t['parent_page'] = 'Föräldersida';
    $t['page_weight_desc'] = 'Ett högt värde gör att sidan hamnar långt ner i listan. Värdet får vara negativt.';
    $t['active'] = 'Aktiv';
    $t['inactive'] = 'Inaktiv';
    $t['menu'] = 'Meny';
    $t['menu_text'] = 'Menytext';
    $t['show_in_menu'] = 'Visa i menyn';
    $t['not_shown_in_menu'] = 'Visa inte i menyn';
    $t['leave_empty'] = 'Lämna tomt för att använda sidtitel';
    $t['menu_link'] = 'Menylänk';
    $t['link_url'] = 'Denna sida pekar på följande plats';
    $t['link_url_desc'] = 'Kan lämnas tomt';
    $t['separate_window'] = 'Öppna i separat fönster';
    $t['pointer_page'] = 'Pekningssida';
    $t['points_to_another_page'] = 'Pekar på en annan sida';
    $t['points_to'] = 'Pekar på';
    $t['redirects'] = 'Omdirigeringar';
    $t['masquerades'] = 'Maskerar';
    $t['strict_matching'] = 'Markera som vald i menyn för alla sidor under denna länk';
    $t['up'] = 'Flytta upp';
    $t['down'] = 'Flytta ner';
    $t['remove_template_completely'] = 'Radera alla sidor och utkast av denna mall för att ta bort den helt';
    $t['remove_uncloned_template_completely'] = 'Ta bort alla utkast av denna mall för att ta bort den helt';

    // Addendum to Version 1.2.5 /////////////////////////////////////
    // Gallery
    $t['bulk_upload'] = 'Ladda upp';
    $t['folder_empty'] = 'Mappen är tom. Använd uppladdningsknappen ovan för att lägga till bilder.';
    $t['root'] = 'Root';
    $t['item'] = 'bild'; // Single
    $t['items'] = 'bilder'; // Multiple
    $t['container'] = 'mapp'; // Single
    $t['containers'] = 'mappar'; // Multiple

    //
    $t['columns_missing'] = 'Vissa kolumner saknas!';
    $t['confirm_delete_columns'] = 'Är du säker på att du vill ta bort de saknade kolumnerna permanent?';
    $t['add_row'] = 'Lägg till en rad';
