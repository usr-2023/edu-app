<x-app-layout>

    <x-slot name="header">
        @include('financial.nav.navigation')
    </x-slot>


    <div class="py-6">
        <div class="max-w-full mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div>
                        <form method="POST" action="{{ route('financial.add_payroll') }}">
                            @csrf
                            <input type="checkbox" id="basic_single" name="basic_single" value="400"><br>

                            <input type="checkbox" id="basic_double" name="basic_double" value="680"><br>

                            <input type="text" name="total" value="" size="30" id="total">
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

    <script>
        $(document).ready(function() {
            $('input:checkbox').change(function() {
                var total = 0;
                $('input:checkbox:checked').each(function() { // iterate through each checked element.
                    total += isNaN(parseInt($(this).val())) ? 0 : parseInt($(this).val());
                });
                $("#total").val(total);

            });
        });
    </script>

</x-app-layout>
