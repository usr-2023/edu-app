<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Word Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used during viewing all pages for various
    | messages that we need to display to the user. You are free to modify
    | these language lines according to your application's requirements.
    |
    */
    //auth
    'user_create'=>'تم الانشاء من قبل',
    'user_update'=>'تم التحديث من قبل',
     //buttons
    'view'=>'عرض',
    'edit'=>'تعديل',
    'delete'=>'حذف',
    'update'=>'تعديل',
    'save'=>'حفظ',
    'back'=>'رجوع',

     // general values
     'year'=>'سنة',
     'month'=>'شهر',
     'day'=>'يوم',   

    //main navigation 
    'dashboard' => 'الرئيسية',
    'info' => 'المعلومات الاساسية',
    'hr' => 'الموارد البشرية',
    'ges' => 'التعليم العام والملاك',
    'financial' => 'الحسابات',
    'Planning' => 'التخطيط',
    'users' => 'المستخدمين',
    'roles' => 'الصلاحيات',

    // dashboard
    'dashboard_msg' => 'مرحباً بك في الموقع الالكتروني للمديرية العامة للتربية في محافظة النجف الأشرف',
    'dashboard_title'=> 'مرحباً',
    // basic info
    'basic_msg' => 'الصفحة الخاصة بالمعلومات الاساسية',
    //************************************* users        ******************************************* 
    'user_name' => 'اسم المستخدم',
    'password' => 'كلمة السر',
    'confirm_password' => 'تأكيد كلمة السر',
    'email' => 'عنوان البريد الألكتروني',
    'user_status' => 'الحالة',
    'user_role' => 'الدور',
    'department_id' => 'المؤسسة',
    
    //nav
    'user_add' => 'اضافة مستخدم',
    'user_search' => 'عرض المستخدمين',

    //user_info
    'user_info'=> 'معلومات المستخدم',

    //************************************* role        ******************************************* 
    //fields
    'role_name' => 'اسم الدور',
    'guard' => 'الحماية',
    'permission' => 'الصلاحيات',

    //nav
    'role_add' => 'اضافة دور',
    'role_search' => 'عرض الأدوار',

    //user_info
    'role_info'=> 'معلومات الدور',



        //************************************* notification *******************************************
        'notifications' => 'الإشعارات',
        'show_all' => 'عرض الكل',
        'markallasread' => 'تمييز الكل كمقروء',
        'unreadnotification' => 'الاشعارات غير المقروءة',
        'nonotification' => 'لم يتم اضافة اشعارات',
        'readnotification' => 'الاشعارات المقروءة',
    
    

    // ************************************** employee *********************************************
    // nav
    'employee_add' => 'اضافة موظف',
    'employee_search' => 'بحث موظف',
    
    'personal_info' => 'المعلومات الشخصية',
    'functional_data' => 'البيانات الوظيفية',
    'National_card_data' => 'بيانات البطاقة الوطنية',
    'Civil_status_identity_data' => 'بيانات هوية الأحوال المدنية',
    'Nationality_certificate_data' => 'بيانات شهادة الجنسية',
    'Residence_card_information' => 'بيانات بطاقة السكن', 
    'Academic_achievement_data1' => 'بيانات التحصيل الدراسي - الشهادة المعيين عليها الموظف',
    'Academic_achievement_data2' => 'بيانات التحصيل الدراسي - اخر شهادة حاصل عليها الموظف',
    'Academic_achievement_data3' => 'بيانات التحصيل الدراسي - اللقب العلمي',
    'Political_career_segregation_data' => 'بيانات الفصل السياسي',

    // fields
        'action' => 'الوظائف',
        'job_number' => 'الرقم الوظيفي',
        'url_address' => 'عنوان الويب',
        
        
        //foreign id and reference
        'employee_status_id'=> 'الحالة الوظيفية',
        'contract_type_id'=> 'نوع التعاقد',
        'employment_type_id'=> 'نوع التوظيف',
        'assignment_type_id'=> 'نوع التعيين',
        'nationality_id'=> 'القومية',
        'mother_language_id'=> 'اللغة الام',
        'gender_id'=> 'الجنس',
        'scientific_title_stage_id'=> 'درجة اللقب العلمي',
        'job_title_id'=> 'العنوان الوظيفي',
        'job_grade_id'=> 'الدرجة الوظيفية',
        'career_stage_id'=> 'المرحلة المهنية',
        'teaching_specialization_id'=> 'اختصاص التدريس',
        'political_dismissal_type_id'=> 'نوع الفصل السياسي',
        'marital_status_id'=> 'الحالة الزوجية',

        //normal fields
        'name'=> 'الاسم',
        'father_name'=> 'اسم الاب',
        'grandfather_name'=> 'اسم الجد',
        'fourth_grandfather_name'=> 'اسم الجد الرابع',
        'surname'=> 'اللقب',
        'full_name'=> 'الاسم الكامل',
        'mother_name'=> 'اسم الام',
        'mother_father_name'=> 'اسم اب الام',
        'mother_grandfather_name'=> 'اسم جد الام',
        'mother_surname'=> 'لقب الام',
        'mother_full_name'=> 'اسم الام الكامل',
        'date_of_birth'=> 'التولد',
        'place_of_birth'=> 'محل الميلاد',
        'first_husband_name'=> 'اسم الزوج - الزوجة',
        'husband_father_name'=> 'اسم اب الزوج - الزوجة',
        'husband_grandfather_name'=> 'اسم جد الزوج - الزوجة',
        'husband_surname'=> 'لقب الزوج - الزوجة',
        'number_of_children'=> 'عدد الاولاد',
        'employee_phone_number'=> 'رقم الموبايل',
        'employee_email'=> 'عنوان البريد الالكتروني',
        'is_national_card'=> 'هل توجد بطاقة وطنية',
        'national_card_number'=> 'رقم البطاقة الوطنية',
        'national_card_date_of_issue'=> 'تأريخ الاصدار',
        'national_card_issuing_authority'=> 'جهة الاصدار',
        'national_card_family_number'=> 'الرقم العائلي',
        'civil_status_identity_number'=> 'رقم هوية الاحوال المدنية',
        'civil_status_registry_number'=> 'رقم السجل',
        'civil_status_newspaper_number'=> 'رقم الصحيفة',
        'civil_status_issue_date'=> 'تاريخ الاصدار',
        'civil_status_issuer'=> 'جهة الاصدار',
        'nationality_certificate_number'=> 'رقم شهادة الجنسية',
        'nationality_certificate_authority_issuing'=> 'جهة الاصدار',
        'nationality_certificate_authority_issuing_date'=> 'تأريخ الاصدار',
        'nationality_certificate_authority_issuing_wallet'=> 'رقم المحفظة',
        'housing_card_number'=> 'رقم بطاقة السكن',
        'housing_card_date_of_issue'=> 'تأريخ الاصدار',
        'housing_card_issuing_authority'=> 'جهة الاصدار',
        'housing_card_residence_address'=> 'عنوان السكن',
        'housing_card_governorate'=> 'المحافظة',
        'housing_card_district'=> 'القضاء',
        'housing_card_neighborhood'=> 'المحلة',
        'housing_card_house_number'=> 'رقم الدار',
        'housing_card_nearest_point_of_reference'=> 'اقرب نقطة دالة',
        'housing_card_mukhtar_name'=> 'اسم المختار',
        'certificate_of_appointment_academic_achievement'=> 'التحصيل الدراسي',
        'certificate_of_appointment'=> 'شهادة التعيين',
        'certificate_of_appointment_graduation_year'=> 'سنة التخرج',
        'certificate_of_appointment_university_institute_school_name'=> 'اسم الجامعة - المدرسة',
        'certificate_of_appointment_college_name'=> 'اسم الكلية',
        'certificate_of_appointment_major'=> 'القسم',
        'certificate_of_appointment_mark'=> 'المعدل',
        'last_academic_achievement'=> 'اخر تحصيل دراسي',
        'last_certificate_obtained'=> 'اخر شهادة',
        'last_year_of_graduation'=> 'سنة التخرج لأخر شهادة',
        'last_name_of_the_university'=> 'اسم الجامعة',
        'last_university_institute_school_name'=> 'اسم الجامعة - المدرسة',
        'last_name_of_the_college'=> 'الكلية',
        'last_major'=> 'القسم',
        'last_certificate_of_appointment_mark'=> 'المعدل',
        'is_scientific_title'=> 'هل يوجد لقب علمي',
        'scientific_title_date'=> 'تاريخ الحصول على اللقب العلمي',
        'appointment_date'=> 'تاريخ التعيين',
        'appointment_ministerial_order_number'=> 'رقم الامر الوزاري',
        'appointment_ministerial_order_date'=> 'تاريخ الامر الوزاري',
        'appointment_administrative_order_number'=> 'رقم الامر الاداري',
        'appointment_administrative_order_date'=> 'تاريخ الامر الاداري',
        'appointment_first_initiation_number'=> 'رقم كتاب المباشرة لاول مرة',
        'appointment_first_initiation_date'=> 'تاريخ كتاب المباشرة لاول مرة',
        'nominal_salary'=> 'الراتب الاسمي',
        'job_grade_date'=> 'تاريخ الحصول على الدرجة الوظيفية',
        'career_stage_date'=> 'تاريخ الحصول على المرحلة الوظيفية',
        'is_political_dismissal'=> 'هل يوجد فصل سياسي',
        'political_dismissal_duration_from'=> 'الفترة من',
        'political_dismissal_duration_to'=> 'الفترة الى',
        'political_dismissal_years'=> 'عدد السنوات',
        'political_dismissal_months'=> 'عدد الاشهر',
        'political_dismissal_days'=> 'عدد الايام',
        'political_dismissal_order_number'=> 'رقم الامر الاداري',
        'political_dismissal_order_date'=> 'تاريخ الامر الاداري',
        'political_dismissal_reappointment_number'=> 'رقم كتاب اعادة التعيين',
        'political_dismissal_date_reappointment'=> 'تاريخ كتاب اعادة التعيين',
        'political_dismissal_ministerial_reappointment_number'=> 'رقم الامر الوزاري',
        'political_dismissal_ministerial_reappointment_date'=> 'تاريخ الامر الوزاري',


       

    // ******************************************Building ***************************************
    'building_add' => 'اضافة بناية',
    'building_search' => 'بحث بناية',

    'building_reference' => 'الرقم الاحصائي للبناية',
    'building_info' => 'معلومات البناية',
    'building_address_full' => 'العنوان الكامل',
    'building_status' => 'الحالة العامة للبناية',
    'additional_info' => 'معلومات اضافية',



    //foreign id and reference
    'building_status_id' => 'حالة البناية',

    'building_type_id' => 'نوع البناية',
    //'Last_School_id'=>'Last School',

    //normal fields

    'city' => 'المدينة',
    'district' => 'القضاء',
    'quarter' => 'الناحية',
    'latitude' => 'خط العرض',
    'longitude' => 'خط الطول',
    'class_count' => 'عدد الصفوف',
    'hall_count' => 'عدد القاعات',
    'floor_count' => 'عدد الطوابق',
    'sanitary_units_count' => 'عدد الوحدات الصحية',
    'lab_count' => 'عدد المختبرات',
    'school_length' => 'الطول (متر)',
    'school_width' => 'العرض (متر)',
    'building_area' => 'مساحة البناء (متر)',
    'building_year' => 'سنة البناء',
    'is_extend_area' => 'هل توجد مساحة اضافية',
    'is_sport_area' => 'هل توجد ساحة رياضية',
    'is_garden_area' => 'هل توجد حديقة',

 // *******************School********************************* 
         'School_add'=>'اضافة مدرسة',
         'School_search'=>'بحث مدرسة',
         'School_property'=>'عائدية المدرسة',
         'Duality'=>'نوع الدوام',
         'School_invironment'=>'بيئة المدرسة',
         'School_time'=>'دوام المدرسة',
         'Counting_number'=>'الرقم الاحصائي',
         'School_name'=>'اسم المدرسة',
         'School_gender'=>'جنس المدرسة',
         'School_stage'=>'تصنيف المدرسة',
         'Is_main_school'=>'هل المدرسة اصلية',
         'Guest_school'=>'رمز المدرسة الضيف',
         'Province'=>'المحافظة',
         'personale_design_number'=>'الاستيعاب حسب التصميم',
         'male_pupils_number'=>'التلاميذ او الطلبة الذكور',
         'female_pupils_number'=>'التلاميذ او الطلبة الاناث',
         'filed_classes_number'=>'عدد الشعب المشغولة',
         'is_special_education'=>'هل توجد صفوف تربية خاصة',
         'desks_number'=>'عدد الرحلات',
         'is_computer_available'=>'هل يوجد حواسيب',
         'is_teaching_computer'=>'هل المدرسة مشمولة بتدريس الحاسوب',
         'is_teaching_other_languages'=>'هل المدرسة مشمولة بتدريس اللغات ',
         'is_electronic_classes'=>'هل يوجد صفوف الكترونية',
         'Main_section'=>'القسم (نجف/كوفة/مناذرة)',
         'classrooms_number'=>'عدد الصفوف',
         'halls_count'=>'عدد القاعات',
         'is_predicated'=>'هل المدرسة مستندة',
         'Main_info'=>'المعلومات الاساسية',
         'established_year'=>'سنة التأسيس',
         'occupied_rooms_number'=>'عدد الغرف المشغولة',
         'is_there_airconditions'=>'هل يوجد اجهزة تكييف',

         //******************************* Section************************************ */
        
        'section_add'=>'اضافة قسم / شعبة',
         'section_search'=>'بحث قسم  / شعبة',
         'section_name'=>'اسم القسم  / شعبة',
         'section_counting_number'=>'الرقم الاحصائي للقسم  / شعبة',

        //******************************* facility************************************ */
        
        'facility_add'=>'أضافة دائرة',
         'facility_search'=>'بحث دائرة',
         'facility_name'=>'اسم الدائرة',
         'facility_work_address'=>'مقر العمل',
         'facility_type_id'=>'نوع الدائرة',
         'facility_group_id'=>'مجموعة الدائرة',
         'work_address_id'=>'الدائرة',
         'facility_choose'=>'اختر الدائرة',
         'facility_choose_type'=>'اختر نوع الدائرة',

         //******************************financial********************************************** */
         'financial_msg'=>'اهلا بكم في الصفحة الخاصة بالحسابات',

        //******************************* financial_organizer************************************ */
        
        'financial_accountant_add'=>'اضافة محاسب',
         'financial_accountant_search'=>'بحث محاسب',
         'financial_accountant_name'=>'اسم المحاسب',
         'financial_accountant_status'=>'حالة المحاسب',
         'financial_accountant_user_id'=>'اسم حساب المحاسب',



];
