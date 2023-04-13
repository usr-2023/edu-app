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
                            <div class="section">
                                <input type="checkbox" name="q1" value="2" />
                                <input type="number" name="q2" value="0" />
                                <input type="checkbox" name="q3" value="1" />
                                <input type="number" name="q4" value="3" />
                            </div>
                            <div id="total">0</div>
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
        var totalPoints = 0;
        $(document).ready(function() {

            $('.section').each(function() {
                totalPoints = 0;
                $(this).find('input:checkbox:checked').each(function() {
                    totalPoints += parseInt($(this).val()); //<==== a catch  in here !! read below
                });
                $(this).find('input[type=number]').each(function() {
                    totalPoints += parseInt($(this).val()); //<==== a catch  in here !! read below
                });



            });
            $('#total').text(totalPoints);

        });
        $(document).on("change", ".section", function() {

            $('.section').each(function() {
                totalPoints = 0;
                $(this).find('input:checkbox:checked').each(function() {
                    totalPoints += parseInt($(this).val()); //<==== a catch  in here !! read below
                });
                $(this).find('input[type=number]').each(function() {
                    totalPoints += parseInt($(this).val()); //<==== a catch  in here !! read below
                });


            });
            $('#total').text(totalPoints);

        });
    </script>

</x-app-layout>
