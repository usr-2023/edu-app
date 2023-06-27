<x-app-layout>



    <div class="py-4">
        <div class="max-w-full mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg ">
                <div class="p-6 text-gray-900  " style="text-align: center">
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif


                    <h2 class="font-semibold  text-l text-gray-800 leading-tight mx-4 my-8 w-full">
                        {{ __('word.edit') . ' : ' . __('word.' . $tableName) . '->' . $tableName }}
                    </h2>


                    <div class="flex">


                        <table class="table table-striped">
                            @foreach ($headers as $header)
                                @if (!in_array($header, $removeItems))
                                    <thead>
                                        <th scope="col" class="w-25"
                                            style="float: right; color: darkred ; background-color: #a0aec0 ; margin-bottom: 2vw">
                                            {{ $header }}</th>

                                    </thead>
                                    @foreach ($tableValues as $tableValue)
                                        <tr>

                                            <td style="text-align: center">
                                                @can('tables-edit')
                                                    <form style="display: inline-block"
                                                        action="{{ route('tables.update') }}" method="post"
                                                        class="my-2 mx-2">
                                                        @csrf
                                                        @method('PATCH')
                                                        <input type="hidden" name="table_name" value="{{ $tableName }}">
                                                        <input type="hidden" name="row_id" value="{{ $tableValue->id }}">
                                                        <input type="hidden" name="col_name" value="{{ $header }}">
                                                        <x-text-input style="display: inline-block" required minlength="3"
                                                            class=" block mt-1" type="text" name="row_value"
                                                            value="{{ $tableValue->$header }}"></x-text-input>
                                                        <x-primary-button style="background-color: #767700">
                                                            {{ __('word.update') }}</x-primary-button>
                                                    </form>

                                                    <form onclick="return confirm('هل انت متأكد من الحذف؟؟؟')"
                                                        style="display: inline-block"
                                                        action="{{ route('tables.destroy', $tableValue->id) }}"
                                                        method="post" class="my-2 mx-2">
                                                        @csrf
                                                        @method('DELETE')
                                                        <input type="hidden" name="table_name"
                                                            value="{{ $tableName }}">
                                                        <input type="hidden" name="col_name" value="{{ $header }}">
                                                        <input type="hidden" name="row_id" value="{{ $tableValue->id }}">
                                                        <x-primary-button style="background-color: darkred">
                                                            {{ __('word.delete') }}
                                                        </x-primary-button>
                                                    </form>
                                                @endcan
                                            </td>

                                        </tr>
                                    @endforeach
                                @endif
                            @endforeach

                        </table>

                        <form style="display: inline-block" action="{{ route('tables.create') }}" method="post"
                            class="my-2 mx-2">
                            @csrf
                            <input type="hidden" name="col_name" value="{{ $header }}">
                            <input type="hidden" name="table_name" value="{{ $tableName }}">
                            <x-text-input style="display: inline-block" class=" block mt-1" type="text" required
                                minlength="3" name="row_value"></x-text-input>
                            <x-primary-button style="background-color: #008b12; margin-top: 10px">
                                {{ __('word.add') }}
                            </x-primary-button>
                        </form>




                    </div>

                </div>
            </div>
        </div>

    </div>

</x-app-layout>
