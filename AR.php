<?php

    if ( !defined('K_COUCH_DIR') ) die(); // cannot be loaded directly

    // Arabic translation courtesy Khaled Maayeh <maayehkhaled@live.com> (http://www.couchcms.com/forum/memberlist.php?mode=viewprofile&u=18567)

    ///////////EDIT BELOW THIS////////////////////////////////////////

    // Header
    $t['greeting'] = 'مرحباً';
    $t['view_site'] = 'مشاهدة الموقع';
    $t['logout'] = 'تسجيل الخروج';
    $t['javascript_msg'] = 'الجافا سكربت غير مفعل او ان متصفحك لا يدعمه.<br/>
                            الرجاء تحديث متفحك او <a title="فعل الجافا سكربت في متصفحك" href="http://www.google.com/support/bin/answer.py?answer=23852"><b>تفعيل الجافا</b></a> لاستخدام لوحة الادمن.';
    $t['add_new'] = 'أضف جديد';
    $t['add_new_page'] = 'اضف صفحة جديدة';
    $t['add_new_user'] = 'أضف مستخدم جديد';
    $t['view'] = 'عرض';
    $t['list'] = 'قائمة';
    $t['edit'] = 'تحرير';
    $t['delete'] = 'الغاء';
    $t['delete_selected'] = 'الغاء المحدد';
    $t['advanced_settings'] = 'الاعدادات المتقدمة';

    // Sidebar
    $t['comment'] = 'تعليق';
    $t['comments'] = 'تعليقات';
    $t['manage_comments'] = 'ادارة التعليقات';
    $t['users'] = 'مستخدمين';
    $t['manage_users'] = 'ادارة المستخدمين';

    // List pages
    $t['view_all_folders'] = 'اظهار جميع المجلدات';
    $t['filter'] = 'فلتره';
    $t['showing'] = 'اضهار';
    $t['title'] = 'عنوان';
    $t['folder'] = 'مجلد';
    $t['date'] = 'تاريخ';
    $t['actions'] = 'نشاطات';
    $t['no_pages_found'] = 'الصفحة غير موجودة';
    $t['published'] = 'نشرت';
    $t['unpublished'] = 'غير منشورة';
    $t['confirm_delete_page'] = 'هل انت متاكد من عملية الغاء الصفحة ؟'; // No question mark please
    $t['confirm_delete_selected_pages'] = 'هل انت متاكد من عملية الغاء الصفحات المحددة؟';
    $t['remove_template'] = 'ازالة القالب';
    $t['template_missing'] = 'القالب غير موجود';
    $t['prev'] = 'قبل'; // Pagination button
    $t['next'] = 'بعد'; // Pagination button

    // Pages
    $t['welcome'] = 'مرحباً';
    $t['no_regions_defined'] = 'لا يوجد مناطق تعديل معرفة';
    $t['no_templates_defined'] = 'لا يوجد هنالك قوالب معرفة لدى منظم المحتوى';
    $t['access_level'] = 'مستوى الدخول';
    $t['superadmin'] = 'الادمن الرئيسي';
    $t['admin'] = 'المدير العام';
    $t['authenticated_user_special'] = 'مستخدم مسموح له  (خاص)';
    $t['authenitcated_user'] = 'مستخدم مسموح له';
    $t['unauthenticated_user'] = 'الجميع';
    $t['allow_comments'] = 'السماح للمستخدم بالتعليق';
    $t['status'] = 'الحالة';
    $t['name'] = 'الاسم';
    $t['title_desc'] = 'الرجاء اترك هذا الفورم فارغ من اجل ان يقوم النظام بتعبئته اوتوماتيكياً';
    $t['required'] = 'ملزم'; // Required field
    $t['required_msg'] = 'الحقول الملزمة لا يمكن ان تترك فارغة';
    $t['browse_server'] = 'تصفح السيرفير';
    $t['view_image'] = 'عرض الصورة';
    $t['thumb_created_auto'] = 'سو يتم توليدها اوتوماتيكياً';
    $t['recreate'] = 'Recreate';
    $t['thumb_recreated'] = 'الصورة المصغرة إعادة إنشاء';
    $t['crop_from'] = 'القص من';
    $t['top_left'] = 'اعلى اليسار';
    $t['top_center'] = 'اعلى المنتصف';
    $t['top_right'] = 'اعلى اليمين';
    $t['middle_left'] = 'وسط اليسار';
    $t['middle'] = 'وسط';
    $t['middle_right'] = 'وسط اليمين';
    $t['bottom_left'] = 'اسفل اليسار';
    $t['bottom_center'] = 'اسفل المنتصف';
    $t['bottom_right'] = 'اسفل اليمين';
    $t['view_thumbnail'] = 'الصورة المصغرة إنشاء';
    $t['field_not_found'] = 'الحقل غير موجود!';
    $t['delete_permanently'] = 'الغاء بشكل دائم؟';
    $t['view_code'] = 'عرض الكود';
    $t['confirm_delete_field'] = 'هل انت متاكد من الغاء هذا الحقل بشكل نهائي؟';
    $t['save'] = 'حفظ';

    // Comments
    $t['all'] = 'الكل';
    $t['unapprove'] = 'غير مصرح به';
    $t['unapproved'] = 'لم يتم التصريح له';
    $t['approve'] = 'مصرح';
    $t['approved'] = 'مصرح له';
    $t['select-deselect'] = 'حدد/ازالة التحديد الكل';
    $t['confirm_delete_comment'] = 'هل انت متأكد من الغاء هذا التعليق؟';
    $t['confirm_delete_selected_comments'] = 'هل انت متاكد من الغاء التعليقات المحددة ؟';
    $t['bulk_action'] = 'لا تغيير على المحدد';
    $t['apply'] = 'تطبيق';
    $t['submitted_on'] = 'دونت في';
    $t['email'] = 'البريد الالكتروني';
    $t['website'] = 'الموقع';
    $t['duplicate_content'] = 'محتوى مكرر';
    $t['insufficient_interval'] = 'لا يوجد وقت كافي بين التعليقات';

    // Users
    $t['user_name_restrictions'] = 'فقط الاحرف الصغيرة و الارقام و الاشارات المسموح بها';
    $t['display_name'] = 'الاسم الظاهر';
    $t['role'] = 'قاعدة';
    $t['no_users_found'] = 'لم يتم ايجاد المستخدمين';
    $t['confirm_delete_user'] = 'هل انت متاكد من الغاء المستخدم'; // No question mark please
    $t['confirm_delete_selected_users'] = 'هل انت متاكد من الغاء المستخدمين المحددين؟?';
    $t['disabled'] = 'تعطيل';
    $t['new_password'] = 'كلمة مرور جديدة';
    $t['new_password_msg'] = 'اذا كنتترغببتغير كلمةلمرور اكتب واحدة جديدة . غ. غير ذلك اتركها فارغة';
    $t['repeat_password'] = 'اعادة كلمة المرور';
    $t['repeat_password_msg'] = 'الرجاء اعادة كتابة كلمة المرور.';
    $t['user_name_exists'] = 'اسم المستخدم موجود';
    $t['email_exists'] = 'عنوان البريد الالكتروني مستخدم من قبل';

    // Login
    $t['user_name'] = 'اسم الدخول';
    $t['password'] = 'كلمة السر';
    $t['login'] = 'الدخول';
    $t['forgot_password'] = 'نسيت كلمة المرور ؟';
    $t['prompt_cookies'] = 'الكوكيز يجب ان تكون مفعلة لاستخدام هذا مدير المحتوى';
    $t['prompt_username'] = 'الرجاء ادخل اسم الدخول';
    $t['prompt_password'] = 'الرجاء ادخل كلمة المرور';
    $t['invalid_credentials'] = 'اسم دخول او كلمة سر خاطئة';
    $t['account_disabled'] = 'الحساب محظور';
    $t['access_denied'] = 'الدخول ممنوع';
    $t['insufficient_privileges'] = 'انت لا تملك الصلاحية المناسبة لفتح هذه الصفحة.
                                    لفتح هذه الصفحة الرجاء الدخول بمستخدم مناسب.';

    // Password recovery
    $t['recovery_prompt'] = 'الرجاء ادخل اسمك و عنوان البريد الالكتروني<br/>
                            سوف تحصل على كلمة السر عن طريق البريد الالكتروني';
    $t['name_or_email'] = 'اسم الدخول خاصتك او البريد الالكتروني';
    $t['submit'] = 'ارسال';
    $t['submit_error'] = 'الرجاء ادخال اسم الدخول او البريد الالكتروني.';
    $t['no_such_user'] = 'المستخدم غير موجود.';
    $t['reset_req_email_subject'] = 'اعادة ضبط كلمة السر تم';
    $t['reset_req_email_msg_0'] = 'لقد تم طلب تغيير كلمة السر للمستخدم لهذا الموقع الالكتروني';
    $t['reset_req_email_msg_1'] = 'لتأكيد طلبك في تغيير كلمة المرور الرجاء المتابعة على الرابط التالي, غير ذلك تجاهل هذا البريد.';
    $t['email_failed'] = 'لم نتمكن من ارسال البريد الالكتروني.';
    $t['reset_req_email_confirm'] = 'بريد التأكيد قد تم ارساله<br/>
                                    الرجاء التأكد من صندوق بريدك الالكتروني.';
    $t['invalid_key'] = 'مفتاح غير فعال';
    $t['reset_email_subject'] = 'كلمة السر الجديدة';
    $t['reset_email_msg_0'] = 'قد تم تغيير كلمة المرور للموقع و المستخدمين التاليين';
    $t['reset_email_msg_1'] = 'عندما تدخل الى حسابك سوف يتم طلب تغيير كلمة السر.';
    $t['reset_email_confirm'] = 'كلمة السر قد تغييرت<br/>
                                الرجاء التحقق من البريد الالكتروني لرؤية كلمة السر الجديدة.';

    // Maintenance Mode
    $t['back_soon'] = '<h2>وضع الصيانة</h2>
                        <p>
                            نأسف للإزعاج.<br/>
                            موقعنا يخضع حاليا لالصيانة الدورية.<br/>
                            <b>يرجى المحاولة مرة أخرى بعد بعض الوقت.</b>
                        </p>';


    // Addendum to Version 1.1 /////////////////////////////////////
    // Admin Panel
    $t['admin_panel'] = 'لوحة التحكم';
    $t['login_title'] = 'نظام ادارة المحتوى الكنبة';

    // Folders
    $t['no_folders'] = 'لا مجلدات معرفة';
    $t['select_folder'] = 'حدد مجلد';
    $t['folders'] = 'مجلدات';
    $t['manage_folders'] = 'ادارة المجلدات';
    $t['add_new_folder'] = 'اضافة مجلد جديد';
    $t['parent_folder'] = 'مجلد أب';
    $t['weight'] = 'الوزن';
    $t['weight_desc'] = 'زد القيمة, المجلد ذو القيمة سوف يظهر بالاسفل. يمكن نفي ذلك.';
    $t['desc'] = 'الوصف';
    $t['image'] = 'صورة';
    $t['cannot_be_own_parent'] = 'لا يمكن ان يكون اب لنفسه';
    $t['name_already_exists'] = 'الاسم مستخدم';
    $t['pages'] = 'صفحات';
    $t['none'] = 'فارغ';
    $t['confirm_delete_folder'] = 'هل انت متأكد من الغاء المجلد'; // No question mark please
    $t['confirm_delete_selected_folders'] = 'هل انت متاكد من الغاء المجلدات؟';

    // Drafts
    $t['draft_caps'] = 'DRAFT'; // Upper case
    $t['draft'] = 'مسودة';
    $t['drafts'] = 'مسودات';
    $t['create_draft'] = 'انشاء مسودة';
    $t['create_draft_msg'] = 'صنع نسخة من هذه الصفحة بهد حفظ التغييرات';
    $t['manage_drafts'] = 'ادارة المسودات'; // Plural
    $t['update_original'] = 'تحديث الاصل';
    $t['update_original_msg'] = 'نسخ محتويات المسودة الى الصفحة الاصلية (ثم الغي المسودة)';
    $t['recreate_original'] = 'اعادة انشاء الاصل';
    $t['no_drafts_found'] = 'لا يوجد مسودات';
    $t['original_page'] = 'صفحة الاصل';
    $t['template'] = 'قالب';
    $t['modified'] = 'تعديل'; // Date of last modification
    $t['preview'] = 'اظهار';
    $t['confirm_delete_draft'] = 'هل انت متأكد من حذف المسودة؟';
    $t['confirm_delete_selected_drafts'] = 'هل انت متأكد من حذف المسودات ؟';
    $t['confirm_apply_selected_drafts'] = 'هل تريد تطبيق المسودات المحددة؟';
    $t['view_all_drafts'] = 'اظهار جميع المسودات';
    $t['original_deleted'] = 'الاصل محذوفة'; // Upper case

    // Addendum to Version 1.2 /////////////////////////////////////
    // Nested Pages
    $t['parent_page'] = 'صفحة اب';
    $t['page_weight_desc'] = 'زد القيمة, المجلد ذو القيمة سوف يظهر بالاسفل. يمكن نفي ذلك.';
    $t['active'] = 'فعال';
    $t['inactive'] = 'غير فعال';
    $t['menu'] = 'لائحة';
    $t['menu_text'] = 'نص اللائحة';
    $t['show_in_menu'] = 'اظهار في اللائحة';
    $t['not_shown_in_menu'] = 'لم يتم اظهار في اللائحة';
    $t['leave_empty'] = 'اتركها فارغة لأستخدام عنوان الصفحة';
    $t['menu_link'] = 'رابط اللائحة';
    $t['link_url'] = 'هذه الصفحة تدل على الموقع التالي';
    $t['link_url_desc'] = 'يمكن تركها فارغة';
    $t['separate_window'] = 'افتحها بنافذة اخرى';
    $t['pointer_page'] = 'صفحة الدلالة';
    $t['points_to_another_page'] = 'الدلالة على صفحات اخرى';
    $t['points_to'] = 'الدلالة على';
    $t['redirects'] = 'اعادة توجيه';
    $t['masquerades'] = 'تنكر';
    $t['strict_matching'] = 'علم جميع لاصفحات تحت الرابط';
    $t['up'] = 'الى الاعلى';
    $t['down'] = 'الى الاسفل';
    $t['remove_template_completely'] = 'الغاء المسودات و الصفحات لهذا القلب لازالتها بالكامل';
    $t['remove_uncloned_template_completely'] = 'الغاء المسودات و الصفحات لهذا القلب لازالتها بالكامل';

    // Addendum to Version 1.2.5 /////////////////////////////////////
    // Gallery
    $t['bulk_upload'] = 'رفع';
    $t['folder_empty'] = 'المجلد فارغ الرجاء الضغط على كبسة رفع لاضافة الصور.';
    $t['root'] = 'طريق';
    $t['item'] = 'صورة'; // Single
    $t['items'] = 'صور'; // Multiple
    $t['container'] = 'مجلد'; // Single
    $t['containers'] = 'مجلدات'; // Multiple

    //
    $t['columns_missing'] = 'بعض الاعمدة ناقصة!';
    $t['confirm_delete_columns'] = 'هل انت متأكد من الغاء جميع الاعمدة الناقصة';
    $t['add_row'] = 'اضف سطر';
