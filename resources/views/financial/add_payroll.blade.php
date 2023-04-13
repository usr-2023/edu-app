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
                                <div class="flex">
                                    <div class=" mx-4 my-4 w-full">
                                        <x-input-label for="q1" class="w-full mb-1" :value="__('الراتب الاسمي')" />
                                        <x-text-input id="q1" class="w-full block mt-1" type="number"
                                            name="q1" value="314000" step="1000" />
                                        <x-input-error :messages="$errors->get('q1')" class="w-full mt-2" />
                                    </div>
                                    <div class=" mx-4 my-4 w-full">
                                        <x-input-label for="q2" class="w-full mb-1" :value="__('المخصصات')" />
                                        <x-text-input id="q2" class="w-full block mt-1" type="number"
                                            name="q2" value="0" step="1000" />
                                        <x-input-error :messages="$errors->get('q2')" class="w-full mt-2" />
                                    </div>

                                    <div class=" mx-4 my-4 w-full">
                                        <x-input-label for="q3" class="w-full mb-1" :value="__('الاستقطاعات')" />
                                        <x-text-input id="q3" class="w-full block mt-1" type="number"
                                            name="q3" value="-35000" step="1000" />
                                        <x-input-error :messages="$errors->get('q3')" class="w-full mt-2" />
                                    </div>

                                    <div class=" mx-4 my-4 w-full">
                                        <x-input-label for="q4" class="w-full mb-1" :value="__('الشهادة')" />
                                        <x-text-input id="q4" class="w-full block mt-1" type="number"
                                            name="q4" value="0" step="1000" />
                                        <x-input-error :messages="$errors->get('q4')" class="w-full mt-2" />
                                    </div>

                                    <div class=" mx-4 my-4 w-full">
                                        <x-input-label for="q5" class="w-full mb-1" :value="__('الصعقة')" />
                                        <input id="q5"
                                            class="h-10 w-full block mt-1 border-gray-400 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"
                                            type="checkbox" name="q5" value="75000" />
                                        <x-input-error :messages="$errors->get('q5')" class="w-full mt-2" />
                                    </div>

                                </div>
                            </div>
                            <div>الراتب</div>
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
            cal();
        });
        $(document).on("change", ".section", function() {
            cal();
        });

        function cal() {
            var total = 0;

            var q1 = parseInt($("#q1").val());

            var q2 = 20000 + 20000 + (q1 * 0.33);
            $("#q2").val(q2);

            var q3 = -(q1 * 0.12);
            $("#q3").val(q3);

            var q4 = q1 * 0.95;
            $("#q4").val(q4);

            var q5 = ($("#q5").is(":checked")) ? (q1 * 0.28) : 0;
            $("#q5").val(q5);

            total = q1 + q2 + q3 + q4 + q5;
            $("#total").text(total);



        }
    </script>

</x-app-layout>
