<nav x-data="{ open: false }" class="bg-white ">
    <!-- Primary Navigation Menu -->
    <div class=" max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between ">
            <div class="flex">

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">

                    @can('employee-list')
                        <x-nav-link :href="route('employee.index')" :active="request()->routeIs('employee.index')">
                            {{ __('word.employee_search') }}
                        </x-nav-link>
                    @endcan
                    @can('employee-create')
                        <x-nav-link :href="route('employee.create')" :active="request()->routeIs('employee.create')">
                            {{ __('word.employee_add') }}
                        </x-nav-link>
                    @endcan
                    @can('building-list')
                        <x-nav-link :href="route('building.index')" :active="request()->routeIs('building.index')">
                            {{ __('word.building_search') }}
                        </x-nav-link>
                    @endcan
                    @can('building-create')
                        <x-nav-link :href="route('building.create')" :active="request()->routeIs('building.create')">
                            {{ __('word.building_add') }}
                        </x-nav-link>
                    @endcan
                    @can('facility-list')
                        <x-nav-link :href="route('facility.index')" :active="request()->routeIs('facility.index')">
                            {{ __('word.facility_search') }}
                        </x-nav-link>
                    @endcan
                    @can('facility-create')
                        <x-nav-link :href="route('facility.create')" :active="request()->routeIs('facility.create')">
                            {{ __('word.facility_add') }}
                        </x-nav-link>
                    @endcan

                </div>

            </div>

        </div>
    </div>
</nav>
