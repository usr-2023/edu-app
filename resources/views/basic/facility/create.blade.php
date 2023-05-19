<x-app-layout>

    <x-slot name="header">
        @include('basic.nav.navigation')
    </x-slot>


    <div class="py-6">
        <div class="max-w-full mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div>
                        <form method="POST" action="{{ route('facility.store') }}">
                            @csrf
                            <div class="flex">

                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="name" class="w-full mb-1" :value="__('word.facility_name')" />
                                    <x-text-input id="name" class="w-full block mt-1" type="text" name="name"
                                        value="{{ old('name') }}" />
                                    <x-input-error :messages="$errors->get('name')" class="w-full mt-2" />
                                </div>

                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="work_address" class="w-full mb-1" :value="__('word.facility_work_address')" />
                                    <x-text-input id="work_address" class="w-full block mt-1" type="text"
                                        name="work_address" value="{{ old('work_address') }}" />
                                    <x-input-error :messages="$errors->get('work_address')" class="w-full mt-2" />
                                </div>
                            </div>
                            <div class="flex">
                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="facility_group_id" class="w-full mb-1" :value="__('word.facility_group_id')" />
                                    <select id="facility_group_id" class="w-full block mt-1 " name="facility_group_id">
                                        @foreach ($facility_groups as $facility_group)
                                            <option value="{{ $facility_group->id }}">
                                                {{ $facility_group->facility_group }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <x-input-error :messages="$errors->get('facility_group_id')" class="w-full mt-2" />
                                </div>

                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="facility_type_id" class="w-full mb-1" :value="__('word.facility_type_id')" />
                                    <select id="facility_type_id" class="w-full block mt-1 " name="facility_type_id">
                                        <option value="0" disabled="true" selected="true">
                                            {{ __('word.facility_choose_type') }}</option>
                                        @foreach ($facility_types as $facility_type)
                                            <option value="{{ $facility_type->id }}">
                                                {{ $facility_type->facility_type }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <x-input-error :messages="$errors->get('facility_type_id')" class="w-full mt-2" />
                                </div>

                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="facility_link_id" class="w-full mb-1" :value="__('word.facility_link_id')" />
                                    <select id="facility_link_id" class="w-full block mt-1 " name="facility_link_id">
                                        <option value="0" disabled="true" selected="true">
                                            {{ __('word.facility_choose') }}</option>
                                    </select>
                                    <x-input-error :messages="$errors->get('facility_link_id')" class="w-full mt-2" />
                                </div>

                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="department_id" class="w-full mb-1" :value="__('word.department_id')" />
                                    <select id="department_id" class="w-full block mt-1 " name="department_id">
                                        @foreach ($departments as $department)
                                            <option value="{{ $department->id }}"
                                                {{ old('department_id') == $department->id ? 'selected' : '' }}>
                                                {{ $department->department }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <x-input-error :messages="$errors->get('department_id')" class="w-full mt-2" />
                                </div>

                            </div>

                            <div class=" mx-4 my-4 w-full">
                                <x-primary-button class="ml-4">
                                    {{ __('word.save') }}
                                </x-primary-button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        $(document).ready(function() {

            $(document).on('change', '#facility_type_id', function() {

                var facility_type_id = $(this).val();

                var div = $(this).parent();

                var facility_links = " ";

                $.ajax({
                    type: 'get',
                    url: '{{ route('facility.get_facility_links') }}',
                    data: {
                        'id': facility_type_id
                    },
                    success: function(data) {

                        facility_links +=
                            '<option value="0" selected disabled>{{ __('word.facility_choose') }}</option>';
                        for (var i = 0; i < data.length; i++) {
                            facility_links += '<option value="' + data[i].id + '">' + data[i]
                                .name + '</option>';
                        }
                        $("#facility_link_id").html(facility_links);
                    },
                    error: function() {

                    }
                });
            });
        });
    </script>
</x-app-layout>
