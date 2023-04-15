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
                            <div class="flex">

                                <div class="mx-4 my-4 w-full">
                                    <table id="table" class="table">
                                        <tr class=" transition: all .25s ease-in-out">
                                            <th>نوع المخصصات</th>
                                            <th>المبلغ</th>
                                        </tr>
                                    </table>
                                </div>
                                <div class="mx-4 my-4 w-full">
                                    نوع المخصصات :<input class="block mb-10" type="text" name="fname"
                                        id="fname">
                                    المبلغ :<input class="block mb-10" type="number" name="age" id="age">

                                    <button type="button" onclick="addHtmlTableRow();">Add</button>
                                    <button type="button" onclick="editHtmlTbleSelectedRow();">Edit</button>
                                    <button type="button" onclick="removeSelectedRow();">Remove</button>
                                </div>

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
        var rIndex,
            table = document.getElementById("table");

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

                cell1.innerHTML = fname;
                cell2.innerHTML = age;
                document.getElementById("fname").value = "";
                document.getElementById("age").value = "";

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
            }
        }

        function removeSelectedRow() {
            table.deleteRow(rIndex);
            // clear input text
            document.getElementById("fname").value = "";
            document.getElementById("age").value = "";
        }
    </script>

</x-app-layout>
