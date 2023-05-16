<x-app-layout>

    <x-slot name="header">
        @include('basic.nav.navigation')
    </x-slot>


    <div class="py-6">
        <div class="max-w-full mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="d-flex justify-content-around ">
                        <div class=" mx-4 my-4 w-full">
                            <x-input-label for="counting_number" class="w-full mb-1" :value="__('word.section_counting_number')" />
                            <p id="counting_number" class="w-full h-9 block mt-1" type="text" name="counting_number">
                                {{ $section->counting_number }}
                            </p>
                        </div>


                        <div class=" mx-4 my-4 w-full">
                            <x-input-label for="name" class="w-full mb-1" :value="__('word.section_name')" />
                            <p id="name" class="w-full h-9 block mt-1" type="text" name="name">
                                {{ $section->name }}
                            </p>
                        </div>

                    </div>
                    <div class="flex">
                        @if (isset($section->user_id_create))
                            <div class="mx-4 my-4 ">
                                {{ __('word.user_create') }} {{ $section->get_user_create->name }}
                                {{ $section->created_at }}
                            </div>
                        @endif

                        @if (isset($section->user_id_update))
                            <div class="mx-4 my-4 ">
                                {{ __('word.user_update') }} {{ $section->get_user_update->name }}
                                {{ $section->updated_at }}
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
