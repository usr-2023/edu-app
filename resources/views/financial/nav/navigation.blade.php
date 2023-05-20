<nav x-data="{ open: false }" class="bg-white ">
    <!-- Primary Navigation Menu -->
    <div class=" max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between ">
            <div class="flex">

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">

                    @can('financial_accountant-list')
                        <x-nav-link :href="route('financial_accountant.index')" :active="request()->routeIs('financial_accountant.index')">
                            {{ __('word.financial_accountant_search') }}
                        </x-nav-link>
                    @endcan
                    @can('financial_accountant-create')
                        <x-nav-link :href="route('financial_accountant.create')" :active="request()->routeIs('financial_accountant.create')">
                            {{ __('word.financial_accountant_add') }}
                        </x-nav-link>
                    @endcan

                    <x-nav-link :href="route('financial.index')" :active="request()->routeIs('financial.index')">
                        {{ __('word.employee_search') }}
                    </x-nav-link>
                    <x-nav-link :href="route('financial.add_payroll')" :active="request()->routeIs('financial.add_payroll')">
                        {{ __('add payroll') }}
                    </x-nav-link>



                </div>

            </div>

        </div>
    </div>
</nav>
