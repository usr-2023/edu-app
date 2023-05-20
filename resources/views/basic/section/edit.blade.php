<x-app-layout>

    <x-slot name="header">
        @include('basic.nav.navigation')
    </x-slot>


    <div class="py-6">
        <div class="max-w-full mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div>
                        <form method="POST" action="{{ route('section.update', $section->url_address) }}">
                            @csrf
                            @method('patch')

                            <input type="hidden" id="id" name="id" value="{{ $section->id }}">
                            <input type="hidden" id="url_address" name="url_address"
                                value="{{ $section->url_address }}">
                            <div class="flex">
                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="counting_number" class="w-full mb-1" :value="__('word.section_counting_number')" />
                                    <x-text-input id="counting_number" class="w-full block mt-1" type="text"
                                        name="counting_number"
                                        value="{{ old('counting_number') ?? $section->counting_number }}" />
                                    <x-input-error :messages="$errors->get('counting_number')" class="w-full mt-2" />
                                </div>

                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="name" class="w-full mb-1" :value="__('word.section_name')" />
                                    <x-text-input id="name" class="w-full block mt-1" type="text" name="name"
                                        value="{{ old('name') ?? $section->name }}" />
                                    <x-input-error :messages="$errors->get('name')" class="w-full mt-2" />
                                </div>

                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="work_address_id" class="w-full mb-1" :value="__('word.work_address_id')" />
                                    <select id="work_address_id" class="w-full block mt-1 " name="work_address_id">
                                        {{ __('word.facility_choose') }}</option>
                                        @foreach ($facilitys as $facility)
                                            <option value="{{ $facility->id }}"
                                                {{ $section->work_address_id == $facility->id ? 'selected' : '' }}>
                                                {{ $facility->work_address }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <x-input-error :messages="$errors->get('work_address_id')" class="w-full mt-2" />
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
