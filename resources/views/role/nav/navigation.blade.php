<nav x-data="{ open: false }" class="bg-white ">
    <!-- Primary Navigation Menu -->
    <div class=" max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between ">
            <div class="flex">

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    @can('role-list')
                        <x-nav-link :href="route('role.index')" :active="request()->routeIs('role.index')">
                            {{ __('word.role_search') }}
                        </x-nav-link>
                    @endcan
                    @can('role-create')
                        <x-nav-link :href="route('role.create')" :active="request()->routeIs('role.create')">
                            {{ __('word.role_add') }}
                        </x-nav-link>
                    @endcan
                </div>

            </div>

        </div>
    </div>
</nav>
