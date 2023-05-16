<div class="flex ">
    @can('section-show')
        <a href="{{ route('section.show', $url_address) }}" class="my-1 mx-1 view btn btn-success edit">
            {{ __('word.view') }}
        </a>
    @endcan
    @can('section-update')
        <a href="{{ route('section.edit', $url_address) }}" class="my-1 mx-1 view btn btn-warning">
            {{ __('word.edit') }}
        </a>
    @endcan
    @can('section-delete')
        <form action="{{ route('section.destroy', $url_address) }}" method="post" class="my-1 mx-1">
            @csrf
            @method('DELETE')
            <x-primary-button>
                {{ __('word.delete') }}
            </x-primary-button>
        </form>
    @endcan
</div>
