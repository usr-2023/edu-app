<x-app-layout>

    <x-slot name="header">
        @include('employee.nav.navigation')
    </x-slot>


    <div class="py-6">
        <div class="max-w-full mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div dir="rtl">



                        <h2 class="font-semibold text-l text-gray-800 leading-tight mx-4 my-4 w-full">المعلومات الشخصية
                        </h2>
                        <div class="d-flex justify-content-around ">
                            <div class=" mx-4 my-4 w-full">
                                <x-input-label for="job_number" class="w-full mb-1" :value="__('الرقم الوظيفي')" />
                                <p id="job_number" class="w-full h-9 block mt-1" type="text" name="job_number">
                                    {{ $employee->job_number }}
                                </p>

                            </div>

                            <div class=" mx-4 my-4 w-full">
                                <x-input-label for="name" class="w-full mb-1" :value="__('الاسم')" />
                                <p id="name" class="w-full h-9 block mt-1 " type="text" name="name">
                                    {{ $employee->name }}
                                </p>

                            </div>

                            <div class=" mx-4 my-4 w-full">
                                <x-input-label for="father_name" class="w-full mb-1" :value="__('اسم الاب')" />
                                <p id="father_name" class="w-full h-9 block mt-1 " type="text" name="father_name">
                                    {{ $employee->father_name }}
                                </p>

                            </div>

                            <div class=" mx-4 my-4 w-full">
                                <x-input-label for="grandfather_name" class="w-full mb-1" :value="__('اسم الجد')" />
                                <p id="grandfather_name" class="w-full h-9 block mt-1" type="text"
                                    name="grandfather_name">
                                    {{ $employee->grandfather_name }}
                                </p>

                            </div>

                            <div class=" mx-4 my-4 w-full">
                                <x-input-label for="fourth_grandfather_name" class="w-full mb-1" :value="__('اسم الجد الرابع ')" />
                                <p id="fourth_grandfather_name" class="w-full h-9 block mt-1" type="text"
                                    name="fourth_grandfather_name">
                                    {{ $employee->fourth_grandfather_name }}
                                </p>

                            </div>

                            <div class=" mx-4 my-4 w-full">
                                <x-input-label for="surname" class="w-full mb-1" :value="__('اللقب ')" />
                                <p id="surname" class="w-full h-9 block mt-1" type="text" name="surname">
                                    {{ $employee->surname }}
                                </p>

                            </div>
                        </div>
                        <div class="d-flex justify-content-between">
                            <div class=" mx-4 my-4 w-full">
                                <x-input-label for="mother_name" class="w-full mb-1" :value="__('اسم الام ')" />
                                <p id="mother_name" class="w-full h-9 block mt-1" type="text" name="mother_name">
                                    {{ $employee->mother_name }}
                                </p>

                            </div>

                            <div class=" mx-4 my-4 w-full">
                                <x-input-label for="mother_father_name" class="w-full mb-1" :value="__('اسم اب الام')" />
                                <p id="mother_father_name" class="w-full h-9 block mt-1 " type="text"
                                    name="mother_father_name">
                                    {{ $employee->mother_father_name }}
                                </p>

                            </div>

                            <div class=" mx-4 my-4 w-full">
                                <x-input-label for="mother_grandfather_name" class="w-full mb-1" :value="__('اسم جد الام')" />
                                <p id="mother_grandfather_name" class="w-full h-9 block mt-1 " type="text"
                                    name="mother_grandfather_name">
                                    {{ $employee->mother_grandfather_name }}
                                </p>

                            </div>

                            <div class=" mx-4 my-4 w-full">
                                <x-input-label for="mother_surname" class="w-full mb-1" :value="__('لقب الام ')" />
                                <p id="mother_surname" class="w-full h-9 block mt-1" type="text"
                                    name="mother_surname">
                                    {{ $employee->mother_surname }}
                                </p>

                            </div>

                            <div class=" mx-4 my-4 w-full">
                                <x-input-label for="date_of_birth" class="w-full mb-1" :value="__('تاريخ الميلاد')" />

                                <p id="date_of_birth" class="w-full h-9 block mt-1 " type="text"name="date_of_birth">
                                    {{ $employee->date_of_birth }}
                                </p>


                            </div>

                            <div class=" mx-4 my-4 w-full">
                                <x-input-label for="place_of_birth" class="w-full mb-1" :value="__('محل الميلاد ')" />
                                <p id="place_of_birth" class="w-full h-9 block mt-1 " type="text"
                                    name="place_of_birth">
                                    {{ $employee->place_of_birth }}
                                </p>

                            </div>

                        </div>

                        <div class="flex">


                            <div class=" mx-4 my-4 w-full">
                                <x-input-label for="marital_status_id" class="w-full mb-1" :value="__('الحالة الزوجية ')" />
                                <p id="marital_status_id" class="w-full h-9 block mt-1 " type="text"
                                    name="marital_status_id">
                                    {{ $employee->get_Marital_Status->marital_status }}

                                </p>

                            </div>

                            <div class=" mx-4 my-4 w-full">
                                <x-input-label for="first_husband_name" class="w-full mb-1" :value="__('اسم الزوج - الزوجة')" />
                                <p id="first_husband_name" class="w-full h-9 block mt-1 " type="text"
                                    name="first_husband_name">
                                    {{ $employee->first_husband_name }}
                                </p>

                            </div>

                            <div class=" mx-4 my-4 w-full">
                                <x-input-label for="husband_father_name" class="w-full mb-1" :value="__('اسم اب الزوج - الزوجة')" />
                                <p id="husband_father_name" class="w-full h-9 block mt-1 " type="text"
                                    name="husband_father_name">
                                    {{ $employee->husband_father_name }}
                                </p>

                            </div>


                            <div class=" mx-4 my-4 w-full">
                                <x-input-label for="husband_grandfather_name" class="w-full mb-1"
                                    :value="__('اسم جد الزوج - الزوجة')" />
                                <p id="husband_grandfather_name" class="w-full h-9 block mt-1" type="text"
                                    name="husband_grandfather_name">
                                    {{ $employee->husband_grandfather_name }}
                                </p>

                            </div>

                            <div class=" mx-4 my-4 w-full">
                                <x-input-label for="husband_surname" class="w-full mb-1" :value="__('لقب الزوج - الزوجة')" />
                                <p id="husband_surname" class="w-full h-9 block mt-1 " type="text"
                                    name="husband_surname">
                                    {{ $employee->husband_surname }}
                                </p>

                            </div>

                            <div class=" mx-4 my-4 w-full">
                                <x-input-label for="number_of_children" class="w-full mb-1" :value="__('عدد الأطفال ')" />
                                <p id="number_of_children" class="w-full h-9 block mt-1 " type="text"
                                    name="number_of_children">
                                    {{ $employee->number_of_children }}
                                </p>

                            </div>

                        </div>

                        <div class="flex">

                            <div class=" mx-4 my-4 w-full">
                                <x-input-label for="nationality_id" class="w-full mb-1" :value="__('القومية')" />
                                <p id="nationality_id" class="w-full h-9 block mt-1 " type="text"
                                    name="nationality_id" type="text">
                                    {{ $employee->get_Nationality->nationality }}
                                </p>

                            </div>



                            <div class=" mx-4 my-4 w-full">
                                <x-input-label for="mother_language_id" class="w-full mb-1" :value="__('اللغة الأم')" />
                                <p id="mother_language_id" class="w-full h-9 block mt-1 " type="text"
                                    name="mother_language_id">
                                    {{ $employee->get_Mother_Language->mother_language }}
                                </p>

                            </div>

                            <div class=" mx-4 my-4 w-full">
                                <x-input-label for="gender_id" class="w-full mb-1" :value="__('الجنس')" />
                                <p id="gender_id" class="w-full h-9 block mt-1 " type="text" name="gender_id">
                                    {{ $employee->get_Gender->gender }}
                                </p>

                            </div>


                            <div class=" mx-4 my-4 w-full">
                                <x-input-label for="employee_phone_number" class="w-full mb-1" :value="__('رقم الهاتف - الموبايل ')" />
                                <p id="employee_phone_number" class="w-full h-9 block mt-1" type="text"
                                    name="employee_phone_number">
                                    {{ $employee->employee_phone_number }}
                                </p>

                            </div>

                            <div class=" mx-4 my-4 w-full">
                                <x-input-label for="employee_email" class="w-full mb-1" :value="__('عنوان البريد الالكتروني')" />
                                <p id="employee_email" class="w-full h-9 block mt-1 " type="email"
                                    name="employee_email">
                                    {{ $employee->employee_email }}
                                </p>

                            </div>

                        </div>



                        <h2 class="font-semibold text-l text-gray-800 leading-tight mx-4 my-4 w-full">البيانات الوظيفية
                        </h2>


                        <div class="flex">

                            <div class=" mx-4 my-4 w-full">
                                <x-input-label for="contract_type_id" class="w-full mb-1" :value="__('نوع التعاقد')" />
                                <p id="contract_type_id" class="w-full h-9 block mt-1 " type="text"
                                    name="contract_type_id">
                                    {{ $employee->get_Contract_Type->contract_type }}
                                </p>

                            </div>

                            <div class=" mx-4 my-4 w-full">
                                <x-input-label for="employee_status_id" class="w-full mb-1" :value="__('حالة الموظف - الموظفة')" />
                                <p id="employee_status_id" class="w-full h-9 block mt-1 " type="text"
                                    name="employee_status_id">
                                    {{ $employee->get_Employee_Status->employee_status }}
                                </p>

                            </div>

                            <div class=" mx-4 my-4 w-full">
                                <x-input-label for="employment_type_id" class="w-full mb-1" :value="__('نوع التوظيف')" />
                                <p id="employment_type_id" class="w-full h-9 block mt-1 " type="text"
                                    name="employment_type_id">
                                    {{ $employee->get_Employment_Type->employment_type }}
                                </p>

                            </div>

                            <div class=" mx-4 my-4 w-full">
                                <x-input-label for="section_id" class="w-full mb-1" :value="__('القسم')" />
                                <p id="section_id" class="w-full h-9 block mt-1 " type="text" name="section_id">
                                    {{ $employee->get_Section->section }}
                                </p>

                            </div>

                            <div class=" mx-4 my-4 w-full">
                                <x-input-label for="sub_section_id" class="w-full mb-1" :value="__('الشعبة')" />
                                <p id="sub_section_id" class="w-full h-9 block mt-1 " name="sub_section_id">
                                    {{ $employee->name }}
                                </p>

                            </div>

                            <div class=" mx-4 my-4 w-full">
                                <x-input-label for="sub_sub_section_id" class="w-full mb-1" :value="__('الوحدة')" />
                                <p id="sub_sub_section_id" class="w-full h-9 block mt-1 " name="sub_sub_section_id">
                                    {{ $employee->name }}
                                </p>

                            </div>

                        </div>

                        <div class="flex">

                            <div class=" mx-4 my-4 w-full">
                                <x-input-label for="assignment_type_id" class="w-full mb-1" :value="__('نوع التعيين')" />
                                <p id="assignment_type_id" class="w-full h-9 block mt-1 " name="assignment_type_id">
                                    {{ $employee->name }}
                                </p>

                            </div>

                            <div class=" mx-4 my-4 w-full">
                                <x-input-label for="teaching_specialization_id" class="w-full mb-1"
                                    :value="__('تخصص التدريس')" />
                                <p id="teaching_specialization_id" class="w-full h-9 block mt-1 "
                                    name="teaching_specialization_id">
                                    {{ $employee->name }}
                                </p>

                            </div>

                            <div class=" mx-4 my-4 w-full">
                                <x-input-label for="appointment_date" class="w-full mb-1" :value="__('تاريخ اول تعيين بالوظيفة ')" />
                                <div class="flex">
                                    <p id="appointment_date" class="w-20 block mt-1 " placeholder="يوم"
                                        type="number" name="appointment_date_d" />
                                    </p>
                                    <p id="appointment_date" class="w-20 block mt-1 " placeholder="شهر"
                                        type="number" name="appointment_date_m" />
                                    </p>
                                    <p id="appointment_date" class="w-20 block mt-1 " placeholder="سنة"
                                        type="number" name="appointment_date_y" />
                                    </p>
                                </div>

                            </div>

                            <div class=" mx-4 my-4 w-full">
                                <x-input-label for="appointment_ministerial_order_number" class="w-full mb-1"
                                    :value="__('رقم الامر الوزاري للتعيين ')" />
                                <p id="appointment_ministerial_order_number" class="w-full h-9 block mt-1 "
                                    type="text" name="appointment_ministerial_order_number">
                                    {{ $employee->first_husband_name }}
                                </p>

                            </div>

                            <div class=" mx-4 my-4 w-full">
                                <x-input-label for="appointment_ministerial_order_date" class="w-full mb-1"
                                    :value="__('تاريخ الامر الوزاري للتعيين ')" />
                                <div class="flex">
                                    <p id="appointment_ministerial_order_date" class="w-20 block mt-1 "
                                        placeholder="يوم" type="number"
                                        name="appointment_ministerial_order_date_d" />
                                    </p>
                                    <p id="appointment_ministerial_order_date" class="w-20 block mt-1 "
                                        placeholder="شهر" type="number"
                                        name="appointment_ministerial_order_date_m" />
                                    </p>
                                    <p id="appointment_ministerial_order_date" class="w-20 block mt-1 "
                                        placeholder="سنة" type="number"
                                        name="appointment_ministerial_order_date_y" />
                                    </p>
                                </div>

                            </div>
                        </div>

                        <div class="flex">
                            <div class=" mx-4 my-4 w-full">
                                <x-input-label for="appointment_administrative_order_number" class="w-full mb-1"
                                    :value="__('رقم الامر الإداري للتعيين')" />
                                <p id="appointment_administrative_order_number" class="w-full h-9 block mt-1 "
                                    type="text" name="appointment_administrative_order_number">
                                    {{ $employee->first_husband_name }}
                                </p>

                            </div>

                            <div class=" mx-4 my-4 w-full">
                                <x-input-label for="appointment_administrative_order_date" class="w-full mb-1"
                                    :value="__('تاريخ الامر الإداري للتعيين ')" />
                                <div class="flex">
                                    <p id="appointment_administrative_order_date" class="w-20 block mt-1 "
                                        placeholder="يوم" type="number"
                                        name="appointment_administrative_order_date_d" />
                                    </p>
                                    <p id="appointment_administrative_order_date" class="w-20 block mt-1 "
                                        placeholder="شهر" type="number"
                                        name="appointment_administrative_order_date_m" />
                                    </p>
                                    <p id="appointment_administrative_order_date" class="w-20 block mt-1 "
                                        placeholder="سنة" type="number"
                                        name="appointment_administrative_order_date_y" />
                                    </p>
                                </div>

                            </div>



                            <div class=" mx-4 my-4 w-full">
                                <x-input-label for="appointment_first_initiation_number" class="w-full mb-1"
                                    :value="__('الرقم الإداري بالمباشرة لأول مرة ')" />
                                <p id="appointment_first_initiation_number" class="w-full h-9 block mt-1 "
                                    type="text" name="appointment_first_initiation_number">
                                    {{ $employee->first_husband_name }}
                                </p>

                            </div>

                            <div class=" mx-4 my-4 w-full">
                                <x-input-label for="appointment_first_initiation_date" class="w-full mb-1"
                                    :value="__('تاريخ كتاب المباشرة لأول مرة ')" />
                                <div class="flex">
                                    <p id="appointment_first_initiation_date" class="w-20 block mt-1 "
                                        placeholder="يوم" type="number"
                                        name="appointment_first_initiation_date_d" />
                                    </p>
                                    <p id="appointment_first_initiation_date" class="w-20 block mt-1 "
                                        placeholder="شهر" type="number"
                                        name="appointment_first_initiation_date_m" />
                                    </p>
                                    <p id="appointment_first_initiation_date" class="w-20 block mt-1 "
                                        placeholder="سنة" type="number"
                                        name="appointment_first_initiation_date_y" />
                                    </p>
                                </div>

                            </div>

                            <div class=" mx-4 my-4 w-full">
                                <x-input-label for="nominal_salary" class="w-full mb-1" :value="__('الراتب الاسمي')" />
                                <p id="nominal_salary" class="w-full h-9 block mt-1 " type="number"
                                    name="nominal_salary">
                                    {{ $employee->first_husband_name }}
                                </p>

                            </div>
                        </div>

                        <div class="flex">
                            <div class=" mx-4 my-4 w-full">
                                <x-input-label for="job_title_id" class="w-full mb-1" :value="__('العنوان الوظيفي')" />
                                <p id="job_title_id" class="w-full h-9 block mt-1 " name="job_title_id">
                                    {{ $employee->name }}
                                </p>

                            </div>

                            <div class=" mx-4 my-4 w-full">
                                <x-input-label for="job_grade_id" class="w-full mb-1" :value="__('الدرجة الوظيفية')" />
                                <p id="job_grade_id" class="w-full h-9 block mt-1 " name="job_grade_id">
                                    {{ $employee->name }}
                                </p>

                            </div>

                            <div class=" mx-4 my-4 w-full">
                                <x-input-label for="job_grade_date" class="w-full mb-1" :value="__('تاريخ الحصول على الدرجة الوظيفية')" />
                                <div class="flex">
                                    <p id="job_grade_date" class="w-20 block mt-1 " placeholder="يوم" type="number"
                                        name="job_grade_date_d" />
                                    </p>
                                    <p id="job_grade_date" class="w-20 block mt-1 " placeholder="شهر" type="number"
                                        name="job_grade_date_m" />
                                    </p>
                                    <p id="job_grade_date" class="w-20 block mt-1 " placeholder="سنة" type="number"
                                        name="job_grade_date_y" />
                                    </p>
                                </div>

                            </div>
                            <div class=" mx-4 my-4 w-full">
                                <x-input-label for="career_stage_id" class="w-full mb-1" :value="__('المرحلة المهنية')" />
                                <p id="career_stage_id" class="w-full h-9 block mt-1 " name="career_stage_id">
                                    {{ $employee->name }}
                                </p>

                            </div>

                            <div class=" mx-4 my-4 w-full">
                                <x-input-label for="career_stage_date" class="w-full mb-1" :value="__('تاريخ الحصول على المرحلة المهنية     ')" />
                                <div class="flex">
                                    <p id="career_stage_date" class="w-20 block mt-1 " placeholder="يوم"
                                        type="number" name="career_stage_date_d" />
                                    </p>
                                    <p id="career_stage_date" class="w-20 block mt-1 " placeholder="شهر"
                                        type="number" name="career_stage_date_m" />
                                    </p>
                                    <p id="career_stage_date" class="w-20 block mt-1 " placeholder="سنة"
                                        type="number" name="career_stage_date_y" />
                                    </p>
                                </div>

                            </div>

                        </div>




                        <h2 class="font-semibold text-l text-gray-800 leading-tight mx-4 my-4 w-full">بيانات البطاقة
                            الوطنية</h2>

                        <div class=" mx-4 my-4 w-25">
                            <x-input-label for="is_national_card" class="w-full mb-1" :value="__('هل توجد بطاقة وطنية')" />
                            <p id="is_national_card" class="w-full h-9 block mt-1 " name="is_national_card">

                            </p>

                        </div>

                        <div id="nc">




                            <div class="flex">
                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="national_card_number" class="w-full mb-1"
                                        :value="__('رقم البطاقة الوطنية ')" />
                                    <p id="national_card_number" class="w-full h-9 block mt-1" type="number"
                                        name="national_card_number" />
                                    </p>

                                </div>

                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="national_card_date_of_issue" class="w-full mb-1"
                                        :value="__('تاريخ الاصدار')" />
                                    <div class="flex">
                                        <p id="national_card_date_of_issue" class="w-20 block mt-1 "
                                            placeholder="يوم" type="number" name="national_card_date_of_issue_d" />
                                        </p>
                                        <p id="national_card_date_of_issue" class="w-20 block mt-1 "
                                            placeholder="شهر" type="number" name="national_card_date_of_issue_m" />
                                        </p>
                                        <p id="national_card_date_of_issue" class="w-20 block mt-1 "
                                            placeholder="سنة" type="number" name="national_card_date_of_issue_y" />
                                        </p>
                                    </div>

                                </div>

                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="national_card_issuing_authority" class="w-full mb-1"
                                        :value="__('جهة الاصدار ')" />
                                    <p id="national_card_issuing_authority" class="w-full h-9 block mt-1 "
                                        type="text" name="national_card_issuing_authority" />
                                    </p>

                                </div>

                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="national_card_family_number" class="w-full mb-1"
                                        :value="__('الرقم العائلي')" />
                                    <p id="national_card_family_number" class="w-full h-9 block mt-1 " type="text"
                                        name="national_card_family_number" />
                                    </p>

                                </div>
                            </div>
                        </div>

                        <div id="ci">

                            <h2 class="font-semibold text-l text-gray-800 leading-tight mx-4 my-4 w-full">بيانات هوية
                                الأحوال المدنية </h2>


                            <div class="flex">
                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="civil_status_identity_number" class="w-full mb-1"
                                        :value="__('رقم هوية الأحوال المدنية ')" />
                                    <p id="civil_status_identity_number" class="w-full h-9 block mt-1" type="text"
                                        name="civil_status_identity_number" />
                                    </p>

                                </div>

                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="civil_status_registry_number" class="w-full mb-1"
                                        :value="__('رقم السجل ')" />
                                    <p id="civil_status_registry_number" class="w-full h-9 block mt-1 "
                                        type="text" name="civil_status_registry_number" />
                                    </p>

                                </div>

                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="civil_status_newspaper_number" class="w-full mb-1"
                                        :value="__('رقم الصحيفة ')" />
                                    <p id="civil_status_newspaper_number" class="w-full h-9 block mt-1 "
                                        type="text" name="civil_status_newspaper_number" />
                                    </p>

                                </div>

                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="civil_status_issue_date" class="w-full mb-1"
                                        :value="__('تاريخ الاصدار')" />
                                    <div class="flex">
                                        <p id="civil_status_issue_date" class="w-20 block mt-1 " placeholder="يوم"
                                            type="number" name="civil_status_issue_date_d" />
                                        </p>
                                        <p id="civil_status_issue_date" class="w-20 block mt-1 " placeholder="شهر"
                                            type="number" name="civil_status_issue_date_m" />
                                        </p>
                                        <p id="civil_status_issue_date" class="w-20 block mt-1 " placeholder="سنة"
                                            type="number" name="civil_status_issue_date_y" />
                                        </p>
                                    </div>

                                </div>

                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="civil_status_issuer" class="w-full mb-1" :value="__('جهة الاصدار ')" />
                                    <p id="civil_status_issuer" class="w-full h-9 block mt-1 " type="text"
                                        name="civil_status_issuer" />
                                    </p>

                                </div>
                            </div>

                            <h2 class="font-semibold text-l text-gray-800 leading-tight mx-4 my-4 w-full">بيانات شهادة
                                الجنسية </h2>

                            <div class="flex">
                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="nationality_certificate_number" class="w-full mb-1"
                                        :value="__('رقم شهادة الجنسية  ')" />
                                    <p id="nationality_certificate_number" class="w-full h-9 block mt-1 "
                                        type="text" name="nationality_certificate_number" />
                                    </p>

                                </div>

                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="nationality_certificate_authority_issuing_wallet"
                                        class="w-full mb-1" :value="__('رقم المحفظة  ')" />
                                    <p id="nationality_certificate_authority_issuing_wallet"
                                        class="w-full h-9 block mt-1 " type="text"
                                        name="nationality_certificate_authority_issuing_wallet" />
                                    </p>

                                </div>

                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="nationality_certificate_authority_issuing_date"
                                        class="w-full mb-1" :value="__(' تاريخ اصدار شهادة الجنسية  ')" />
                                    <div class="flex">
                                        <p id="nationality_certificate_authority_issuing_date"
                                            class="w-20 block mt-1 " placeholder="يوم" type="number"
                                            name="nationality_certificate_authority_issuing_date_d" />
                                        </p>
                                        <p id="nationality_certificate_authority_issuing_date"
                                            class="w-20 block mt-1 " placeholder="شهر" type="number"
                                            name="nationality_certificate_authority_issuing_date_m" />
                                        </p>
                                        <p id="nationality_certificate_authority_issuing_date"
                                            class="w-20 block mt-1 " placeholder="سنة" type="number"
                                            name="nationality_certificate_authority_issuing_date_y" />
                                        </p>
                                    </div>

                                </div>

                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="nationality_certificate_authority_issuing" class="w-full mb-1"
                                        :value="__(' جهة اصدار شهادة الجنسية ')" />
                                    <p id="nationality_certificate_authority_issuing" class="w-full h-9 block mt-1 "
                                        type="text" name="nationality_certificate_authority_issuing" />
                                    </p>

                                </div>

                            </div>
                        </div>


                        <h2 class="font-semibold text-l text-gray-800 leading-tight mx-4 my-4 w-full">بيانات بطاقة
                            السكن </h2>


                        <div class="flex">
                            <div class=" mx-4 my-4 w-full">
                                <x-input-label for="housing_card_number" class="w-full mb-1" :value="__(' رقم بطاقة السكن')" />
                                <p id="housing_card_number" class="w-full h-9 block mt-1" type="text"
                                    name="housing_card_number">
                                    {{ $employee->first_husband_name }}
                                </p>

                            </div>

                            <div class=" mx-4 my-4 w-full">
                                <x-input-label for="housing_card_date_of_issue" class="w-full mb-1"
                                    :value="__('تاريخ الإصدار ')" />
                                <div class="flex">
                                    <p id="housing_card_date_of_issue" class="w-20 block mt-1 " placeholder="يوم"
                                        type="number" name="housing_card_date_of_issue_d" />
                                    </p>
                                    <p id="housing_card_date_of_issue" class="w-20 block mt-1 " placeholder="شهر"
                                        type="number" name="housing_card_date_of_issue_m" />
                                    </p>
                                    <p id="housing_card_date_of_issue" class="w-20 block mt-1 " placeholder="سنة"
                                        type="number" name="housing_card_date_of_issue_y" />
                                    </p>
                                </div>

                            </div>

                            <div class=" mx-4 my-4 w-full">
                                <x-input-label for="housing_card_issuing_authority" class="w-full mb-1"
                                    :value="__('جهة الإصدار')" />
                                <p id="housing_card_issuing_authority" class="w-full h-9 block mt-1 " type="text"
                                    name="housing_card_issuing_authority">
                                    {{ $employee->first_husband_name }}
                                </p>

                            </div>

                            <div class=" mx-4 my-4 w-full">
                                <x-input-label for="housing_card_residence_address" class="w-full mb-1"
                                    :value="__('عنوان السكن ')" />
                                <p id="housing_card_residence_address" class="w-full h-9 block mt-1 " type="text"
                                    name="housing_card_residence_address">
                                    {{ $employee->first_husband_name }}
                                </p>

                            </div>

                            <div class=" mx-4 my-4 w-full">
                                <x-input-label for="housing_card_governorate" class="w-full mb-1"
                                    :value="__(' محافظة ')" />
                                <p id="housing_card_governorate" class="w-full h-9 block mt-1 " type="text"
                                    name="housing_card_governorate">
                                    {{ $employee->first_husband_name }}
                                </p>

                            </div>
                        </div>


                        <div class="flex">
                            <div class=" mx-4 my-4 w-full">
                                <x-input-label for="housing_card_district" class="w-full mb-1" :value="__('ناحية ')" />
                                <p id="housing_card_district" class="w-full h-9 block mt-1" type="text"
                                    name="housing_card_district">
                                    {{ $employee->first_husband_name }}
                                </p>

                            </div>

                            <div class=" mx-4 my-4 w-full">
                                <x-input-label for="housing_card_neighborhood" class="w-full mb-1"
                                    :value="__('حي  ')" />
                                <p id="housing_card_neighborhood" class="w-full h-9 block mt-1 " type="text"
                                    name="housing_card_neighborhood">
                                    {{ $employee->first_husband_name }}
                                </p>

                            </div>

                            <div class=" mx-4 my-4 w-full">
                                <x-input-label for="housing_card_house_number" class="w-full mb-1"
                                    :value="__('رقم الدار ')" />
                                <p id="housing_card_house_number" class="w-full h-9 block mt-1 " type="text"
                                    name="housing_card_house_number">
                                    {{ $employee->first_husband_name }}
                                </p>

                            </div>

                            <div class=" mx-4 my-4 w-full">
                                <x-input-label for="housing_card_nearest_point_of_reference" class="w-full mb-1"
                                    :value="__('أقرب نقطة دالة ')" />
                                <p id="housing_card_nearest_point_of_reference" class="w-full h-9 block mt-1 "
                                    type="text" name="housing_card_nearest_point_of_reference">
                                    {{ $employee->first_husband_name }}
                                </p>

                            </div>

                            <div class=" mx-4 my-4 w-full">
                                <x-input-label for="housing_card_mukhtar_name" class="w-full mb-1"
                                    :value="__('اسم المختار')" />
                                <p id="housing_card_mukhtar_name" class="w-full h-9 block mt-1 " type="text"
                                    name="housing_card_mukhtar_name">
                                    {{ $employee->first_husband_name }}
                                </p>

                            </div>
                        </div>



                        <h2 class="font-semibold text-l text-gray-800 leading-tight mx-4 my-4 w-full">بيانات التحصيل
                            الدراسي - الشهادة المعيين عليها الموظف - الموظفة</h2>


                        <div class="flex">
                            <div class=" mx-4 my-4 w-full">
                                <x-input-label for="certificate_of_appointment_academic_achievement"
                                    class="w-full mb-1" :value="__('التحصيل الدراسي ')" />
                                <p id="certificate_of_appointment_academic_achievement" class="w-full h-9 block mt-1"
                                    type="text" name="certificate_of_appointment_academic_achievement">
                                    {{ $employee->first_husband_name }}
                                </p>

                            </div>

                            <div class=" mx-4 my-4 w-full">
                                <x-input-label for="certificate_of_appointment" class="w-full mb-1"
                                    :value="__('شهادة التعيين ')" />
                                <p id="certificate_of_appointment" class="w-full h-9 block mt-1 " type="text"
                                    name="certificate_of_appointment">
                                    {{ $employee->first_husband_name }}
                                </p>

                            </div>

                            <div class=" mx-4 my-4 w-full">
                                <x-input-label for="certificate_of_appointment_graduation_year" class="w-full mb-1"
                                    :value="__('سنة التخرج ')" />
                                <p id="certificate_of_appointment_graduation_year" class="w-full h-9 block mt-1 "
                                    type="text" name="certificate_of_appointment_graduation_year">
                                    {{ $employee->first_husband_name }}
                                </p>

                            </div>

                            <div class=" mx-4 my-4 w-full">
                                <x-input-label for="certificate_of_appointment_university_institute_school_name"
                                    class="w-full mb-1" :value="__('اسم المؤسسة التعليمية')" />
                                <p id="certificate_of_appointment_university_institute_school_name"
                                    class="w-full h-9 block mt-1 " type="text"
                                    name="certificate_of_appointment_university_institute_school_name">
                                    {{ $employee->first_husband_name }}
                                </p>

                            </div>

                        </div>


                        <div class="flex">

                            <div class=" mx-4 my-4 w-full">
                                <x-input-label for="certificate_of_appointment_college_name" class="w-full mb-1"
                                    :value="__('اسم الكلية')" />
                                <p id="certificate_of_appointment_college_name" class="w-full h-9 block mt-1 "
                                    type="text" name="certificate_of_appointment_college_name">
                                    {{ $employee->first_husband_name }}
                                </p>

                            </div>

                            <div class=" mx-4 my-4 w-full">
                                <x-input-label for="certificate_of_appointment_major" class="w-full mb-1"
                                    :value="__('التخصص ')" />
                                <p id="certificate_of_appointment_major" class="w-full h-9 block mt-1" type="text"
                                    name="certificate_of_appointment_major">
                                    {{ $employee->first_husband_name }}
                                </p>

                            </div>

                            <div class=" mx-4 my-4 w-full">
                                <x-input-label for="certificate_of_appointment_mark" class="w-full mb-1"
                                    :value="__('المعدل')" />
                                <p id="certificate_of_appointment_mark" class="w-full h-9 block mt-1 " type="number"
                                    name="certificate_of_appointment_mark">
                                    {{ $employee->first_husband_name }}
                                </p>

                            </div>
                        </div>


                        <h2 class="font-semibold text-l text-gray-800 leading-tight mx-4 my-4 w-full">بيانات التحصيل
                            الدراسي - اخر شهادة حاصل عليها الموظف - الموظفة</h2>

                        <div class="flex">

                            <div class=" mx-4 my-4 w-full">
                                <x-input-label for="last__academic_achievement" class="w-full mb-1"
                                    :value="__('التحصيل الدراسي ')" />
                                <p id="last_academic_achievement" class="w-full h-9 block mt-1" type="text"
                                    name="last_academic_achievement">
                                    {{ $employee->first_husband_name }}
                                </p>

                            </div>
                            <div class=" mx-4 my-4 w-full">
                                <x-input-label for="last_certificate_obtained" class="w-full mb-1"
                                    :value="__('اخر شهادة حاصل عليها ')" />
                                <p id="last_certificate_obtained" class="w-full h-9 block mt-1 " type="text"
                                    name="last_certificate_obtained">
                                    {{ $employee->first_husband_name }}
                                </p>

                            </div>

                            <div class=" mx-4 my-4 w-full">
                                <x-input-label for="last_year_of_graduation" class="w-full mb-1" :value="__('سنة التخرج ')" />
                                <p id="last_year_of_graduation" class="w-full h-9 block mt-1 " type="text"
                                    name="last_year_of_graduation">
                                    {{ $employee->first_husband_name }}
                                </p>

                            </div>

                            <div class=" mx-4 my-4 w-full">
                                <x-input-label for="last_name_of_the_university" class="w-full mb-1"
                                    :value="__('اسم المؤسسة التعليمية')" />
                                <p id="last_name_of_the_university" class="w-full h-9 block mt-1 " type="text"
                                    name="last_name_of_the_university">
                                    {{ $employee->first_husband_name }}
                                </p>

                            </div>
                        </div>


                        <div class="flex">

                            <div class=" mx-4 my-4 w-full">
                                <x-input-label for="last_name_of_the_college" class="w-full mb-1"
                                    :value="__('اسم الكلية')" />
                                <p id="last_name_of_the_college" class="w-full h-9 block mt-1 " type="text"
                                    name="last_name_of_the_college">
                                    {{ $employee->first_husband_name }}
                                </p>

                            </div>

                            <div class=" mx-4 my-4 w-full">
                                <x-input-label for="last_major" class="w-full mb-1" :value="__('التخصص')" />
                                <p id="last_major" class="w-full h-9 block mt-1 " type="text" name="last_major">
                                    {{ $employee->first_husband_name }}
                                </p>

                            </div>

                            <div class=" mx-4 my-4 w-full">
                                <x-input-label for="last_certificate_of_appointment_mark" class="w-full mb-1"
                                    :value="__('المعدل')" />
                                <p id="last_certificate_of_appointment_mark" class="w-full h-9 block mt-1 "
                                    type="number" name="last_certificate_of_appointment_mark">
                                    {{ $employee->first_husband_name }}
                                </p>

                            </div>

                        </div>



                        <h2 class="font-semibold text-l text-gray-800 leading-tight mx-4 my-4 w-full">بيانات التحصيل
                            الدراسي - اللقب العلمي</h2>
                        <div class=" mx-4 my-4 w-25">
                            <x-input-label for="is_scientific_title" class="w-full mb-1" :value="__('هل يوجد لقب علمي')" />
                            <p id="is_scientific_title" class="w-full h-9 block mt-1 " name="is_scientific_title">

                            </p>

                        </div>

                        <div id="st" class="flex">



                            <div class=" mx-4 my-4 w-full">
                                <x-input-label for="scientific_title_stage_id" class="w-full mb-1"
                                    :value="__('درجة اللقب العلمي')" />
                                <p id="scientific_title_stage_id" class="w-full h-9 block mt-1 "
                                    name="scientific_title_stage_id">
                                    {{ $employee->name }}
                                </p>

                            </div>

                            <div class=" mx-4 my-4 w-full">
                                <x-input-label for="scientific_title_date" class="w-full mb-1" :value="__('تاريخ الحصول على اللقب العلمي')" />
                                <div class="flex">
                                    <p id="scientific_title_date" class="w-20 block mt-1 " placeholder="يوم"
                                        type="number" name="scientific_title_date_d" />
                                    </p>
                                    <p id="scientific_title_date" class="w-20 block mt-1 " placeholder="شهر"
                                        type="number" name="scientific_title_date_m" />
                                    </p>
                                    <p id="scientific_title_date" class="w-20 block mt-1 " placeholder="سنة"
                                        type="number" name="scientific_title_date_y" />
                                    </p>
                                </div>

                            </div>
                        </div>


                        <h2 class="font-semibold text-l text-gray-800 leading-tight mx-4 my-4 w-full">بيانات الفصل
                            السياسي </h2>

                        <div class=" mx-4 my-4 w-25">
                            <x-input-label for="is_political_dismissal" class="w-full mb-1" :value="__('هل يوجد فصل سياسي')" />
                            <p id="is_political_dismissal" class="w-full h-9 block mt-1 "
                                name="is_political_dismissal">

                            </p>

                        </div>

                        <div id="pd">


                            <div class="flex">



                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="political_dismissal_type_id" class="w-full mb-1"
                                        :value="__('نوع الفصل السياسي')" />
                                    <p id="political_dismissal_type_id" class="w-full h-9 block mt-1 "
                                        name="political_dismissal_type_id">

                                    </p>

                                </div>


                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="political_dismissal_duration_from" class="w-full mb-1"
                                        :value="__('للفترة من تاريخ')" />
                                    <div class="flex">
                                        <p id="political_dismissal_duration_from" class="w-20 block mt-1 "
                                            placeholder="يوم" type="number"
                                            name="political_dismissal_duration_from_d" />
                                        </p>
                                        <p id="political_dismissal_duration_from" class="w-20 block mt-1 "
                                            placeholder="شهر" type="number"
                                            name="political_dismissal_duration_from_m" />
                                        </p>
                                        <p id="political_dismissal_duration_from" class="w-20 block mt-1 "
                                            placeholder="سنة" type="number"
                                            name="political_dismissal_duration_from_y" />
                                        </p>
                                    </div>

                                </div>

                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="political_dismissal_duration_to" class="w-full mb-1"
                                        :value="__('للفترة الى تاريخ')" />
                                    <div class="flex">
                                        <p id="political_dismissal_duration_to" class="w-20 block mt-1 "
                                            placeholder="يوم" type="number"
                                            name="political_dismissal_duration_to_d" />
                                        </p>
                                        <p id="political_dismissal_duration_to" class="w-20 block mt-1 "
                                            placeholder="شهر" type="number"
                                            name="political_dismissal_duration_to_m" />
                                        </p>
                                        <p id="political_dismissal_duration_to" class="w-20 block mt-1 "
                                            placeholder="سنة" type="number"
                                            name="political_dismissal_duration_to_y" />
                                        </p>
                                    </div>

                                </div>
                            </div>


                            <div class="flex">

                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="political_dismissal_years" class="w-full mb-1"
                                        :value="__('عدد السنوات')" />
                                    <p id="political_dismissal_years" class="w-full h-9 block mt-1 " type="number"
                                        name="political_dismissal_years" />
                                    </p>

                                </div>

                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="political_dismissal_months" class="w-full mb-1"
                                        :value="__('عدد الاشهر')" />
                                    <p id="political_dismissal_months" class="w-full h-9 block mt-1 " type="number"
                                        name="political_dismissal_months" />
                                    </p>

                                </div>

                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="political_dismissal_days" class="w-full mb-1"
                                        :value="__('عدد الايام')" />
                                    <p id="political_dismissal_days" class="w-full h-9 block mt-1 " type="number"
                                        name="political_dismissal_days" />
                                    </p>

                                </div>

                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="political_dismissal_order_number" class="w-full mb-1"
                                        :value="__('رقم الامر الاداري للفصل السياسي')" />
                                    <p id="political_dismissal_order_number" class="w-full h-9 block mt-1"
                                        type="text" name="political_dismissal_order_number" />
                                    </p>

                                </div>

                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="political_dismissal_order_date" class="w-full mb-1"
                                        :value="__('تأريخ الامر الأداري للفصل السياسي')" />
                                    <div class="flex">
                                        <p id="political_dismissal_order_date" class="w-20 block mt-1 "
                                            placeholder="يوم" type="number"
                                            name="political_dismissal_order_date_d" />
                                        </p>
                                        <p id="political_dismissal_order_date" class="w-20 block mt-1 "
                                            placeholder="شهر" type="number"
                                            name="political_dismissal_order_date_m" />
                                        </p>
                                        <p id="political_dismissal_order_date" class="w-20 block mt-1 "
                                            placeholder="سنة" type="number"
                                            name="political_dismissal_order_date_y" />
                                        </p>
                                    </div>

                                </div>

                            </div>


                            <div class="flex">


                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="political_dismissal_reappointment_number" class="w-full mb-1"
                                        :value="__('رقم الامر الأداري لأعادة التعيين')" />
                                    <p id="political_dismissal_reappointment_number" class="w-full h-9 block mt-1 "
                                        type="text" name="political_dismissal_reappointment_number" />
                                    </p>

                                </div>


                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="political_dismissal_date_reappointment" class="w-full mb-1"
                                        :value="__('تاريخ الأمر الاداري للأعادة التعيين')" />
                                    <div class="flex">
                                        <p id="political_dismissal_date_reappointment" class="w-20 block mt-1 "
                                            placeholder="يوم" type="number"
                                            name="political_dismissal_date_reappointment_d" />
                                        </p>
                                        <p id="political_dismissal_date_reappointment" class="w-20 block mt-1 "
                                            placeholder="شهر" type="number"
                                            name="political_dismissal_date_reappointment_m" />
                                        </p>
                                        <p id="political_dismissal_date_reappointment" class="w-20 block mt-1 "
                                            placeholder="سنة" type="number"
                                            name="political_dismissal_date_reappointment_y" />
                                        </p>
                                    </div>

                                </div>

                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="political_dismissal_ministerial_reappointment_number"
                                        class="w-full mb-1" :value="__('رقم الامر الوزاري لأعادة التعيين')" />
                                    <p id="political_dismissal_ministerial_reappointment_number"
                                        class="w-full h-9 block mt-1 " type="text"
                                        name="political_dismissal_ministerial_reappointment_number" />
                                    </p>

                                </div>

                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="political_dismissal_ministerial_reappointment_date"
                                        class="w-full mb-1" :value="__('تاريخ الامر الوزاري لأعادة التعيين ')" />
                                    <div class="flex">
                                        <p id="political_dismissal_ministerial_reappointment_date"
                                            class="w-20 block mt-1 " placeholder="يوم" type="number"
                                            name="political_dismissal_ministerial_reappointment_date_d" />
                                        </p>
                                        <p id="political_dismissal_ministerial_reappointment_date"
                                            class="w-20 block mt-1 " placeholder="شهر" type="number"
                                            name="political_dismissal_ministerial_reappointment_date_m" />
                                        </p>
                                        <p id="political_dismissal_ministerial_reappointment_date"
                                            class="w-20 block mt-1 " placeholder="سنة" type="number"
                                            name="political_dismissal_ministerial_reappointment_date_y" />
                                        </p>
                                    </div>

                                </div>


                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>


</x-app-layout>
