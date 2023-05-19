<x-app-layout>

    <x-slot name="header">
        @include('basic.nav.navigation')
    </x-slot>


    <div class="py-6">
        <div class="max-w-full mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="flex">

                        <div class=" mx-4 my-4 w-full">
                            <x-input-label for="name" class="w-full mb-1" :value="__('word.facility_name')" />
                            <p id="name" class="w-full h-9 block mt-1" type="text" name="name">
                                {{ $facility->name }}
                            </p>
                        </div>
                        <div class=" mx-4 my-4 w-full">
                            <x-input-label for="facility_type_id" class="w-full mb-1" :value="__('word.facility_type_id')" />
                            <p id="facility_type_id" class="w-full h-9 block mt-1" type="text"
                                name="facility_type_id">
                                {{ $facility->get_facility_type->facility_type }}
                            </p>
                        </div>
                        @if ($facility->facility_type_id == 1)
                            <div class=" mx-4 my-4 w-full">
                                <x-input-label for="facility_link_id" class="w-full mb-1" :value="__('word.facility_link_id')" />
                                <p id="facility_link_id" class="w-full h-9 block mt-1" type="text"
                                    name="facility_link_id">
                                    {{ $section->name }}
                                </p>
                            </div>
                        @elseif ($facility->facility_type_id == 2)
                            <div class=" mx-4 my-4 w-full">
                                <x-input-label for="facility_link_id" class="w-full mb-1" :value="__('word.facility_link_id')" />
                                <p id="facility_link_id" class="w-full h-9 block mt-1" type="text"
                                    name="facility_link_id">
                                    {{ $school->name }}
                                </p>
                            </div>
                        @endif
                    </div>
                    <div class="flex">
                        <div class=" mx-4 my-4 w-full">
                            <x-input-label for="work_address" class="w-full mb-1" :value="__('word.facility_work_address')" />
                            <p id="work_address" class="w-full h-9 block mt-1" type="text" name="work_address">
                                {{ $facility->work_address }}
                            </p>
                        </div>
                        <div class=" mx-4 my-4 w-full">
                            <x-input-label for="department_id" class="w-full mb-1" :value="__('word.department_id')" />
                            <p id="department_id" class="w-full h-9 block mt-1" type="text" name="department_id">
                                {{ $facility->get_department->department }}
                            </p>
                        </div>
                    </div>
                    <div class="flex">
                        @if (isset($facility->user_id_create))
                            <div class="mx-4 my-4 ">
                                {{ __('word.user_create') }} {{ $facility->get_user_create->name }}
                                {{ $facility->created_at }}
                            </div>
                        @endif

                        @if (isset($facility->user_id_update))
                            <div class="mx-4 my-4 ">
                                {{ __('word.user_update') }} {{ $facility->get_user_update->name }}
                                {{ $facility->updated_at }}
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
