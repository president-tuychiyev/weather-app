<x-app-layout>
    <div class="xl:container m-auto px-6 text-gray-500 md:px-12 space-y-6">

        <div>
            <div class="flex md:justify-start justify-center my-36">
                <div>
                    <div class="flex">
                        <h1 class="font-bold md:text-9xl text-5xl">{{ $current['main']['temp'] }}</h1>
                        <span class="text-6xl">ᵒ</span>
                    </div>
                    <h2 class="uppercase text-4xl">Today</h2>

                    <div class="flex items-center gap-1">
                        <svg class="fill-orange-400 w-4 md:w-6" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg">
                            <g stroke-width="0"></g>
                            <g stroke-linecap="round" stroke-linejoin="round"></g>
                            <g>
                                <path d="M16.114-0.011c-6.559 0-12.114 5.587-12.114 12.204 0 6.93 6.439 14.017 10.77 18.998 0.017 0.020 0.717 0.797 1.579 0.797h0.076c0.863 0 1.558-0.777 1.575-0.797 4.064-4.672 10-12.377 10-18.998 0-6.618-4.333-12.204-11.886-12.204zM16.515 29.849c-0.035 0.035-0.086 0.074-0.131 0.107-0.046-0.032-0.096-0.072-0.133-0.107l-0.523-0.602c-4.106-4.71-9.729-11.161-9.729-17.055 0-5.532 4.632-10.205 10.114-10.205 6.829 0 9.886 5.125 9.886 10.205 0 4.474-3.192 10.416-9.485 17.657zM16.035 6.044c-3.313 0-6 2.686-6 6s2.687 6 6 6 6-2.687 6-6-2.686-6-6-6zM16.035 16.044c-2.206 0-4.046-1.838-4.046-4.044s1.794-4 4-4c2.207 0 4 1.794 4 4 0.001 2.206-1.747 4.044-3.954 4.044z"></path>
                            </g>
                        </svg>
                        <p class="font-bold text-orange-400">{{ $current['name'] }}</p>
                    </div>

                    <div x-data="{ currentTime: new Date().toLocaleTimeString('en-US', { hour: '2-digit', minute: '2-digit' }) }" x-init="setInterval(() => currentTime = new Date().toLocaleTimeString('en-US', { hour: '2-digit', minute: '2-digit' }) , 1000)">
                        <h2 class="mt-4 text-2xl font-bold text-gray-700  md:text-4xl">
                            <p x-text="currentTime"></p>
                        </h2>
                    </div>
                </div>

                <img src="{{ asset('img/icons/' . $current['weather'][0]['icon'] . '.svg') }}" class="w-28 md:w-60">
            </div>
        </div>


        <div class="mt-16 grid divide-x divide-y divide-gray-100 overflow-hidden rounded-3xl border border-gray-100 sm:grid-cols-2 lg:grid-cols-5 lg:divide-y-0 xl:grid-cols-5">
            @foreach($weather as $item)
            <div class="group relative bg-white  transition hover:z-[1] hover:shadow-2xl hover:shadow-gray-600/10">
                <a href="javascript:void(0)">
                    <div class="relative space-y-8 py-12 p-8 flex justify-center">
                        <div class="space-y-4">
                            <h5 class="text-xl text-gray-700  transition group-hover:text-primary uppercase mb-5 font-bold">
                                {{ $item['dayName'] }}
                            </h5>
                            <img src="{{ asset('img/icons/' . end($item['weather'])['icon'] . '.svg') }}" class="w-12" width="512" height="512" alt="burger illustration" />
                            <div class="flex">
                                <h1 class="font-bold text-4xl">{{ end($item['weather'])['temperature'] }}</h1>
                                <span class="text-xl">ᵒ</span>
                            </div>
                            <small>{{ $item['date'] }}</small>

                            <a href="javascript:void(0)" class="flex items-center justify-between group-hover:text-primary">
                                <span class="text-sm">Read more</span>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 -translate-x-4 text-2xl opacity-0 transition duration-300 group-hover:translate-x-2 group-hover:opacity-100">
                                    <path fill-rule="evenodd" d="M12.97 3.97a.75.75 0 011.06 0l7.5 7.5a.75.75 0 010 1.06l-7.5 7.5a.75.75 0 11-1.06-1.06l6.22-6.22H3a.75.75 0 010-1.5h16.19l-6.22-6.22a.75.75 0 010-1.06z" clip-rule="evenodd" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>


        <div class="xl:container m-auto px-6 py-20 md:px-12 lg:px-20">
            <div class="m-auto text-center lg:w-7/12">
                <h2 class="text-2xl font-bold text-gray-800  md:text-4xl">
                    Subscribe for more weather updates
                </h2>
            </div>
            <div class="mt-12 grid items-center gap-6 md:grid-cols-2 lg:flex lg:space-x-8">
                <div class="group relative md:col-span-1 lg:w-[32%]">
                    <div aria-hidden="true" class="absolute top-0 h-full w-full rounded-3xl border border-gray-100  bg-white  shadow-2xl shadow-gray-600/10  transition duration-500 group-hover:scale-105 lg:group-hover:scale-110"></div>
                    <div class="relative space-y-8 p-8">
                        <h3 class="text-center text-3xl font-semibold text-gray-700 ">Monthly</h3>
                        <div class="relative flex justify-around">
                            <div class="flex">
                                <span class="-ml-6 mt-2 text-3xl font-bold text-primary">$</span>
                                <span class="leading-0 text-8xl font-bold text-gray-800 ">19</span>
                            </div>
                            <span class="absolute right-0 bottom-2 text-xl font-bold text-primary">/ Month</span>
                        </div>
                        <ul role="list" class="m-auto w-max space-y-4 pb-6 text-gray-600 ">
                            <li class="space-x-2">
                                <span class="font-semibold text-primary">&check;</span>
                                <span>First premium advantage</span>
                            </li>
                            <li class="space-x-2">
                                <span class="font-semibold text-primary">&check;</span>
                                <span>Second premium advantage</span>
                            </li>
                            <li class="space-x-2">
                                <span class="font-semibold text-primary">&check;</span>
                                <span>Third advantage</span>
                            </li>
                        </ul>
                        <button class="relative flex h-11 w-full items-center justify-center px-6 before:absolute before:inset-0 before:rounded-full before:bg-primary before:transition before:duration-300 hover:before:scale-105 active:duration-75 active:before:scale-95">
                            <span class="relative text-base font-semibold text-white ">Start plan</span>
                        </button>
                    </div>
                </div>

                <div class="group relative row-start-1 md:col-span-2 lg:w-[36%]">
                    <div aria-hidden="true" class="absolute top-0 h-full w-full rounded-3xl border border-gray-100  bg-white  shadow-2xl shadow-gray-600/10  transition duration-500 group-hover:scale-105 lg:group-hover:scale-110"></div>
                    <div class="relative space-y-8 p-8">
                        <h3 class="text-center text-3xl font-semibold text-gray-700 ">Annual</h3>
                        <div class="overflow-hidden">
                            <div class="-mr-20 flex items-end justify-center">
                                <div class="flex">
                                    <span class="-ml-6 mt-2 text-3xl font-bold text-primary">$</span>
                                    <span class="leading-0 text-8xl font-bold text-gray-800 ">15</span>
                                </div>
                                <div class="mb-2">
                                    <span class="block text-xl font-bold text-primary">/ Month</span>
                                </div>
                            </div>
                            <div class="text-center text-2xl font-medium">
                                <span class="text-gray-400 line-through">$234</span>
                                <span class="font-semibold text-gray-700 ">$190</span>
                            </div>
                            <span class="block text-center text-xs uppercase text-primary">BILLED YEARLY</span>
                            <span class="m-auto mt-4 block w-max rounded-full bg-gradient-to-r from-yellow-300 to-pink-300 px-4 py-1 text-sm font-medium text-yellow-900">1 Discount applied</span>
                        </div>
                        <ul role="list" class="m-auto w-max space-y-4 pb-6 text-gray-600 ">
                            <li class="space-x-2">
                                <span class="font-semibold text-primary">&check;</span>
                                <span>First premium advantage</span>
                            </li>
                            <li class="space-x-2">
                                <span class="font-semibold text-primary">&check;</span>
                                <span>Second premium advantage</span>
                            </li>
                            <li class="space-x-2">
                                <span class="font-semibold text-primary">&check;</span>
                                <span>Third advantage</span>
                            </li>
                            <li class="space-x-2">
                                <span class="font-semibold text-primary">&check;</span>
                                <span>Fourth organizations advantage</span>
                            </li>
                        </ul>
                        <button class="relative flex h-11 w-full items-center justify-center px-6 before:absolute before:inset-0 before:rounded-full before:bg-primary before:transition before:duration-300 hover:before:scale-105 active:duration-75 active:before:scale-95">
                            <span class="relative text-base font-semibold text-white ">Start plan</span>
                        </button>
                    </div>
                </div>

                <div class="group relative md:col-span-1 lg:w-[32%]">
                    <div aria-hidden="true" class="absolute top-0 h-full w-full rounded-3xl border border-gray-100  bg-white  shadow-2xl shadow-gray-600/10  transition duration-500 group-hover:scale-105 lg:group-hover:scale-110"></div>
                    <div class="relative space-y-8 p-8">
                        <h3 class="text-center text-3xl font-semibold text-gray-700 ">Free</h3>
                        <div class="relative flex justify-around">
                            <div class="flex">
                                <span class="-ml-2 mt-2 text-3xl font-bold text-primary">$</span>
                                <span class="leading-0 text-8xl font-bold text-gray-800 ">0</span>
                            </div>
                            <span class="absolute right-0 bottom-2 text-xl font-bold text-primary">/ 7 days</span>
                        </div>
                        <ul role="list" class="m-auto w-max space-y-4 pb-6 text-gray-600 ">
                            <li class="space-x-2">
                                <span class="font-semibold text-primary">&check;</span>
                                <span>First premium advantage</span>
                            </li>
                            <li class="space-x-2">
                                <span class="font-semibold text-primary">&check;</span>
                                <span>Second premium advantage</span>
                            </li>
                            <li class="space-x-2">
                                <span class="font-semibold text-primary">&check;</span>
                                <span>Third advantage</span>
                            </li>
                        </ul>
                        <button class="relative flex h-11 w-full items-center justify-center px-6 before:absolute before:inset-0 before:rounded-full before:bg-sky-50 before:border before:border-sky-500  dark:before:bg-gray-700 before:transition before:duration-300 hover:before:scale-105 active:duration-75 active:before:scale-95">
                            <span class="relative text-base font-semibold text-sky-600 ">Get Started</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>

    </div>
</x-app-layout>