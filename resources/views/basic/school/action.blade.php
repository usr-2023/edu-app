<div class="flex ">
    @can('school-show')
        <a href="{{ route('school.show', $url_address) }}" class="my-1 mx-1 view btn btn-success edit">
            {{ __('word.view') }}
        </a>
    @endcan
    @can('school-update')
        <a href="{{ route('school.edit', $url_address) }}" class="my-1 mx-1 view btn btn-warning">
            {{ __('word.edit') }}
        </a>
    @endcan
    @can('school-delete')
        <form action="{{ route('school.destroy', $url_address) }}" method="post" class="my-1 mx-1">
            @csrf
            @method('DELETE')
            <x-primary-button>
                {{ __('word.delete') }}
            </x-primary-button>
        </form>
    @endcan
</div>
