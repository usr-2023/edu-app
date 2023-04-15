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
                                            name="q1" value="314000" />
                                        <x-input-error :messages="$errors->get('q1')" class="w-full mt-2" />
                                    </div>
                                    <div class=" mx-4 my-4 w-full">
                                        <x-input-label for="q2" class="w-full mb-1" :value="__('اخرى')" />
                                        <x-text-input id="q2" class="w-full block mt-1" type="number"
                                            name="q2" value="0" />
                                        <x-input-error :messages="$errors->get('q2')" class="w-full mt-2" />
                                    </div>
                                </div>
                                <div class="flex">

                                    <div class="mx-4 my-4 w-full">


                                        <table id="res" class="table">
                                            <thead>
                                                <tr class=" transition: all .25s ease-in-out">
                                                    <th>نوع المخصصات</th>
                                                    <th>المبلغ</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>النقل</td>
                                                    <td class="age_col">20000</td>
                                                </tr>
                                            </tbody>

                                        </table>
                                        <div class="flex">
                                            <label class="block mx-2 my-2"> المجموع:</label>
                                            <div id="table_total" class="block mx-2 my-2">0</div>
                                        </div>
                                    </div>
                                    <div class="mx-4 my-4 w-full">

                                        <label class="block mx-2 my-2" for="fname">نوع المخصصات:</label>
                                        <input class="block mx-2 my-2" type="text" name="fname" id="fname">

                                        <label class="block mx-2 my-2" for="age">المبلغ:</label>
                                        <input class="block mx-2 my-2" type="number" name="age" id="age">

                                        <div class="flex">
                                            <button id="add_btn"class="btn btn-outline-dark mx-2 my-2" type="button"
                                                onclick="addHtmlTableRow();">Add</button>
                                            <button id="edit_btn" class="btn btn-outline-dark mx-2 my-2" type="button"
                                                onclick="editHtmlTbleSelectedRow();">Save</button>
                                            <button id="delete_btn" class="btn btn-outline-danger mx-2 my-2"
                                                type="button" onclick="removeSelectedRow();">Remove</button>
                                        </div>
                                    </div>

                                </div>
                                <div class="flex">
                                    <div class=" mx-4 my-4 w-full">
                                        <x-input-label for="q3" class="w-full mb-1" :value="__('الاستقطاعات')" />
                                        <x-text-input id="q3" class="w-full block mt-1" type="number"
                                            name="q3" value="-35000" />
                                        <x-input-error :messages="$errors->get('q3')" class="w-full mt-2" />
                                    </div>

                                    <div class=" mx-4 my-4 w-full">
                                        <x-input-label for="q4" class="w-full mb-1" :value="__('الشهادة')" />
                                        <x-text-input id="q4" class="w-full block mt-1" type="number"
                                            name="q4" value="0" />
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
                            <div class="flex">
                                <div class="block mx-2 my-2">الراتب:</div>
                                <div id="total" class="block mx-2 my-2">0</div>
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

    <script>
        var totalPoints = 0;
        $(document).ready(function() {
            cal();
            document.getElementById('add_btn').style.display = "block";
            document.getElementById('edit_btn').style.display = "none";
            document.getElementById('delete_btn').style.display = "none";
        });
        $(document).on("change", ".section", function() {
            cal();
        });

        var rIndex,
            table = document.getElementById("res");

        // check the empty input
        function checkEmptyInput() {
            var isEmpty = false,
                fname = document.getElementById("fname").value,
                age = document.getElementById("age").value;

            if (fname === "") {
                alert("First Name Connot Be Empty");
                isEmpty = true;
            } else if (age === "") {
                alert("Age Connot Be Empty");
                isEmpty = true;
            }
            return isEmpty;
        }
        // add Row
        function addHtmlTableRow() {
            // get the table by id
            // create a new row and cells
            // get value from input text
            // set the values into row cell's
            if (!checkEmptyInput()) {
                var newRow = table.insertRow(table.length),
                    cell1 = newRow.insertCell(0),
                    cell2 = newRow.insertCell(1),
                    fname = document.getElementById("fname").value,
                    age = document.getElementById("age").value;
                cell2.setAttribute("class", "age_col");

                cell1.innerHTML = fname;
                cell2.innerHTML = age;
                document.getElementById("fname").value = "";
                document.getElementById("age").value = "";
                cal();
                // call the function to set the event to the new row
                selectedRowToInput();

            }
        }
        // display selected row data into input text
        function selectedRowToInput() {

            for (var i = 1; i < table.rows.length; i++) {
                table.rows[i].onclick = function() {
                    // get the seected row index
                    rIndex = this.rowIndex;
                    document.getElementById("fname").value = this.cells[0].innerHTML;
                    document.getElementById("age").value = this.cells[1].innerHTML;
                    document.getElementById('add_btn').style.display = "none";
                    document.getElementById('edit_btn').style.display = "block";
                    document.getElementById('delete_btn').style.display = "block";
                };
            }
        }
        selectedRowToInput();

        function editHtmlTbleSelectedRow() {
            var fname = document.getElementById("fname").value,
                age = document.getElementById("age").value;
            if (!checkEmptyInput()) {
                table.rows[rIndex].cells[0].innerHTML = fname;
                table.rows[rIndex].cells[1].innerHTML = age;
                document.getElementById("fname").value = "";
                document.getElementById("age").value = "";
                document.getElementById('add_btn').style.display = "block";
                document.getElementById('edit_btn').style.display = "none";
                document.getElementById('delete_btn').style.display = "none";
                cal();
            }


        }

        function removeSelectedRow() {
            table.deleteRow(rIndex);
            // clear input text
            document.getElementById("fname").value = "";
            document.getElementById("age").value = "";
            document.getElementById('add_btn').style.display = "block";
            document.getElementById('edit_btn').style.display = "none";
            document.getElementById('delete_btn').style.display = "none";
            cal();

        }

        function cal() {
            var total = 0;

            var cls = document.getElementById("res").getElementsByTagName("td");
            var sum = 0;
            for (var i = 0; i < cls.length; i++) {

                if (cls[i].className == "age_col") {

                    sum += isNaN(cls[i].innerHTML) ? 0 : parseInt(cls[i].innerHTML);
                }
            }


            $("#table_total").text(sum);

            var q1 = parseInt($("#q1").val());

            var q2 = 20000 + 20000 + (q1 * 0.33);
            $("#q2").val(q2);

            var q3 = -(q1 * 0.12);
            $("#q3").val(q3);

            var q4 = q1 * 0.95;
            $("#q4").val(q4);

            var q5 = ($("#q5").is(":checked")) ? (q1 * 0.28) : 0;
            $("#q5").val(q5);

            var q6 = parseInt($("#table_total").text());

            total = q1 + q2 + q3 + q4 + q5 + q6;
            $("#total").text(total);

        }
    </script>

</x-app-layout>
