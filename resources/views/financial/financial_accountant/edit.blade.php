<x-app-layout>

    <x-slot name="header">
        @include('financial.nav.navigation')
    </x-slot>


    <div class="py-6">
        <div class="max-w-full mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div>
                        <form method="POST"
                            action="{{ route('financial_accountant.update', $financial_accountant->url_address) }}">
                            @csrf
                            @method('patch')

                            <input type="hidden" id="id" name="id" value="{{ $financial_accountant->id }}">
                            <input type="hidden" id="url_address" name="url_address"
                                value="{{ $financial_accountant->url_address }}">
                            <div class="flex">


                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="name" class="w-full mb-1" :value="__('word.financial_accountant_name')" />
                                    <x-text-input id="name" class="w-full block mt-1" type="text" name="name"
                                        value="{{ old('name') ?? $financial_accountant->name }}" />
                                    <x-input-error :messages="$errors->get('name')" class="w-full mt-2" />
                                </div>

                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="status" class="w-full mb-1" :value="__('word.financial_accountant_status')" />
                                    <select name="status" id="select-beast"
                                        class="form-control  nice-select  custom-select">
                                        <option value="active"
                                            {{ $financial_accountant->status == 'active' ? 'selected' : '' }}>active
                                        </option>
                                        <option value="disabled"
                                            {{ $financial_accountant->status == 'disabled' ? 'selected' : '' }}>disabled
                                        </option>
                                    </select>
                                    <x-input-error :messages="$errors->get('department_id')" class="w-full mt-2" />
                                </div>

                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="department_id" class="w-full mb-1" :value="__('word.department_id')" />
                                    <select id="department_id" class="w-full block mt-1 " name="department_id">
                                        @foreach ($departments as $department)
                                            <option value="{{ $department->id }}"
                                                {{ $financial_accountant->department_id == $department->id ? 'selected' : '' }}>
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
                                                {{ $financial_accountant->user_id == $user->id ? 'selected' : '' }}>
                                                {{ $user->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <x-input-error :messages="$errors->get('user_id')" class="w-full mt-2" />
                                </div>
                            </div>


                            <div class="flex">
                                <div class=" mx-4 my-4 w-full">
                                    <x-primary-button class="ml-4">
                                        {{ __('word.save') }}
                                    </x-primary-button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>





</x-app-layout>