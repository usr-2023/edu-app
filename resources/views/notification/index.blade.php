<x-app-layout>

    <x-slot name="header">
    </x-slot>

    <div class="py-4">
        <div class="max-w-full mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">


                    <ul>
                        @if (auth()->user()->unreadNotifications()->groupBy('notifiable_type')->count() != 0)
                            <li class="font-semibold">
                                <a rel="alternate" href="{{ route('notification.markallasread') }}"
                                    class="block w-full px-4 py-2 text-right leading-5 text-green-600 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out">
                                    تمييز الكل كمقروء
                                </a>
                            </li>
                            <br>
                            <br>
                            <li class="font-semibold">
                                <a rel="alternate"
                                    class="block w-full px-4 py-2 text-right leading-5 text-gray-700 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out">
                                    الاشعارات غير المقروءة
                                    {{ auth()->user()->unreadNotifications()->groupBy('notifiable_type')->count() }}
                                </a>
                            </li>
                        @endif

                        @forelse (auth()->user()->unreadNotifications()->take(500)->get() as $notification)
                            <li class="font-semibold">
                                <a rel="alternate" href="{{ route('notification.markasread', $notification) }}"
                                    class="block w-full px-4 py-2 text-right leading-5 text-gray-700 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out">
                                    {{ $notification->data['name'] . ' - ' . $notification->data['action'] . ' - وقت الاشعار - ' . $notification->created_at }}
                                </a>
                            </li>
                        @empty
                            <li class="font-semibold">
                                <a rel="alternate"
                                    class="block w-full px-4 py-2 text-right leading-5 text-gray-700 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out">
                                    لا توجد اشعارات غير مقروءة
                                </a>
                            </li>
                        @endforelse
                        <br>
                        <br>
                        <li class="font-semibold">
                            <a rel="alternate"
                                class="block w-full px-4 py-2 text-right leading-5 text-gray-700 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out">
                                الاشعارات
                                المقروءة
                                {{ auth()->user()->readNotifications()->groupBy('notifiable_type')->count() }}
                            </a>
                        </li>
                        @forelse (auth()->user()->readNotifications()->take(500)->get() as $notification)
                            <li>
                                <a rel="alternate" href="{{ route('notification.markasread', $notification) }}"
                                    class="block w-full px-4 py-2 text-right text-sm leading-5 text-gray-700 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out">
                                    {{ $notification->data['name'] . ' - ' . $notification->data['action'] . ' - وقت الاشعار - ' . $notification->created_at . ' - وقت فتح الاشعار - ' . $notification->read_at }}
                                </a>
                            </li>
                        @empty
                        @endforelse


                    </ul>


                </div>
            </div>
        </div>
    </div>
</x-app-layout>
