<?php

    if ( !defined('K_COUCH_DIR') ) die(); // cannot be loaded directly

    // Russian translation courtesy Poteryaev Nikita <madmeatst@gmail.com> (http://www.couchcms.com/forum/memberlist.php?mode=viewprofile&u=18206)

    ///////////EDIT BELOW THIS////////////////////////////////////////

    // Header
    $t['greeting'] = 'Привет';
    $t['view_site'] = 'Перейти на сайт';
    $t['logout'] = 'Выйти';
    $t['javascript_msg'] = 'JavaScript отключен или не поддерживается вашим браузером.<br/>
                            Пожалуйста обновите ваш браузер или <a title="Включить JavaScript в вашем браузере" href="http://www.google.com/support/bin/answer.py?answer=23852"><b>включить JavaScript</b></a>, для того чтобы использовать Админ панель.';
    $t['add_new'] = 'Добавить запись';
    $t['add_new_page'] = 'Добавить новую страницу';
    $t['add_new_user'] = 'Добавить нового пользователя';
    $t['view'] = 'Посмотреть';
    $t['list'] = 'Список';
    $t['edit'] = 'Редактировать';
    $t['delete'] = 'Удалить';
    $t['delete_selected'] = 'Удалить выбранное';
    $t['advanced_settings'] = 'Расширенные Настройки';

    // Sidebar
    $t['comment'] = 'Комментарий';
    $t['comments'] = 'Комментарии';
    $t['manage_comments'] = 'Управлять комментариями';
    $t['users'] = 'Пользователи';
    $t['manage_users'] = 'Управлять пользователями';

    // List pages
    $t['view_all_folders'] = 'Посмотреть все группы';
    $t['filter'] = 'Фильтр';
    $t['showing'] = 'Показываются';
    $t['title'] = 'Заголовок';
    $t['folder'] = 'Группа';
    $t['date'] = 'Дата';
    $t['actions'] = 'Действия';
    $t['no_pages_found'] = 'Страница не найдена';
    $t['published'] = 'Опубликовано';
    $t['unpublished'] = 'Неопубликовано';
    $t['confirm_delete_page'] = 'Вы уверенны, что хотите удалить эту страницу'; // No question mark please
    $t['confirm_delete_selected_pages'] = 'Вы уверенны, что хотите удалить выбранные страницы?';
    $t['remove_template'] = 'Удалить Шаблон';
    $t['template_missing'] = 'Шаблон отсутствует';
    $t['prev'] = 'Назад'; // Pagination button
    $t['next'] = 'Вперед'; // Pagination button

    // Pages
    $t['welcome'] = 'Добро пожаловать';
    $t['no_regions_defined'] = 'Редактируемые области не заданы';
    $t['no_templates_defined'] = 'Ни один шаблон не управляется CMS';
    $t['access_level'] = 'Уровень доступа';
    $t['superadmin'] = 'Super Admin';
    $t['admin'] = 'Администратор';
    $t['authenticated_user_special'] = 'Авторизованный пользователь (Особый)';
    $t['authenitcated_user'] = 'Авторизованный пользователь';
    $t['unauthenticated_user'] = 'Неавторизованный пользователь (кто-угодно)';
    $t['allow_comments'] = 'Дать возможность пользователям оставлять комментарии';
    $t['status'] = 'Статус';
    $t['name'] = 'Имя';
    $t['title_desc'] = 'Оставьте это поле пустым, чтобы система сама сгенерировала имя из заголовка.';
    $t['required'] = 'Обязательно к заполнению'; // Required field
    $t['required_msg'] = 'Обязательное поле не может быть пустым';
    $t['browse_server'] = 'Посмотреть на сервере';
    $t['view_image'] = 'Посмотреть изображение';
    $t['thumb_created_auto'] = 'Будет создана автоматически';
    $t['recreate'] = 'Восстановить';
    $t['thumb_recreated'] = 'Миниатюра восстановлена';
    $t['crop_from'] = 'Обрезать с';
    $t['top_left'] = 'Верхний Левый';
    $t['top_center'] = 'Сверху центр';
    $t['top_right'] = 'Верхний Правый';
    $t['middle_left'] = 'Посередине Слева';
    $t['middle'] = 'Посередине';
    $t['middle_right'] = 'Посередине Справа';
    $t['bottom_left'] = 'Нижний Левый';
    $t['bottom_center'] = 'Снизу Центр';
    $t['bottom_right'] = 'Нижний Правый';
    $t['view_thumbnail'] = 'Посмотреть миниатюру';
    $t['field_not_found'] = 'Поле не найдено!';
    $t['delete_permanently'] = 'Удалить навсегда?';
    $t['view_code'] = 'Просмотреть исходный код';
    $t['confirm_delete_field'] = 'Вы уверенны, что хотите удалить навсегда это поле?';
    $t['save'] = 'Сохранить';

    // Comments
    $t['all'] = 'Все';
    $t['unapprove'] = 'Опровергнуть';
    $t['unapproved'] = 'Опровергнуто';
    $t['approve'] = 'Подтвердить';
    $t['approved'] = 'Подтверждено';
    $t['select-deselect'] = 'Выделить/Снять выделение со всех';
    $t['confirm_delete_comment'] = 'Вы уверенны, что хотите удалить этот комментарий?';
    $t['confirm_delete_selected_comments'] = 'Вы уверенны, что хотите удалить выбранные комментарии?';
    $t['bulk_action'] = 'Групповое действие с выбранными';
    $t['apply'] = 'Принять';
    $t['submitted_on'] = 'Поступивший с/Submitted on';
    $t['email'] = 'E-Mail';
    $t['website'] = 'Website';
    $t['duplicate_content'] = 'Дублировать содержимое';
    $t['insufficient_interval'] = 'Слишком малый интервал между комментариями';

    // Users
    $t['user_name_restrictions'] = 'Только строчные буквы. Цифры, дефис и нижнее подчеркивание разрешены';
    $t['display_name'] = 'Отображаемое имя';
    $t['role'] = 'Роль';
    $t['no_users_found'] = 'Ни один пользователь не найден';
    $t['confirm_delete_user'] = 'Вы уверены, что хотите удалить этого пользователя'; // No question mark please
    $t['confirm_delete_selected_users'] = 'Вы уверены, что хотите удалить выбранных пользователей?';
    $t['disabled'] = 'Отключен';
    $t['new_password'] = 'Новый пароль';
    $t['new_password_msg'] = 'Если вы хотите изменить свой пароль, введите новый. Иначе оставьте поле пустым.';
    $t['repeat_password'] = 'Повторите пароль';
    $t['repeat_password_msg'] = 'Введите ваш новый пароль еще раз.';
    $t['user_name_exists'] = 'Имя пользователя уже зарегистрировано';
    $t['email_exists'] = 'E-Mail уже зарегистрирован';

    // Login
    $t['user_name'] = 'Имя пользователя';
    $t['password'] = 'Пароль';
    $t['login'] = 'Логин';
    $t['forgot_password'] = 'Забыли свой пароль?';
    $t['prompt_cookies'] = 'Cookies должны быть включены, чтобы использовать CMS';
    $t['prompt_username'] = 'Пожалуйста введите ваше имя';
    $t['prompt_password'] = 'Пожалуйста введите ваш пароль';
    $t['invalid_credentials'] = 'Неверное имя или пароль';
    $t['account_disabled'] = 'Профиль отключен';
    $t['access_denied'] = 'Доступ запрещен';
    $t['insufficient_privileges'] = 'У вас недостаточно привилегий, чтобы просматривать страницу.
                                    Чтобы просматривать эту страницу, выйдите и зайдите с достаточными привилегиями.';

    // Password recovery
    $t['recovery_prompt'] = 'Пожалуйста введите ваше имя или пароль<br/>
                            Вы получите ваш пароль по E-Mail.';
    $t['name_or_email'] = 'Ваше Имя или E-Mail';
    $t['submit'] = 'Отправить';
    $t['submit_error'] = 'Пожалуйста введите ваше имя или пароль.';
    $t['no_such_user'] = 'Такого пользователя не существует.';
    $t['reset_req_email_subject'] = 'Запрошен сброс пароля';
    $t['reset_req_email_msg_0'] = 'Запрос на сброс пароля для следующего пользователя был принят';
    $t['reset_req_email_msg_1'] = 'Чтобы подтвердить, что запрос пришел от вас, пожалуйста посетите следующую ссылку, либо проигнорируйте это письмо.';
    $t['email_failed'] = 'E-Mail не может быть отправлен.';
    $t['reset_req_email_confirm'] = 'Письмо с подтверждением отправлено вам<br/>
                                    Пожалуйста проверьте вашу почту.';
    $t['invalid_key'] = 'Неверный ключ';
    $t['reset_email_subject'] = 'Ваш новый пароль';
    $t['reset_email_msg_0'] = 'Ваш пароль был сброшен для следующего сайта и пользователя';
    $t['reset_email_msg_1'] = 'Как только вы авторизуетесь на сайте, вы сможете изменить свой пароль.';
    $t['reset_email_confirm'] = 'Ваш пароль был сброшен.<br/>
                                Пожалуйста проверьте почту для нового пароля.';

    // Maintenance Mode
    $t['back_soon'] = '<h2>Техническое обслуживание</h2>
                        <p>
                            Извините за неудобство.<br/>
                            Наш сайт в данный момент проходят запланированные технические работы.<br/>
                            <b>Пожалуйста попробуйте зайти через некоторое время.</b>
                        </p>';


    // Addendum to Version 1.1 /////////////////////////////////////
    // Admin Panel
    $t['admin_panel'] = 'Админ Панель';
    $t['login_title'] = 'CouchCMS';

    // Folders
    $t['no_folders'] = 'Ни один Каталог не задан';
    $t['select_folder'] = 'Выберите Каталог';
    $t['folders'] = 'Каталоги';
    $t['manage_folders'] = 'Управлять Каталогами';
    $t['add_new_folder'] = 'Добавить каталог';
    $t['parent_folder'] = 'Родительский каталог';
    $t['weight'] = 'Вес';
    $t['weight_desc'] = 'Чем выше значение, тем ниже каталог появится в списке. Может принимать отрицательное значение.';
    $t['desc'] = 'Описание';
    $t['image'] = 'Изображение';
    $t['cannot_be_own_parent'] = 'Не может быть своим же родительским каталогом';
    $t['name_already_exists'] = 'Такое имя уже существует';
    $t['pages'] = 'Старницы';
    $t['none'] = 'Пусто';
    $t['confirm_delete_folder'] = 'Вы уверенны, что хотите удалить этот каталог?'; // No question mark please
    $t['confirm_delete_selected_folders'] = 'Вы уверенны, что хотите удалить выбранные каталоги?';

    // Drafts
    $t['draft_caps'] = 'ЧЕРНОВИК'; // Upper case
    $t['draft'] = 'Черновик';
    $t['drafts'] = 'Черновики';
    $t['create_draft'] = 'Создать черновик';
    $t['create_draft_msg'] = 'Сделать копию этой страницы (после сохранения всех изменений)';
    $t['manage_drafts'] = 'Управлять Черновиками'; // Plural
    $t['update_original'] = 'Обновить Оригинал';
    $t['update_original_msg'] = 'Скопировать содержимое этого черновика в оригинал (и удалить черновик)';
    $t['recreate_original'] = 'Восстановить Оригинал';
    $t['no_drafts_found'] = 'Ни один черновик не найден';
    $t['original_page'] = 'Оригинальная страница';
    $t['template'] = 'Шаблон';
    $t['modified'] = 'Изменено'; // Date of last modification
    $t['preview'] = 'Предварительный просмотр';
    $t['confirm_delete_draft'] = 'Вы уверены, что хотите удалить этот черновик?';
    $t['confirm_delete_selected_drafts'] = 'Вы уверены, что хотите удалить выбранные черновики?';
    $t['confirm_apply_selected_drafts'] = 'Вы уверены, что хотите применить все выбранные черновики?';
    $t['view_all_drafts'] = 'Просмотреть все черновики';
    $t['original_deleted'] = 'ОРИГИНАЛ УДАЛЕН'; // Upper case

    // Addendum to Version 1.2 /////////////////////////////////////
    // Nested Pages
    $t['parent_page'] = 'Родительская Страница';
    $t['page_weight_desc'] = 'Чем выше значение, тем ниже страница появится в списке. Может принимать отрицательное значение.';
    $t['active'] = 'Активна';
    $t['inactive'] = 'Не активна';
    $t['menu'] = 'Меню';
    $t['menu_text'] = 'Текст Меню';
    $t['show_in_menu'] = 'Показать в меню';
    $t['not_shown_in_menu'] = 'Не показано в меню';
    $t['leave_empty'] = 'Оставьте поле пустым, чтобы использовать заголовок страницы';
    $t['menu_link'] = 'Ссылка Меню';
    $t['link_url'] = 'Эта страница указывает на следующее местоположение';
    $t['link_url_desc'] = 'Может быть пустым';
    $t['separate_window'] = 'Открыть в отдельном окне';
    $t['pointer_page'] = 'Указательная Страница';
    $t['points_to_another_page'] = 'Указывает на другую страницу';
    $t['points_to'] = 'Указывает';
    $t['redirects'] = 'Переадресовать';
    $t['masquerades'] = 'Маски';
    $t['strict_matching'] = 'Пометить как выбранное в меню для всех страниц ниже этой ссылки';
    $t['up'] = 'Подняться';
    $t['down'] = 'Спуститься';
    $t['remove_template_completely'] = 'Удалить все страницы и черновики этого шаблона для полного удаления';
    $t['remove_uncloned_template_completely'] = 'Удалить все черновики этого шаблона для полного удаления';

    // Addendum to Version 1.2.5 /////////////////////////////////////
    // Gallery
    $t['bulk_upload'] = 'Загрузить';
    $t['folder_empty'] = 'Папка пуста. Пожалуйста используйте кнопку для загрузки сверху.';
    $t['root'] = 'Корень';
    $t['item'] = 'изображение'; // Single
    $t['items'] = 'изображения'; // Multiple
    $t['container'] = 'папка'; // Single
    $t['containers'] = 'папки'; // Multiple

    //
    $t['columns_missing'] = 'Некоторые столбцы отсутствуют!';
    $t['confirm_delete_columns'] = 'Вы уверенны, что хотите навсегда удалить отсутствующие столбцы?';
    $t['add_row'] = 'Добавить Строку';
