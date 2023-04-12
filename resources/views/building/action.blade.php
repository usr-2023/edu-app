<div class="flex ">
    <a href="{{ route('building.show', $url_address) }}" class="my-2 mx-2 view btn btn-success edit">
        {{ __('word.view') }}
    </a>
    <a href="{{ route('building.edit', $url_address) }}" class="my-2 mx-2 view btn btn-warning">
        {{ __('word.edit') }}
    </a>

    <form action="{{ route('building.destroy', $url_address) }}" method="post" class="my-2 mx-2">
        @csrf
        <x-primary-button class="ml-4">
            {{ __('word.delete') }}
        </x-primary-button>
    </form>
</div>
