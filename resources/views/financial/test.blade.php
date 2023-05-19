<x-app-layout>

    <x-slot name="header">
        @include('financial.nav.navigation')

    </x-slot>


    <div class="py-6">
        <div class="max-w-full mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div>
                        @foreach ($tests as $test)
                            <option value="">{{ __($test->name) }}</option>
                            <option value="">{{ __($test->work_address) }}</option>
                            <option value="">{{ __($test->get_facility_group->facility_group) }}</option>
                            <option value="">{{ __($test->get_facility_link->name) }}
                            </option>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
