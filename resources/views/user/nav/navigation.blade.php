<nav x-data="{ open: false }" class="bg-white ">
    <!-- Primary Navigation Menu -->
    <div class=" max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between ">
            <div class="flex">

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    @can('user-list')
                        <x-nav-link :href="route('user.index')" :active="request()->routeIs('user.index')">
                            {{ __('word.user_search') }}
                        </x-nav-link>
                    @endcan
                    @can('user-create')
                        <x-nav-link :href="route('user.create')" :active="request()->routeIs('user.create')">
                            {{ __('word.user_add') }}
                        </x-nav-link>
                    @endcan
                </div>

            </div>

        </div>
    </div>
</nav>
