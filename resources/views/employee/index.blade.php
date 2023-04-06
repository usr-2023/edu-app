<x-app-layout>

    <x-slot name="header">


        @include('employee.nav.navigation')

        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif


    </x-slot>

    <div class="py-6">
        <div class="max-w-full mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <table dir="rtl" class="table text-center" id="my-table">
                        <thead>
                            <tr>
                                <th class="text-center" title="الوظائف">الوظائف</th>
                                <th class="text-center" title="الرقم الوظيفي">الرقم الوظيفي</th>
                                <th class="text-center" title="الاسم">الاسم</th>
                                <th class="text-center" title="اسم الاب">اسم الاب</th>
                                <th class="text-center" title="اسم الجد">اسم الجد</th>
                                <th class="text-center" title="تاريخ الميلاد">تاريخ الميلاد</th>
                                <th class="text-center" title="اسم الام">اسم الام</th>
                                <th class="text-center" title="تاريخ التعيين">تاريخ التعيين</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script>
        $.fn.dataTable.ext.errMode = 'none';
    </script>



    {!! $dataTable->scripts() !!}

</x-app-layout>
