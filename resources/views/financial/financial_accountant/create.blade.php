<x-app-layout>

    <x-slot name="header">
        @include('financial.nav.navigation')
    </x-slot>


    <div class="py-6">
        <div class="max-w-full mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div>
                        @foreach ($errors as $error)
                            <div>{{ $error }}</div>
                        @endforeach
                        <form method="POST" action="{{ route('financial_accountant.store') }}">
                            @csrf
                            <div class="flex">

                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="name" class="w-full mb-1" :value="__('word.financial_accountant_name')" />
                                    <x-text-input id="name" class="w-full block mt-1" type="text" name="name"
                                        value="{{ old('name') }}" />
                                    <x-input-error :messages="$errors->get('name')" class="w-full mt-2" />
                                </div>

                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="status" class="w-full mb-1" :value="__('word.financial_accountant_status')" />
                                    <select name="status" class="w-full block mt-1 " id="status">
                                        <option value="active" selected>active</option>
                                        <option value="disabled">disabled</option>
                                    </select>
                                    <x-input-error :messages="$errors->get('department_id')" class="w-full mt-2" />
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

                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="user_id" class="w-full mb-1" :value="__('word.financial_accountant_user_id')" />
                                    <select id="user_id" class="w-full block mt-1 " name="user_id">
                                        @foreach ($users as $user)
                                            <option value="{{ $user->id }}"
                                                {{ old('user_id') == $user->id ? 'selected' : '' }}>
                                                {{ $user->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <x-input-error :messages="$errors->get('user_id')" class="w-full mt-2" />
                                </div>

                            </div>

                            <table class="table table-striped">
                                <thead>
                                    <th scope="col" width="1%"><input type="checkbox" name="all_facility">
                                    </th>
                                    <th scope="col" width="10%">{{ __('word.name') }}</th>
                                    <th scope="col" width="10%">{{ __('word.facility_type') }}</th>
                                    <th scope="col" width="10%">{{ __('word.facility_parent') }}</th>
                                </thead>

                                @foreach ($facilitys as $facility)
                                    <tr>
                                        <td>
                                            <input type="checkbox" name="facility[{{ $facility->id }}]"
                                                value="{{ $facility->id }}" class='facility'>
                                        </td>
                                        <td>{{ $facility->name }}</td>
                                        <td>{{ $facility->get_facility_type_id->facility_types }}</td>
                                        <td>{{ $facility->get_facility_parent_id->name }}</td>

                                    </tr>
                                @endforeach
                            </table>



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
            $('[name="all_facility"]').on('click', function() {

                if ($(this).is(':checked')) {
                    $.each($('.facility'), function() {
                        $(this).prop('checked', true);
                    });
                } else {
                    $.each($('.facility'), function() {
                        $(this).prop('checked', false);
                    });
                }

            });
        });
    </script>


</x-app-layout>
