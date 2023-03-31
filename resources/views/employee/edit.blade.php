<x-app-layout>

    <x-slot name="header">
        @include('employee.nav.navigation')
    </x-slot>


    <div class="py-6">
        <div class="max-w-full mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div dir="rtl">
                        <form method="POST" action="{{ route('employee') }}">
                            @csrf


                            <h2 class="font-semibold text-l text-gray-800 leading-tight mx-4 my-4 w-full">المعلومات
                                الشخصية</h2>
                            <div class="d-flex justify-content-around ">
                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="job_number" class="w-full mb-1" :value="__('الرقم الوظيفي')" />
                                    <x-text-input id="job_number" class="w-full block mt-1" type="text"
                                        name="job_number" value="{{ $employee->job_number }}" />
                                    <x-input-error :messages="$errors->get('job_number')" class="w-full mt-2" />
                                </div>

                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="name" class="w-full mb-1" :value="__('الاسم')" />
                                    <x-text-input id="name" class="w-full block mt-1 " type="text"
                                        name="name" value="{{ $employee->name }}" />
                                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                </div>

                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="father_name" class="w-full mb-1" :value="__('اسم الاب')" />
                                    <x-text-input id="father_name" class="w-full block mt-1 " type="text"
                                        name="father_name" value="{{ $employee->father_name }}" />
                                    <x-input-error :messages="$errors->get('father_name')" class="w-full mt-2" />
                                </div>

                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="grandfather_name" class="w-full mb-1" :value="__('اسم الجد')" />
                                    <x-text-input id="grandfather_name" class="w-full block mt-1" type="text"
                                        name="grandfather_name" value="{{ $employee->grandfather_name }}" />
                                    <x-input-error :messages="$errors->get('grandfather_name')" class="w-full mt-2" />
                                </div>

                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="fourth_grandfather_name" class="w-full mb-1"
                                        :value="__('اسم الجد الرابع ')" />
                                    <x-text-input id="fourth_grandfather_name" class="w-full block mt-1" type="text"
                                        name="fourth_grandfather_name"
                                        value="{{ $employee->fourth_grandfather_name }}" />
                                    <x-input-error :messages="$errors->get('fourth_grandfather_name')" class="w-full mt-2" />
                                </div>

                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="surname" class="w-full mb-1" :value="__('اللقب ')" />
                                    <x-text-input id="surname" class="w-full block mt-1" type="text" name="surname"
                                        value="{{ $employee->surname }}" />
                                    <x-input-error :messages="$errors->get('surname')" class="w-full mt-2" />
                                </div>
                            </div>
                            <div class="d-flex justify-content-between">
                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="mother_name" class="w-full mb-1" :value="__('اسم الام ')" />
                                    <x-text-input id="mother_name" class="w-full block mt-1" type="text"
                                        name="mother_name" value="{{ $employee->mother_name }}" />
                                    <x-input-error :messages="$errors->get('mother_name')" class="w-full mt-2" />
                                </div>

                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="mother_father_name" class="w-full mb-1" :value="__('اسم اب الام')" />
                                    <x-text-input id="mother_father_name" class="w-full block mt-1 " type="text"
                                        name="mother_father_name" value="{{ $employee->mother_father_name }}" />
                                    <x-input-error :messages="$errors->get('mother_father_name')" class="mt-2" />
                                </div>

                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="mother_grandfather_name" class="w-full mb-1"
                                        :value="__('اسم جد الام')" />
                                    <x-text-input id="mother_grandfather_name" class="w-full block mt-1 " type="text"
                                        name="mother_grandfather_name"
                                        value="{{ $employee->mother_grandfather_name }}" />
                                    <x-input-error :messages="$errors->get('mother_grandfather_name')" class="w-full mt-2" />
                                </div>

                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="mother_surname" class="w-full mb-1" :value="__('لقب الام ')" />
                                    <x-text-input id="mother_surname" class="w-full block mt-1" type="text"
                                        name="mother_surname" value="{{ $employee->mother_surname }}" />
                                    <x-input-error :messages="$errors->get('mother_surname')" class="w-full mt-2" />
                                </div>

                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="date_of_birth" class="w-full mb-1" :value="__('تاريخ الميلاد')" />
                                    <div class="flex">
                                        <x-text-input id="date_of_birth" class="w-20 block mt-1 " placeholder="يوم"
                                            type="number" name="date_of_birth_d"
                                            value=" {{ date('d', strtotime($employee->date_of_birth)) }} " />
                                        <x-text-input id="date_of_birth" class="w-20 block mt-1 " placeholder="شهر"
                                            type="number" name="date_of_birth_m"
                                            value="{{ date('m', strtotime($employee->date_of_birth)) }}" />
                                        <x-text-input id="date_of_birth" class="w-20 block mt-1 " placeholder="سنة"
                                            type="number" name="date_of_birth_y"
                                            value="{{ date('Y', strtotime($employee->date_of_birth)) }}" />
                                    </div>
                                    <x-input-error :messages="$errors->get('date_of_birth')" class="mt-2" />
                                </div>

                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="place_of_birth" class="w-full mb-1" :value="__('محل الميلاد ')" />
                                    <x-text-input id="place_of_birth" class="w-full block mt-1 " type="text"
                                        name="place_of_birth" value="{{ $employee->place_of_birth }}" />
                                    <x-input-error :messages="$errors->get('place_of_birth')" class="w-full mt-2" />
                                </div>

                            </div>

                            <div class="flex">


                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="marital_status_id" class="w-full mb-1" :value="__('الحالة الزوجية ')" />
                                    <select id="marital_status_id" class="w-full block mt-1 "
                                        name="marital_status_id">
                                        @foreach ($marital_statuss as $marital_status)
                                            <option value="{{ $marital_status->id }}"
                                                {{ $employee->marital_status_id == $marital_status->id ? 'selected' : '' }}>
                                                {{ $marital_status->marital_status }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <x-input-error :messages="$errors->get('marital_status_id')" class="w-full mt-2" />
                                </div>

                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="first_husband_name" class="w-full mb-1" :value="__('اسم الزوج - الزوجة')" />
                                    <x-text-input id="first_husband_name" class="w-full block mt-1 " type="text"
                                        name="first_husband_name" value="{{ $employee->first_husband_name }}" />
                                    <x-input-error :messages="$errors->get('first_husband_name')" class="mt-2" />
                                </div>

                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="husband_father_name" class="w-full mb-1" :value="__('اسم اب الزوج - الزوجة')" />
                                    <x-text-input id="husband_father_name" class="w-full block mt-1 " type="text"
                                        name="husband_father_name" value="{{ $employee->husband_father_name }}" />
                                    <x-input-error :messages="$errors->get('husband_father_name')" class="w-full mt-2" />
                                </div>


                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="husband_grandfather_name" class="w-full mb-1"
                                        :value="__('اسم جد الزوج - الزوجة')" />
                                    <x-text-input id="husband_grandfather_name" class="w-full block mt-1"
                                        type="text" name="husband_grandfather_name"
                                        value="{{ $employee->husband_grandfather_name }}" />
                                    <x-input-error :messages="$errors->get('husband_grandfather_name')" class="w-full mt-2" />
                                </div>

                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="husband_surname" class="w-full mb-1" :value="__('لقب الزوج - الزوجة')" />
                                    <x-text-input id="husband_surname" class="w-full block mt-1 " type="text"
                                        name="husband_surname" value="{{ $employee->husband_surname }}" />
                                    <x-input-error :messages="$errors->get('husband_surname')" class="mt-2" />
                                </div>

                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="number_of_children" class="w-full mb-1" :value="__('عدد الأطفال ')" />
                                    <x-text-input id="number_of_children" class="w-full block mt-1 " type="number"
                                        name="number_of_children" value="{{ $employee->number_of_children }}" />
                                    <x-input-error :messages="$errors->get('number_of_children')" class="w-full mt-2" />
                                </div>

                            </div>

                            <div class="flex">

                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="nationality_id" class="w-full mb-1" :value="__('القومية')" />
                                    <select id="nationality_id" class="w-full block mt-1 " name="nationality_id">
                                        @foreach ($nationalitys as $nationality)
                                            <option value="{{ $nationality->id }}"
                                                {{ $employee->nationality_id == $nationality->id ? 'selected' : '' }}>
                                                {{ $nationality->nationality }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <x-input-error :messages="$errors->get('nationality_id')" class="w-full mt-2" />
                                </div>



                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="mother_language_id" class="w-full mb-1" :value="__('اللغة الأم')" />
                                    <select id="mother_language_id" class="w-full block mt-1 "
                                        name="mother_language_id">
                                        @foreach ($mother_languages as $mother_language)
                                            <option value="{{ $mother_language->id }}"
                                                {{ $employee->mother_language_id == $mother_language->id ? 'selected' : '' }}>
                                                {{ $mother_language->mother_language }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <x-input-error :messages="$errors->get('mother_language_id')" class="w-full mt-2" />
                                </div>

                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="gender_id" class="w-full mb-1" :value="__('الجنس')" />
                                    <select id="gender_id" class="w-full block mt-1 " name="gender_id">
                                        @foreach ($genders as $gender)
                                            <option value="{{ $gender->id }}"
                                                {{ $employee->gender_id == $gender->id ? 'selected' : '' }}>
                                                {{ $gender->gender }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <x-input-error :messages="$errors->get('gender_id')" class="w-full mt-2" />
                                </div>


                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="employee_phone_number" class="w-full mb-1"
                                        :value="__('رقم الهاتف - الموبايل ')" />
                                    <x-text-input id="employee_phone_number" class="w-full block mt-1" type="number"
                                        name="employee_phone_number"
                                        value="{{ $employee->employee_phone_number }}" />
                                    <x-input-error :messages="$errors->get('employee_phone_number')" class="w-full mt-2" />
                                </div>

                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="employee_email" class="w-full mb-1" :value="__('عنوان البريد الالكتروني')" />
                                    <x-text-input id="employee_email" class="w-full block mt-1 " type="email"
                                        name="employee_email" value="{{ $employee->employee_email }}" />
                                    <x-input-error :messages="$errors->get('employee_email')" class="mt-2" />
                                </div>

                            </div>



                            <h2 class="font-semibold text-l text-gray-800 leading-tight mx-4 my-4 w-full">البيانات
                                الوظيفية </h2>


                            <div class="flex">

                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="contract_type_id" class="w-full mb-1" :value="__('نوع التعاقد')" />
                                    <select id="contract_type_id" class="w-full block mt-1 " name="contract_type_id">
                                        @foreach ($contract_types as $contract_type)
                                            <option value="{{ $contract_type->id }}"
                                                {{ $employee->contract_type_id == $contract_type->id ? 'selected' : '' }}>
                                                {{ $contract_type->contract_type }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <x-input-error :messages="$errors->get('contract_type_id')" class="w-full mt-2" />
                                </div>

                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="employee_status_id" class="w-full mb-1" :value="__('حالة الموظف - الموظفة')" />
                                    <select id="employee_status_id" class="w-full block mt-1 "
                                        name="employee_status_id">
                                        @foreach ($employee_statuss as $employee_status)
                                            <option value="{{ $employee_status->id }}"
                                                {{ $employee->employee_status_id == $employee_status->id ? 'selected' : '' }}>
                                                {{ $employee_status->employee_status }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <x-input-error :messages="$errors->get('employee_status_id')" class="w-full mt-2" />
                                </div>

                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="employment_type_id" class="w-full mb-1" :value="__('نوع التوظيف')" />
                                    <select id="employment_type_id" class="w-full block mt-1 "
                                        name="employment_type_id">
                                        @foreach ($employment_types as $employment_type)
                                            <option value="{{ $employment_type->id }}"
                                                {{ $employee->employment_type_id == $employment_type->id ? 'selected' : '' }}>
                                                {{ $employment_type->employment_type }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <x-input-error :messages="$errors->get('employment_type_id')" class="w-full mt-2" />
                                </div>

                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="section_id" class="w-full mb-1" :value="__('القسم')" />
                                    <select id="section_id" class="w-full block mt-1 " name="section_id">
                                        @foreach ($sections as $section)
                                            <option value="{{ $section->id }}"
                                                {{ $employee->section_id == $section->id ? 'selected' : '' }}>
                                                {{ $section->section }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <x-input-error :messages="$errors->get('section_id')" class="w-full mt-2" />
                                </div>

                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="sub_section_id" class="w-full mb-1" :value="__('الشعبة')" />
                                    <select id="sub_section_id" class="w-full block mt-1 " name="sub_section_id">
                                        @foreach ($sub_sections as $sub_section)
                                            <option value="{{ $sub_section->id }}"
                                                {{ $employee->sub_section_id == $sub_section->id ? 'selected' : '' }}>
                                                {{ $sub_section->sub_section }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <x-input-error :messages="$errors->get('sub_section_id')" class="w-full mt-2" />
                                </div>

                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="sub_sub_section_id" class="w-full mb-1" :value="__('الوحدة')" />
                                    <select id="sub_sub_section_id" class="w-full block mt-1 "
                                        name="sub_sub_section_id">
                                        @foreach ($sub_sub_sections as $sub_sub_section)
                                            <option value="{{ $sub_sub_section->id }}"
                                                {{ $employee->sub_sub_section_id == $sub_sub_section->id ? 'selected' : '' }}>
                                                {{ $sub_sub_section->sub_sub_section }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <x-input-error :messages="$errors->get('sub_sub_section_id')" class="w-full mt-2" />
                                </div>

                            </div>

                            <div class="flex">

                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="assignment_type_id" class="w-full mb-1" :value="__('نوع التعيين')" />
                                    <select id="assignment_type_id" class="w-full block mt-1 "
                                        name="assignment_type_id">
                                        @foreach ($assignment_types as $assignment_type)
                                            <option value="{{ $assignment_type->id }}"
                                                {{ $employee->assignment_type_id == $assignment_type->id ? 'selected' : '' }}>
                                                {{ $assignment_type->assignment_type }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <x-input-error :messages="$errors->get('assignment_type_id')" class="w-full mt-2" />
                                </div>

                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="teaching_specialization_id" class="w-full mb-1"
                                        :value="__('تخصص التدريس')" />
                                    <select id="teaching_specialization_id" class="w-full block mt-1 "
                                        name="teaching_specialization_id">
                                        @foreach ($teaching_specializations as $teaching_specialization)
                                            <option value="{{ $teaching_specialization->id }}"
                                                {{ $employee->teaching_specialization_id == $teaching_specialization->id ? 'selected' : '' }}>
                                                {{ $teaching_specialization->teaching_specialization }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <x-input-error :messages="$errors->get('teaching_specialization_id')" class="w-full mt-2" />
                                </div>

                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="appointment_date" class="w-full mb-1" :value="__('تاريخ اول تعيين بالوظيفة ')" />
                                    <div class="flex">
                                        <x-text-input id="appointment_date" class="w-20 block mt-1 "
                                            placeholder="يوم" type="number" name="appointment_date_d"
                                            value="{{ date('d', strtotime($employee->appointment_date)) }}" />
                                        <x-text-input id="appointment_date" class="w-20 block mt-1 "
                                            placeholder="شهر" type="number" name="appointment_date_m"
                                            value="{{ date('m', strtotime($employee->appointment_date)) }}" />
                                        <x-text-input id="appointment_date" class="w-20 block mt-1 "
                                            placeholder="سنة" type="number" name="appointment_date_y"
                                            value="{{ date('Y', strtotime($employee->appointment_date)) }}" />
                                    </div>
                                    <x-input-error :messages="$errors->get('appointment_date')" class="w-full mt-2" />
                                </div>

                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="appointment_ministerial_order_number" class="w-full mb-1"
                                        :value="__('رقم الامر الوزاري للتعيين ')" />
                                    <x-text-input id="appointment_ministerial_order_number" class="w-full block mt-1 "
                                        type="text" name="appointment_ministerial_order_number"
                                        value="{{ $employee->appointment_ministerial_order_number }}" />
                                    <x-input-error :messages="$errors->get('appointment_ministerial_order_number')" class="w-full mt-2" />
                                </div>

                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="appointment_ministerial_order_date" class="w-full mb-1"
                                        :value="__('تاريخ الامر الوزاري للتعيين ')" />
                                    <div class="flex">
                                        <x-text-input id="appointment_ministerial_order_date" class="w-20 block mt-1 "
                                            placeholder="يوم" type="number"
                                            name="appointment_ministerial_order_date_d"
                                            value="{{ date('d', strtotime($employee->appointment_ministerial_order_date)) }}" />
                                        <x-text-input id="appointment_ministerial_order_date" class="w-20 block mt-1 "
                                            placeholder="شهر" type="number"
                                            name="appointment_ministerial_order_date_m"
                                            value="{{ date('m', strtotime($employee->appointment_ministerial_order_date)) }}" />
                                        <x-text-input id="appointment_ministerial_order_date" class="w-20 block mt-1 "
                                            placeholder="سنة" type="number"
                                            name="appointment_ministerial_order_date_y"
                                            value="{{ date('Y', strtotime($employee->appointment_ministerial_order_date)) }}" />
                                    </div>
                                    <x-input-error :messages="$errors->get('appointment_ministerial_order_date')" class="w-full mt-2" />
                                </div>
                            </div>

                            <div class="flex">
                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="appointment_administrative_order_number" class="w-full mb-1"
                                        :value="__('رقم الامر الإداري للتعيين')" />
                                    <x-text-input id="appointment_administrative_order_number"
                                        class="w-full block mt-1 " type="text"
                                        name="appointment_administrative_order_number"
                                        value="{{ $employee->appointment_administrative_order_number }}" />
                                    <x-input-error :messages="$errors->get('appointment_administrative_order_number')" class="mt-2" />
                                </div>

                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="appointment_administrative_order_date" class="w-full mb-1"
                                        :value="__('تاريخ الامر الإداري للتعيين ')" />
                                    <div class="flex">
                                        <x-text-input id="appointment_administrative_order_date"
                                            class="w-20 block mt-1 " placeholder="يوم" type="number"
                                            name="appointment_administrative_order_date_d"
                                            value="{{ date('d', strtotime($employee->appointment_administrative_order_date)) }}" />
                                        <x-text-input id="appointment_administrative_order_date"
                                            class="w-20 block mt-1 " placeholder="شهر" type="number"
                                            name="appointment_administrative_order_date_m"
                                            value="{{ date('m', strtotime($employee->appointment_administrative_order_date)) }}" />
                                        <x-text-input id="appointment_administrative_order_date"
                                            class="w-20 block mt-1 " placeholder="سنة" type="number"
                                            name="appointment_administrative_order_date_y"
                                            value="{{ date('Y', strtotime($employee->appointment_administrative_order_date)) }}" />
                                    </div>
                                    <x-input-error :messages="$errors->get('appointment_administrative_order_date')" class="w-full mt-2" />
                                </div>



                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="appointment_first_initiation_number" class="w-full mb-1"
                                        :value="__('الرقم الإداري بالمباشرة لأول مرة ')" />
                                    <x-text-input id="appointment_first_initiation_number" class="w-full block mt-1 "
                                        type="text" name="appointment_first_initiation_number"
                                        value="{{ $employee->appointment_first_initiation_number }}" />
                                    <x-input-error :messages="$errors->get('appointment_first_initiation_number')" class="w-full mt-2" />
                                </div>

                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="appointment_first_initiation_date" class="w-full mb-1"
                                        :value="__('تاريخ كتاب المباشرة لأول مرة ')" />
                                    <div class="flex">
                                        <x-text-input id="appointment_first_initiation_date" class="w-20 block mt-1 "
                                            placeholder="يوم" type="number"
                                            name="appointment_first_initiation_date_d"
                                            value="{{ date('d', strtotime($employee->appointment_first_initiation_date)) }}" />
                                        <x-text-input id="appointment_first_initiation_date" class="w-20 block mt-1 "
                                            placeholder="شهر" type="number"
                                            name="appointment_first_initiation_date_m"
                                            value="{{ date('m', strtotime($employee->appointment_first_initiation_date)) }}" />
                                        <x-text-input id="appointment_first_initiation_date" class="w-20 block mt-1 "
                                            placeholder="سنة" type="number"
                                            name="appointment_first_initiation_date_y"
                                            value="{{ date('Y', strtotime($employee->appointment_first_initiation_date)) }}" />
                                    </div>
                                    <x-input-error :messages="$errors->get('appointment_first_initiation_date')" class="w-full mt-2" />
                                </div>

                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="nominal_salary" class="w-full mb-1" :value="__('الراتب الاسمي')" />
                                    <x-text-input id="nominal_salary" class="w-full block mt-1 " type="number"
                                        name="nominal_salary" value="{{ $employee->nominal_salary }}" />
                                    <x-input-error :messages="$errors->get('nominal_salary')" class="mt-2" />
                                </div>
                            </div>

                            <div class="flex">
                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="job_title_id" class="w-full mb-1" :value="__('العنوان الوظيفي')" />
                                    <select id="job_title_id" class="w-full block mt-1 " name="job_title_id">
                                        @foreach ($job_titles as $job_title)
                                            <option value="{{ $job_title->id }}"
                                                {{ $employee->job_title_id == $job_title->id ? 'selected' : '' }}>
                                                {{ $job_title->job_title }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <x-input-error :messages="$errors->get('job_title_id')" class="w-full mt-2" />
                                </div>

                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="job_grade_id" class="w-full mb-1" :value="__('الدرجة الوظيفية')" />
                                    <select id="job_grade_id" class="w-full block mt-1 " name="job_grade_id">
                                        @foreach ($job_grades as $job_grade)
                                            <option value="{{ $job_grade->id }}"
                                                {{ $employee->job_grade_id == $job_grade->id ? 'selected' : '' }}>
                                                {{ $job_grade->job_grade }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <x-input-error :messages="$errors->get('job_grade_id')" class="w-full mt-2" />
                                </div>

                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="job_grade_date" class="w-full mb-1" :value="__('تاريخ الحصول على الدرجة الوظيفية')" />
                                    <div class="flex">
                                        <x-text-input id="job_grade_date" class="w-20 block mt-1 " placeholder="يوم"
                                            type="number" name="job_grade_date_d"
                                            value="{{ date('d', strtotime($employee->job_grade_date)) }}" />
                                        <x-text-input id="job_grade_date" class="w-20 block mt-1 " placeholder="شهر"
                                            type="number" name="job_grade_date_m"
                                            value="{{ date('m', strtotime($employee->job_grade_date)) }}" />
                                        <x-text-input id="job_grade_date" class="w-20 block mt-1 " placeholder="سنة"
                                            type="number" name="job_grade_date_y"
                                            value="{{ date('Y', strtotime($employee->job_grade_date)) }}" />
                                    </div>
                                    <x-input-error :messages="$errors->get('job_grade_date')" class="w-full mt-2" />
                                </div>
                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="career_stage_id" class="w-full mb-1" :value="__('المرحلة المهنية')" />
                                    <select id="career_stage_id" class="w-full block mt-1 " name="career_stage_id">
                                        @foreach ($career_stages as $career_stage)
                                            <option value="{{ $career_stage->id }}"
                                                {{ $employee->career_stage_id == $career_stage->id ? 'selected' : '' }}>
                                                {{ $career_stage->career_stage }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <x-input-error :messages="$errors->get('career_stage_id')" class="w-full mt-2" />
                                </div>

                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="career_stage_date" class="w-full mb-1" :value="__('تاريخ الحصول على المرحلة المهنية     ')" />
                                    <div class="flex">
                                        <x-text-input id="career_stage_date" class="w-20 block mt-1 "
                                            placeholder="يوم" type="number" name="career_stage_date_d"
                                            value="{{ date('d', strtotime($employee->career_stage_date)) }}" />
                                        <x-text-input id="career_stage_date" class="w-20 block mt-1 "
                                            placeholder="شهر" type="number" name="career_stage_date_m"
                                            value="{{ date('m', strtotime($employee->career_stage_date)) }}" />
                                        <x-text-input id="career_stage_date" class="w-20 block mt-1 "
                                            placeholder="سنة" type="number" name="career_stage_date_y"
                                            value="{{ date('Y', strtotime($employee->career_stage_date)) }}" />
                                    </div>
                                    <x-input-error :messages="$errors->get('career_stage_date')" class="w-full mt-2" />
                                </div>

                            </div>




                            <h2 class="font-semibold text-l text-gray-800 leading-tight mx-4 my-4 w-full">بيانات
                                البطاقة الوطنية</h2>

                            <div class=" mx-4 my-4 w-25">
                                <x-input-label for="is_national_card" class="w-full mb-1" :value="__('هل توجد بطاقة وطنية')" />
                                <select id="is_national_card" class="w-full block mt-1 " name="is_national_card">
                                    @foreach ($yesnos as $yesno)
                                        <option value="{{ $yesno->id }}"
                                            {{ $employee->is_national_card == $yesno->id ? 'selected' : '' }}>
                                            {{ $yesno->value }}
                                        </option>
                                    @endforeach
                                </select>
                                <x-input-error :messages="$errors->get('is_national_card')" class="w-full mt-2" />
                            </div>

                            <div id="nc">




                                <div class="flex">
                                    <div class=" mx-4 my-4 w-full">
                                        <x-input-label for="national_card_number" class="w-full mb-1"
                                            :value="__('رقم البطاقة الوطنية ')" />
                                        <x-text-input id="national_card_number" class="w-full block mt-1"
                                            type="number" name="national_card_number"
                                            value="{{ $employee->national_card_number }}" />
                                        <x-input-error :messages="$errors->get('national_card_number')" class="w-full mt-2" />
                                    </div>

                                    <div class=" mx-4 my-4 w-full">
                                        <x-input-label for="national_card_date_of_issue" class="w-full mb-1"
                                            :value="__('تاريخ الاصدار')" />
                                        <div class="flex">
                                            <x-text-input id="national_card_date_of_issue" class="w-20 block mt-1 "
                                                placeholder="يوم" type="number" name="national_card_date_of_issue_d"
                                                value="{{ date('d', strtotime($employee->national_card_date_of_issue)) }}" />
                                            <x-text-input id="national_card_date_of_issue" class="w-20 block mt-1 "
                                                placeholder="شهر" type="number" name="national_card_date_of_issue_m"
                                                value="{{ date('m', strtotime($employee->national_card_date_of_issue)) }}" />
                                            <x-text-input id="national_card_date_of_issue" class="w-20 block mt-1 "
                                                placeholder="سنة" type="number" name="national_card_date_of_issue_y"
                                                value="{{ date('Y', strtotime($employee->national_card_date_of_issue)) }}" />
                                        </div>
                                        <x-input-error :messages="$errors->get('national_card_date_of_issue')" class="mt-2" />
                                    </div>

                                    <div class=" mx-4 my-4 w-full">
                                        <x-input-label for="national_card_issuing_authority" class="w-full mb-1"
                                            :value="__('جهة الاصدار ')" />
                                        <x-text-input id="national_card_issuing_authority" class="w-full block mt-1 "
                                            type="text" name="national_card_issuing_authority"
                                            value="{{ $employee->national_card_issuing_authority }}" />
                                        <x-input-error :messages="$errors->get('national_card_issuing_authority')" class="w-full mt-2" />
                                    </div>

                                    <div class=" mx-4 my-4 w-full">
                                        <x-input-label for="national_card_family_number" class="w-full mb-1"
                                            :value="__('الرقم العائلي')" />
                                        <x-text-input id="national_card_family_number" class="w-full block mt-1 "
                                            type="text" name="national_card_family_number"
                                            value="{{ $employee->national_card_family_number }}" />
                                        <x-input-error :messages="$errors->get('national_card_family_number')" class="w-full mt-2" />
                                    </div>
                                </div>
                            </div>

                            <div id="ci">

                                <h2 class="font-semibold text-l text-gray-800 leading-tight mx-4 my-4 w-full">بيانات
                                    هوية الأحوال المدنية </h2>


                                <div class="flex">
                                    <div class=" mx-4 my-4 w-full">
                                        <x-input-label for="civil_status_identity_number" class="w-full mb-1"
                                            :value="__('رقم هوية الأحوال المدنية ')" />
                                        <x-text-input id="civil_status_identity_number" class="w-full block mt-1"
                                            type="text" name="civil_status_identity_number"
                                            value="{{ $employee->civil_status_identity_number }}" />
                                        <x-input-error :messages="$errors->get('civil_status_identity_number')" class="w-full mt-2" />
                                    </div>

                                    <div class=" mx-4 my-4 w-full">
                                        <x-input-label for="civil_status_registry_number" class="w-full mb-1"
                                            :value="__('رقم السجل ')" />
                                        <x-text-input id="civil_status_registry_number" class="w-full block mt-1 "
                                            type="text" name="civil_status_registry_number"
                                            value="{{ $employee->civil_status_registry_number }}" />
                                        <x-input-error :messages="$errors->get('civil_status_registry_number')" class="w-full mt-2" />
                                    </div>

                                    <div class=" mx-4 my-4 w-full">
                                        <x-input-label for="civil_status_newspaper_number" class="w-full mb-1"
                                            :value="__('رقم الصحيفة ')" />
                                        <x-text-input id="civil_status_newspaper_number" class="w-full block mt-1 "
                                            type="text" name="civil_status_newspaper_number"
                                            value="{{ $employee->civil_status_newspaper_number }}" />
                                        <x-input-error :messages="$errors->get('civil_status_newspaper_number')" class="w-full mt-2" />
                                    </div>

                                    <div class=" mx-4 my-4 w-full">
                                        <x-input-label for="civil_status_issue_date" class="w-full mb-1"
                                            :value="__('تاريخ الاصدار')" />
                                        <div class="flex">
                                            <x-text-input id="civil_status_issue_date" class="w-20 block mt-1 "
                                                placeholder="يوم" type="number" name="civil_status_issue_date_d"
                                                value="{{ date('d', strtotime($employee->civil_status_issue_date)) }}" />
                                            <x-text-input id="civil_status_issue_date" class="w-20 block mt-1 "
                                                placeholder="شهر" type="number" name="civil_status_issue_date_m"
                                                value="{{ date('m', strtotime($employee->civil_status_issue_date)) }}" />
                                            <x-text-input id="civil_status_issue_date" class="w-20 block mt-1 "
                                                placeholder="سنة" type="number" name="civil_status_issue_date_y"
                                                value="{{ date('Y', strtotime($employee->civil_status_issue_date)) }}" />
                                        </div>
                                        <x-input-error :messages="$errors->get('civil_status_issue_date')" class="mt-2" />
                                    </div>

                                    <div class=" mx-4 my-4 w-full">
                                        <x-input-label for="civil_status_issuer" class="w-full mb-1"
                                            :value="__('جهة الاصدار ')" />
                                        <x-text-input id="civil_status_issuer" class="w-full block mt-1 "
                                            type="text" name="civil_status_issuer"
                                            value="{{ $employee->civil_status_issuer }}" />
                                        <x-input-error :messages="$errors->get('civil_status_issuer')" class="w-full mt-2" />
                                    </div>
                                </div>

                                <h2 class="font-semibold text-l text-gray-800 leading-tight mx-4 my-4 w-full">بيانات
                                    شهادة الجنسية </h2>

                                <div class="flex">
                                    <div class=" mx-4 my-4 w-full">
                                        <x-input-label for="nationality_certificate_number" class="w-full mb-1"
                                            :value="__('رقم شهادة الجنسية  ')" />
                                        <x-text-input id="nationality_certificate_number" class="w-full block mt-1 "
                                            type="text" name="nationality_certificate_number"
                                            value="{{ $employee->nationality_certificate_number }}" />
                                        <x-input-error :messages="$errors->get('nationality_certificate_number')" class="w-full mt-2" />
                                    </div>

                                    <div class=" mx-4 my-4 w-full">
                                        <x-input-label for="nationality_certificate_authority_issuing_wallet"
                                            class="w-full mb-1" :value="__('رقم المحفظة  ')" />
                                        <x-text-input id="nationality_certificate_authority_issuing_wallet"
                                            class="w-full block mt-1 " type="text"
                                            name="nationality_certificate_authority_issuing_wallet"
                                            value="{{ $employee->nationality_certificate_authority_issuing_wallet }}" />
                                        <x-input-error :messages="$errors->get('nationality_certificate_authority_issuing_wallet')" class="w-full mt-2" />
                                    </div>

                                    <div class=" mx-4 my-4 w-full">
                                        <x-input-label for="nationality_certificate_authority_issuing_date"
                                            class="w-full mb-1" :value="__(' تاريخ اصدار شهادة الجنسية  ')" />
                                        <div class="flex">
                                            <x-text-input id="nationality_certificate_authority_issuing_date"
                                                class="w-20 block mt-1 " placeholder="يوم" type="number"
                                                name="nationality_certificate_authority_issuing_date_d"
                                                value="{{ date('d', strtotime($employee->nationality_certificate_authority_issuing_date)) }}" />
                                            <x-text-input id="nationality_certificate_authority_issuing_date"
                                                class="w-20 block mt-1 " placeholder="شهر" type="number"
                                                name="nationality_certificate_authority_issuing_date_m"
                                                value="{{ date('m', strtotime($employee->nationality_certificate_authority_issuing_date)) }}" />
                                            <x-text-input id="nationality_certificate_authority_issuing_date"
                                                class="w-20 block mt-1 " placeholder="سنة" type="number"
                                                name="nationality_certificate_authority_issuing_date_y"
                                                value="{{ date('Y', strtotime($employee->nationality_certificate_authority_issuing_date)) }}" />
                                        </div>
                                        <x-input-error :messages="$errors->get('nationality_certificate_authority_issuing_date')" class="w-full mt-2" />
                                    </div>

                                    <div class=" mx-4 my-4 w-full">
                                        <x-input-label for="nationality_certificate_authority_issuing"
                                            class="w-full mb-1" :value="__(' جهة اصدار شهادة الجنسية ')" />
                                        <x-text-input id="nationality_certificate_authority_issuing"
                                            class="w-full block mt-1 " type="text"
                                            name="nationality_certificate_authority_issuing"
                                            value="{{ $employee->nationality_certificate_authority_issuing }}" />
                                        <x-input-error :messages="$errors->get('nationality_certificate_authority_issuing')" class="w-full mt-2" />
                                    </div>

                                </div>
                            </div>


                            <h2 class="font-semibold text-l text-gray-800 leading-tight mx-4 my-4 w-full">بيانات بطاقة
                                السكن </h2>


                            <div class="flex">
                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="housing_card_number" class="w-full mb-1"
                                        :value="__(' رقم بطاقة السكن')" />
                                    <x-text-input id="housing_card_number" class="w-full block mt-1" type="text"
                                        name="housing_card_number" value="{{ $employee->housing_card_number }}" />
                                    <x-input-error :messages="$errors->get('housing_card_number')" class="w-full mt-2" />
                                </div>

                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="housing_card_date_of_issue" class="w-full mb-1"
                                        :value="__('تاريخ الإصدار ')" />
                                    <div class="flex">
                                        <x-text-input id="housing_card_date_of_issue" class="w-20 block mt-1 "
                                            placeholder="يوم" type="number" name="housing_card_date_of_issue_d"
                                            value="{{ date('d', strtotime($employee->housing_card_date_of_issue)) }}" />
                                        <x-text-input id="housing_card_date_of_issue" class="w-20 block mt-1 "
                                            placeholder="شهر" type="number" name="housing_card_date_of_issue_m"
                                            value="{{ date('m', strtotime($employee->housing_card_date_of_issue)) }}" />
                                        <x-text-input id="housing_card_date_of_issue" class="w-20 block mt-1 "
                                            placeholder="سنة" type="number" name="housing_card_date_of_issue_y"
                                            value="{{ date('Y', strtotime($employee->housing_card_date_of_issue)) }}" />
                                    </div>
                                    <x-input-error :messages="$errors->get('housing_card_date_of_issue')" class="w-full mt-2" />
                                </div>

                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="housing_card_issuing_authority" class="w-full mb-1"
                                        :value="__('جهة الإصدار')" />
                                    <x-text-input id="housing_card_issuing_authority" class="w-full block mt-1 "
                                        type="text" name="housing_card_issuing_authority"
                                        value="{{ $employee->housing_card_issuing_authority }}" />
                                    <x-input-error :messages="$errors->get('housing_card_issuing_authority')" class="w-full mt-2" />
                                </div>

                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="housing_card_residence_address" class="w-full mb-1"
                                        :value="__('عنوان السكن ')" />
                                    <x-text-input id="housing_card_residence_address" class="w-full block mt-1 "
                                        type="text" name="housing_card_residence_address"
                                        value="{{ $employee->housing_card_residence_address }}" />
                                    <x-input-error :messages="$errors->get('housing_card_residence_address')" class="mt-2" />
                                </div>

                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="housing_card_governorate" class="w-full mb-1"
                                        :value="__(' محافظة ')" />
                                    <x-text-input id="housing_card_governorate" class="w-full block mt-1 "
                                        type="text" name="housing_card_governorate"
                                        value="{{ $employee->housing_card_governorate }}" />
                                    <x-input-error :messages="$errors->get('housing_card_governorate')" class="w-full mt-2" />
                                </div>
                            </div>


                            <div class="flex">
                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="housing_card_district" class="w-full mb-1"
                                        :value="__('ناحية ')" />
                                    <x-text-input id="housing_card_district" class="w-full block mt-1" type="text"
                                        name="housing_card_district"
                                        value="{{ $employee->housing_card_district }}" />
                                    <x-input-error :messages="$errors->get('housing_card_district')" class="w-full mt-2" />
                                </div>

                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="housing_card_neighborhood" class="w-full mb-1"
                                        :value="__('حي  ')" />
                                    <x-text-input id="housing_card_neighborhood" class="w-full block mt-1 "
                                        type="text" name="housing_card_neighborhood"
                                        value="{{ $employee->housing_card_neighborhood }}" />
                                    <x-input-error :messages="$errors->get('housing_card_neighborhood')" class="w-full mt-2" />
                                </div>

                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="housing_card_house_number" class="w-full mb-1"
                                        :value="__('رقم الدار ')" />
                                    <x-text-input id="housing_card_house_number" class="w-full block mt-1 "
                                        type="text" name="housing_card_house_number"
                                        value="{{ $employee->housing_card_house_number }}" />
                                    <x-input-error :messages="$errors->get('housing_card_house_number')" class="w-full mt-2" />
                                </div>

                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="housing_card_nearest_point_of_reference" class="w-full mb-1"
                                        :value="__('أقرب نقطة دالة ')" />
                                    <x-text-input id="housing_card_nearest_point_of_reference"
                                        class="w-full block mt-1 " type="text"
                                        name="housing_card_nearest_point_of_reference"
                                        value="{{ $employee->housing_card_nearest_point_of_reference }}" />
                                    <x-input-error :messages="$errors->get('housing_card_nearest_point_of_reference')" class="mt-2" />
                                </div>

                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="housing_card_mukhtar_name" class="w-full mb-1"
                                        :value="__('اسم المختار')" />
                                    <x-text-input id="housing_card_mukhtar_name" class="w-full block mt-1 "
                                        type="text" name="housing_card_mukhtar_name"
                                        value="{{ $employee->housing_card_mukhtar_name }}" />
                                    <x-input-error :messages="$errors->get('housing_card_mukhtar_name')" class="w-full mt-2" />
                                </div>
                            </div>



                            <h2 class="font-semibold text-l text-gray-800 leading-tight mx-4 my-4 w-full">بيانات
                                التحصيل الدراسي - الشهادة المعيين عليها الموظف - الموظفة</h2>


                            <div class="flex">
                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="certificate_of_appointment_academic_achievement"
                                        class="w-full mb-1" :value="__('التحصيل الدراسي ')" />
                                    <x-text-input id="certificate_of_appointment_academic_achievement"
                                        class="w-full block mt-1" type="text"
                                        name="certificate_of_appointment_academic_achievement"
                                        value="{{ $employee->certificate_of_appointment_academic_achievement }}" />
                                    <x-input-error :messages="$errors->get('certificate_of_appointment_academic_achievement')" class="w-full mt-2" />
                                </div>

                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="certificate_of_appointment" class="w-full mb-1"
                                        :value="__('شهادة التعيين ')" />
                                    <x-text-input id="certificate_of_appointment" class="w-full block mt-1 "
                                        type="text" name="certificate_of_appointment"
                                        value="{{ $employee->certificate_of_appointment }}" />
                                    <x-input-error :messages="$errors->get('certificate_of_appointment')" class="w-full mt-2" />
                                </div>

                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="certificate_of_appointment_graduation_year"
                                        class="w-full mb-1" :value="__('سنة التخرج ')" />
                                    <x-text-input id="certificate_of_appointment_graduation_year"
                                        class="w-full block mt-1 " type="text"
                                        name="certificate_of_appointment_graduation_year"
                                        value="{{ $employee->certificate_of_appointment_graduation_year }}" />
                                    <x-input-error :messages="$errors->get('certificate_of_appointment_graduation_year')" class="w-full mt-2" />
                                </div>

                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="certificate_of_appointment_university_institute_school_name"
                                        class="w-full mb-1" :value="__('اسم المؤسسة التعليمية')" />
                                    <x-text-input id="certificate_of_appointment_university_institute_school_name"
                                        class="w-full block mt-1 " type="text"
                                        name="certificate_of_appointment_university_institute_school_name"
                                        value="{{ $employee->certificate_of_appointment_university_institute_school_name }}" />
                                    <x-input-error :messages="$errors->get(
                                        'certificate_of_appointment_university_institute_school_name',
                                    )" class="mt-2" />
                                </div>

                            </div>


                            <div class="flex">

                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="certificate_of_appointment_college_name" class="w-full mb-1"
                                        :value="__('اسم الكلية')" />
                                    <x-text-input id="certificate_of_appointment_college_name"
                                        class="w-full block mt-1 " type="text"
                                        name="certificate_of_appointment_college_name"
                                        value="{{ $employee->certificate_of_appointment_college_name }}" />
                                    <x-input-error :messages="$errors->get('certificate_of_appointment_college_name')" class="w-full mt-2" />
                                </div>

                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="certificate_of_appointment_major" class="w-full mb-1"
                                        :value="__('التخصص ')" />
                                    <x-text-input id="certificate_of_appointment_major" class="w-full block mt-1"
                                        type="text" name="certificate_of_appointment_major"
                                        value="{{ $employee->certificate_of_appointment_major }}" />
                                    <x-input-error :messages="$errors->get('certificate_of_appointment_major')" class="w-full mt-2" />
                                </div>

                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="certificate_of_appointment_mark" class="w-full mb-1"
                                        :value="__('المعدل')" />
                                    <x-text-input id="certificate_of_appointment_mark" class="w-full block mt-1 "
                                        type="number" name="certificate_of_appointment_mark"
                                        value="{{ $employee->certificate_of_appointment_mark }}" />
                                    <x-input-error :messages="$errors->get('certificate_of_appointment_mark')" class="w-full mt-2" />
                                </div>
                            </div>


                            <h2 class="font-semibold text-l text-gray-800 leading-tight mx-4 my-4 w-full">بيانات
                                التحصيل الدراسي - اخر شهادة حاصل عليها الموظف - الموظفة</h2>

                            <div class="flex">

                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="last__academic_achievement" class="w-full mb-1"
                                        :value="__('التحصيل الدراسي ')" />
                                    <x-text-input id="last_academic_achievement" class="w-full block mt-1"
                                        type="text" name="last_academic_achievement"
                                        value="{{ $employee->last_academic_achievement }}" />
                                    <x-input-error :messages="$errors->get('last_academic_achievement')" class="w-full mt-2" />
                                </div>
                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="last_certificate_obtained" class="w-full mb-1"
                                        :value="__('اخر شهادة حاصل عليها ')" />
                                    <x-text-input id="last_certificate_obtained" class="w-full block mt-1 "
                                        type="text" name="last_certificate_obtained"
                                        value="{{ $employee->last_certificate_obtained }}" />
                                    <x-input-error :messages="$errors->get('last_certificate_obtained')" class="w-full mt-2" />
                                </div>

                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="last_year_of_graduation" class="w-full mb-1"
                                        :value="__('سنة التخرج ')" />
                                    <x-text-input id="last_year_of_graduation" class="w-full block mt-1 "
                                        type="text" name="last_year_of_graduation"
                                        value="{{ $employee->last_year_of_graduation }}" />
                                    <x-input-error :messages="$errors->get('last_year_of_graduation')" class="mt-2" />
                                </div>

                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="last_name_of_the_university" class="w-full mb-1"
                                        :value="__('اسم المؤسسة التعليمية')" />
                                    <x-text-input id="last_name_of_the_university" class="w-full block mt-1 "
                                        type="text" name="last_name_of_the_university"
                                        value="{{ $employee->last_name_of_the_university }}" />
                                    <x-input-error :messages="$errors->get('last_name_of_the_university')" class="w-full mt-2" />
                                </div>
                            </div>


                            <div class="flex">

                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="last_name_of_the_college" class="w-full mb-1"
                                        :value="__('اسم الكلية')" />
                                    <x-text-input id="last_name_of_the_college" class="w-full block mt-1 "
                                        type="text" name="last_name_of_the_college"
                                        value="{{ $employee->last_name_of_the_college }}" />
                                    <x-input-error :messages="$errors->get('last_name_of_the_college')" class="w-full mt-2" />
                                </div>

                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="last_major" class="w-full mb-1" :value="__('التخصص')" />
                                    <x-text-input id="last_major" class="w-full block mt-1 " type="text"
                                        name="last_major" value="{{ $employee->last_major }}" />
                                    <x-input-error :messages="$errors->get('last_major')" class="w-full mt-2" />
                                </div>

                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="last_certificate_of_appointment_mark" class="w-full mb-1"
                                        :value="__('المعدل')" />
                                    <x-text-input id="last_certificate_of_appointment_mark" class="w-full block mt-1 "
                                        type="number" name="last_certificate_of_appointment_mark"
                                        value="{{ $employee->last_certificate_of_appointment_mark }}" />
                                    <x-input-error :messages="$errors->get('last_certificate_of_appointment_mark')" class="mt-2" />
                                </div>

                            </div>



                            <h2 class="font-semibold text-l text-gray-800 leading-tight mx-4 my-4 w-full">بيانات
                                التحصيل الدراسي - اللقب العلمي</h2>
                            <div class=" mx-4 my-4 w-25">
                                <x-input-label for="is_scientific_title" class="w-full mb-1" :value="__('هل يوجد لقب علمي')" />
                                <select id="is_scientific_title" class="w-full block mt-1 "
                                    name="is_scientific_title">
                                    @foreach ($yesnos as $yesno)
                                        <option value="{{ $yesno->id }}"
                                            {{ $employee->is_scientific_title == $yesno->id ? 'selected' : '' }}>
                                            {{ $yesno->value }}
                                        </option>
                                    @endforeach
                                </select>
                                <x-input-error :messages="$errors->get('is_scientific_title')" class="w-full mt-2" />
                            </div>

                            <div id="st" class="flex">



                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="scientific_title_stage_id" class="w-full mb-1"
                                        :value="__('درجة اللقب العلمي')" />
                                    <select id="scientific_title_stage_id" class="w-full block mt-1 "
                                        name="scientific_title_stage_id">
                                        @foreach ($scientific_title_stages as $scientific_title_stage)
                                            <option value="{{ $scientific_title_stage->id }}"
                                                {{ $employee->scientific_title_stage_id == $scientific_title_stage->id ? 'selected' : '' }}>
                                                {{ $scientific_title_stage->scientific_title_stage }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <x-input-error :messages="$errors->get('scientific_title_stage_id')" class="w-full mt-2" />
                                </div>

                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="scientific_title_date" class="w-full mb-1"
                                        :value="__('تاريخ الحصول على اللقب العلمي')" />
                                    <div class="flex">
                                        <x-text-input id="scientific_title_date" class="w-20 block mt-1 "
                                            placeholder="يوم" type="number" name="scientific_title_date_d"
                                            value="{{ date('d', strtotime($employee->scientific_title_date)) }}" />
                                        <x-text-input id="scientific_title_date" class="w-20 block mt-1 "
                                            placeholder="شهر" type="number" name="scientific_title_date_m"
                                            value="{{ date('m', strtotime($employee->scientific_title_date)) }}" />
                                        <x-text-input id="scientific_title_date" class="w-20 block mt-1 "
                                            placeholder="سنة" type="number" name="scientific_title_date_y"
                                            value="{{ date('Y', strtotime($employee->scientific_title_date)) }}" />
                                    </div>
                                    <x-input-error :messages="$errors->get('scientific_title_date')" class="w-full mt-2" />
                                </div>
                            </div>


                            <h2 class="font-semibold text-l text-gray-800 leading-tight mx-4 my-4 w-full">بيانات الفصل
                                السياسي </h2>

                            <div class=" mx-4 my-4 w-25">
                                <x-input-label for="is_political_dismissal" class="w-full mb-1" :value="__('هل يوجد فصل سياسي')" />
                                <select id="is_political_dismissal" class="w-full block mt-1 "
                                    name="is_political_dismissal">
                                    @foreach ($yesnos as $yesno)
                                        <option value="{{ $yesno->id }}"
                                            {{ $employee->is_political_dismissal == $yesno->id ? 'selected' : '' }}>
                                            {{ $yesno->value }}
                                        </option>
                                    @endforeach
                                </select>
                                <x-input-error :messages="$errors->get('is_political_dismissal')" class="w-full mt-2" />
                            </div>

                            <div id="pd">


                                <div class="flex">



                                    <div class=" mx-4 my-4 w-full">
                                        <x-input-label for="political_dismissal_type_id" class="w-full mb-1"
                                            :value="__('نوع الفصل السياسي')" />
                                        <select id="political_dismissal_type_id" class="w-full block mt-1 "
                                            name="political_dismissal_type_id">
                                            @foreach ($political_dismissal_types as $political_dismissal_type)
                                                <option value="{{ $political_dismissal_type->id }}"
                                                    {{ $employee->political_dismissal_type_id == $political_dismissal_type->id ? 'selected' : '' }}>
                                                    {{ $political_dismissal_type->political_dismissal_type }}
                                                </option>
                                            @endforeach
                                        </select>
                                        <x-input-error :messages="$errors->get('political_dismissal_type_id')" class="w-full mt-2" />
                                    </div>


                                    <div class=" mx-4 my-4 w-full">
                                        <x-input-label for="political_dismissal_duration_from" class="w-full mb-1"
                                            :value="__('للفترة من تاريخ')" />
                                        <div class="flex">
                                            <x-text-input id="political_dismissal_duration_from"
                                                class="w-20 block mt-1 " placeholder="يوم" type="number"
                                                name="political_dismissal_duration_from_d"
                                                value="{{ date('d', strtotime($employee->political_dismissal_duration_from)) }}" />
                                            <x-text-input id="political_dismissal_duration_from"
                                                class="w-20 block mt-1 " placeholder="شهر" type="number"
                                                name="political_dismissal_duration_from_m"
                                                value="{{ date('m', strtotime($employee->political_dismissal_duration_from)) }}" />
                                            <x-text-input id="political_dismissal_duration_from"
                                                class="w-20 block mt-1 " placeholder="سنة" type="number"
                                                name="political_dismissal_duration_from_y"
                                                value="{{ date('Y', strtotime($employee->political_dismissal_duration_from)) }}" />
                                        </div>
                                        <x-input-error :messages="$errors->get('political_dismissal_duration_from')" class="w-full mt-2" />
                                    </div>

                                    <div class=" mx-4 my-4 w-full">
                                        <x-input-label for="political_dismissal_duration_to" class="w-full mb-1"
                                            :value="__('للفترة الى تاريخ')" />
                                        <div class="flex">
                                            <x-text-input id="political_dismissal_duration_to"
                                                class="w-20 block mt-1 " placeholder="يوم" type="number"
                                                name="political_dismissal_duration_to_d"
                                                value="{{ date('d', strtotime($employee->political_dismissal_duration_to)) }}" />
                                            <x-text-input id="political_dismissal_duration_to"
                                                class="w-20 block mt-1 " placeholder="شهر" type="number"
                                                name="political_dismissal_duration_to_m"
                                                value="{{ date('m', strtotime($employee->political_dismissal_duration_to)) }}" />
                                            <x-text-input id="political_dismissal_duration_to"
                                                class="w-20 block mt-1 " placeholder="سنة" type="number"
                                                name="political_dismissal_duration_to_y"
                                                value="{{ date('Y', strtotime($employee->political_dismissal_duration_to)) }}" />
                                        </div>
                                        <x-input-error :messages="$errors->get('political_dismissal_duration_to')" class="w-full mt-2" />
                                    </div>
                                </div>


                                <div class="flex">

                                    <div class=" mx-4 my-4 w-full">
                                        <x-input-label for="political_dismissal_years" class="w-full mb-1"
                                            :value="__('عدد السنوات')" />
                                        <x-text-input id="political_dismissal_years" class="w-full block mt-1 "
                                            type="number" name="political_dismissal_years"
                                            value="{{ $employee->political_dismissal_years }}" />
                                        <x-input-error :messages="$errors->get('political_dismissal_years')" class="mt-2" />
                                    </div>

                                    <div class=" mx-4 my-4 w-full">
                                        <x-input-label for="political_dismissal_months" class="w-full mb-1"
                                            :value="__('عدد الاشهر')" />
                                        <x-text-input id="political_dismissal_months" class="w-full block mt-1 "
                                            type="number" name="political_dismissal_months"
                                            value="{{ $employee->political_dismissal_months }}" />
                                        <x-input-error :messages="$errors->get('political_dismissal_months')" class="w-full mt-2" />
                                    </div>

                                    <div class=" mx-4 my-4 w-full">
                                        <x-input-label for="political_dismissal_days" class="w-full mb-1"
                                            :value="__('عدد الايام')" />
                                        <x-text-input id="political_dismissal_days" class="w-full block mt-1 "
                                            type="number" name="political_dismissal_days"
                                            value="{{ $employee->political_dismissal_days }}" />
                                        <x-input-error :messages="$errors->get('political_dismissal_days')" class="w-full mt-2" />
                                    </div>

                                    <div class=" mx-4 my-4 w-full">
                                        <x-input-label for="political_dismissal_order_number" class="w-full mb-1"
                                            :value="__('رقم الامر الاداري للفصل السياسي')" />
                                        <x-text-input id="political_dismissal_order_number"
                                            class="w-full block mt-1" type="text"
                                            name="political_dismissal_order_number"
                                            value="{{ $employee->political_dismissal_order_number }}" />
                                        <x-input-error :messages="$errors->get('political_dismissal_order_number')" class="w-full mt-2" />
                                    </div>

                                    <div class=" mx-4 my-4 w-full">
                                        <x-input-label for="political_dismissal_order_date" class="w-full mb-1"
                                            :value="__('تأريخ الامر الأداري للفصل السياسي')" />
                                        <div class="flex">
                                            <x-text-input id="political_dismissal_order_date"
                                                class="w-20 block mt-1 " placeholder="يوم" type="number"
                                                name="political_dismissal_order_date_d"
                                                value="{{ date('d', strtotime($employee->political_dismissal_order_date)) }}" />
                                            <x-text-input id="political_dismissal_order_date"
                                                class="w-20 block mt-1 " placeholder="شهر" type="number"
                                                name="political_dismissal_order_date_m"
                                                value="{{ date('m', strtotime($employee->political_dismissal_order_date)) }}" />
                                            <x-text-input id="political_dismissal_order_date"
                                                class="w-20 block mt-1 " placeholder="سنة" type="number"
                                                name="political_dismissal_order_date_y"
                                                value="{{ date('Y', strtotime($employee->political_dismissal_order_date)) }}" />
                                        </div>
                                        <x-input-error :messages="$errors->get('political_dismissal_order_date')" class="w-full mt-2" />
                                    </div>

                                </div>


                                <div class="flex">


                                    <div class=" mx-4 my-4 w-full">
                                        <x-input-label for="political_dismissal_reappointment_number"
                                            class="w-full mb-1" :value="__('رقم الامر الأداري لأعادة التعيين')" />
                                        <x-text-input id="political_dismissal_reappointment_number"
                                            class="w-full block mt-1 " type="text"
                                            name="political_dismissal_reappointment_number"
                                            value="{{ $employee->political_dismissal_reappointment_number }}" />
                                        <x-input-error :messages="$errors->get('political_dismissal_reappointment_number')" class="w-full mt-2" />
                                    </div>


                                    <div class=" mx-4 my-4 w-full">
                                        <x-input-label for="political_dismissal_date_reappointment"
                                            class="w-full mb-1" :value="__('تاريخ الأمر الاداري للأعادة التعيين')" />
                                        <div class="flex">
                                            <x-text-input id="political_dismissal_date_reappointment"
                                                class="w-20 block mt-1 " placeholder="يوم" type="number"
                                                name="political_dismissal_date_reappointment_d"
                                                value="{{ date('d', strtotime($employee->political_dismissal_date_reappointment)) }}" />
                                            <x-text-input id="political_dismissal_date_reappointment"
                                                class="w-20 block mt-1 " placeholder="شهر" type="number"
                                                name="political_dismissal_date_reappointment_m"
                                                value="{{ date('m', strtotime($employee->political_dismissal_date_reappointment)) }}" />
                                            <x-text-input id="political_dismissal_date_reappointment"
                                                class="w-20 block mt-1 " placeholder="سنة" type="number"
                                                name="political_dismissal_date_reappointment_y"
                                                value="{{ date('Y', strtotime($employee->political_dismissal_date_reappointment)) }}" />
                                        </div>
                                        <x-input-error :messages="$errors->get('political_dismissal_date_reappointment')" class="mt-2" />
                                    </div>

                                    <div class=" mx-4 my-4 w-full">
                                        <x-input-label for="political_dismissal_ministerial_reappointment_number"
                                            class="w-full mb-1" :value="__('رقم الامر الوزاري لأعادة التعيين')" />
                                        <x-text-input id="political_dismissal_ministerial_reappointment_number"
                                            class="w-full block mt-1 " type="text"
                                            name="political_dismissal_ministerial_reappointment_number"
                                            value="{{ $employee->political_dismissal_ministerial_reappointment_number }}" />
                                        <x-input-error :messages="$errors->get('political_dismissal_ministerial_reappointment_number')" class="w-full mt-2" />
                                    </div>

                                    <div class=" mx-4 my-4 w-full">
                                        <x-input-label for="political_dismissal_ministerial_reappointment_date"
                                            class="w-full mb-1" :value="__('تاريخ الامر الوزاري لأعادة التعيين ')" />
                                        <div class="flex">
                                            <x-text-input id="political_dismissal_ministerial_reappointment_date"
                                                class="w-20 block mt-1 " placeholder="يوم" type="number"
                                                name="political_dismissal_ministerial_reappointment_date_d"
                                                value="{{ date('d', strtotime($employee->political_dismissal_ministerial_reappointment_date)) }}" />
                                            <x-text-input id="political_dismissal_ministerial_reappointment_date"
                                                class="w-20 block mt-1 " placeholder="شهر" type="number"
                                                name="political_dismissal_ministerial_reappointment_date_m"
                                                value="{{ date('m', strtotime($employee->political_dismissal_ministerial_reappointment_date)) }}" />
                                            <x-text-input id="political_dismissal_ministerial_reappointment_date"
                                                class="w-20 block mt-1 " placeholder="سنة" type="number"
                                                name="political_dismissal_ministerial_reappointment_date_y"
                                                value="{{ date('Y', strtotime($employee->political_dismissal_ministerial_reappointment_date)) }}" />
                                        </div>
                                        <x-input-error :messages="$errors->get('political_dismissal_ministerial_reappointment_date')" class="w-full mt-2" />
                                    </div>


                                </div>

                            </div>

                            <div class=" mx-4 my-4 w-full">
                                <x-primary-button class="ml-4">
                                    {{ __('تحديث') }}
                                </x-primary-button>
                            </div>





                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            toggleFieldspd();
            toggleFieldsst();
            toggleFieldsnc();
            toggleFieldsci();

            $("#is_national_card").change(function() {
                toggleFieldsnc();
                toggleFieldsci();
            });


            $("#is_scientific_title").change(function() {
                toggleFieldsst();
            });

            $("#is_political_dismissal").change(function() {
                toggleFieldspd();
            });

        });

        function toggleFieldsnc() {
            if ($("#is_national_card").val() == 2)
                $("#nc").show();


            else
                $("#nc").hide();


        }

        function toggleFieldsci() {
            if ($("#is_national_card").val() == 1)
                $("#ci").show();


            else
                $("#ci").hide();


        }

        function toggleFieldsst() {
            if ($("#is_scientific_title").val() == 2)
                $("#st").show();


            else
                $("#st").hide();


        }

        function toggleFieldspd() {
            if ($("#is_scientific_title").val() == 2)
                $("#st").show();


            else
                $("#st").hide();


            if ($("#is_political_dismissal").val() == 2)
                $("#pd").show();


            else
                $("#pd").hide();

        }
    </script>

</x-app-layout>