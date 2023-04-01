<div class="flex ">
    <a href="{{ route('employee.show', $url_address) }}" class="my-2 mx-2 view btn btn-success edit">
        عرض
    </a>
    <a href="{{ route('employee.edit', $url_address) }}" class="my-2 mx-2 view btn btn-warning">
        تعديل
    </a>

    <form action="{{ route('employee.destroy', $url_address) }}" method="post" class="my-2 mx-2">
        @csrf
        <x-primary-button class="ml-4">
            {{ __('حذف') }}
        </x-primary-button>
    </form>
</div>
