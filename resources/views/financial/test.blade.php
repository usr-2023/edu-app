<x-app-layout>

    <x-slot name="header">
        @include('financial.nav.navigation')

    </x-slot>


    <div class="py-6">
        <div class="max-w-full mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div>
                        @foreach ($facilitys as $facility)
                            <option value="">{{ __($facility->name) }}</option>
                            <option value="">{{ __($facility->work_address) }}</option>
                            <option value="">{{ __($facility->get_facility_group->facility_group) }}</option>
                            @if ($facility->facility_type_id == 1)
                                @foreach ($facility->get_sections as $section)
                                    <option value="">{{ __($section->counting_number) }}</option>
                                @endforeach
                            @elseif ($facility->facility_type_id == 2)
                                @foreach ($facility->get_schools as $school)
                                    <option value="">{{ __($school->counting_number) }}</option>
                                @endforeach
                            @endif
                            @if (count($facility->get_employees) > 0)
                                <h1>الموظيفين :-</h1>
                                @foreach ($facility->get_employees as $employee)
                                    <option value="">{{ __($employee->full_name) }}</option>
                                @endforeach
                            @endif
                        @endforeach



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
                    url: '{{ route('financial.get_facility_links') }}',
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
