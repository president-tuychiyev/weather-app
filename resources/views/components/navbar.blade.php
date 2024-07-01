<nav class="fixed z-10 w-full bg-white md:absolute md:bg-transparent top-0">
    <div class="container m-auto px-2 md:px-12 lg:px-7">
        <div class="flex flex-wrap items-center justify-between py-3 gap-6 md:py-4 md:gap-0">
            <input type="checkbox" name="toggle_nav" id="toggle_nav" class="peer hidden">
            <div class="w-full px-6 flex justify-between lg:w-max md:px-0 z-30">
                <a href="/" aria-label="logo" class="flex space-x-2 items-center">
                    <img src="{{ asset('img/logo.png') }}" class="w-12" alt="logo" width="144" height="133">
                    <span class="text-2xl font-bold text-yellow-900 ">Weather|<span class="text-yellow-700 ">App</span></span>
                </a>

                <div class="flex items-center lg:hidden max-h-10">
                    <label role="button" for="toggle_nav" aria-label="humburger" id="hamburger" class="relative w-10 h-auto p-2">
                        <div id="line" class="m-auto h-0.5 w-6 rounded bg-yellow-900  transition duration-300"></div>
                        <div id="line2" class="m-auto mt-2 h-0.5 w-6 rounded bg-yellow-900  transition duration-300">
                        </div>
                    </label>
                </div>
            </div>

            <label role="button" for="toggle_nav" class="hidden peer-checked:block fixed w-full h-full left-0 top-0 z-10 bg-yellow-200   bg-opacity-30 backdrop-blur backdrop-filter"></label>
            <div class="hidden peer-checked:flex w-full flex-col lg:flex lg:flex-row justify-end z-30 items-center gap-y-6 p-6 rounded-xl bg-white  lg:gap-y-0 lg:p-0 md:flex-nowrap lg:bg-transparent lg:w-7/12">
                <div class="text-gray-600 lg:pr-4 w-full">
                    <ul class="tracking-wide font-medium  text-sm 
                        flex flex-col gap-y-6 lg:gap-y-0 lg:flex-row w-full">
                        <li>
                            <a href="#" class="block md:px-4 transition   hover:text-yellow-700">
                                <span>Home</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="block md:px-4 transition   hover:text-yellow-700">
                                <span>About</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="block md:px-4 transition   hover:text-yellow-700">
                                <span>News</span>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="w-full min-w-max space-y-2 
                    border-yellow-200 lg:space-y-0 sm:w-max lg:border-l dark:lg:border-gray-700" x-data="{ authenticated: {{ auth()->check() ? 'true' : 'false' }} }">
                    <a x-show="!authenticated" href="{{ route('register') }}">
                        <button type="button" class="w-full py-3 px-6 text-center rounded-full transition active:bg-yellow-200 dark:active:bg-gray-700 dark:focus:bg-gray-800 focus:bg-yellow-100 sm:w-max">
                            <span class="block text-yellow-800  font-semibold text-sm">
                                Sign up
                            </span>
                        </button>
                    </a>
                    <a x-show="!authenticated" href="{{ route('login') }}">
                        <button x-show="!authenticated" type="button" class="w-full py-3 px-6 text-center rounded-full transition bg-yellow-300 hover:bg-yellow-100 active:bg-yellow-400 focus:bg-yellow-300 sm:w-max">
                            <span class="block text-yellow-900 font-semibold text-sm">
                                Sign in
                            </span>
                        </button>
                    </a>

                    <a x-show="authenticated" href="{{ route('dashboard') }}" class="ml-4">
                        <button x-data="{{ json_encode(['name' => auth()->user()->name ?? '']) }}" type="button" class="w-full py-3 px-6 text-center rounded-full transition bg-yellow-300 hover:bg-yellow-100 active:bg-yellow-400 focus:bg-yellow-300 sm:w-max">
                            <span class="block text-yellow-900 font-semibold text-sm" x-text="name"></span>
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</nav>