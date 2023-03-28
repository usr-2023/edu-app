
<x-app-layout>
    
    <x-slot name="header">
        <style>
            #my-table {
                        direction: rtl;
                        font-size: medium;
                        text-align: left;
                        font-weight: bold;
                      }
        </style>

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
                        {!! $dataTable->table() !!}
                </div>
            </div>
        </div>
    </div>
    

    {!! $dataTable->scripts() !!}
 
</x-app-layout>