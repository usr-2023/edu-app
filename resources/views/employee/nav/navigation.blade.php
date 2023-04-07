<nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
    <!-- Primary Navigation Menu -->
    <div class=" max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between ">
            <div class="flex">


                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">

                    <x-nav-link :href="route('employee.index')" :active="request()->routeIs('employee.index')">
                        {{ __('word.search') }}
                    </x-nav-link>

                    <x-nav-link :href="route('employee.create')" :active="request()->routeIs('employee.create')">
                        {{ __('word.add_employee') }}
                    </x-nav-link>

                </div>

            </div>

        </div>
    </div>
</nav>
