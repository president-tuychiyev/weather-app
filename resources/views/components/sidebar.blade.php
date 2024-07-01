<div class="px-3 py-4 bg-gray-100 p-5 rounded-2xl hidden lg:block top-5 sticky">
    <ul class="space-y-2 font-medium">
        <li class="w-full grid justify-center text-center mb-4">
            <div class="relative mb-2 grid justify-center">
                <img src="https://img.freepik.com/free-psd/3d-illustration-person-with-sunglasses_23-2149436188.jpg?t=st=1719824859~exp=1719825459~hmac=8d43f848d605fa6a095a29ab0d6a458a955b12728047885eb65f77f3f4457c64" class="w-24 h-24 border rounded-full object-cover">
                <input type="file" name="avatar" id="avatar" accept="image/png, image/gif, image/jpeg, image/jpg" class="hidden">
                <label for="avatar" class="absolute right-3 bottom-0">
                    <svg class="w-8 bg-white stroke-slate-800 rounded-full cursor-pointer hover:w-9 transition-all" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g>
                            <circle opacity="0.5" cx="12" cy="12" r="10" stroke="#1C274C" stroke-width="1.5"></circle>
                            <path d="M15 12L12 12M12 12L9 12M12 12L12 9M12 12L12 15" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"></path>
                        </g>
                    </svg>
                </label>
            </div>

            <span>{{ auth()->user()->name }}</span>
            <div class="relative inline-flex justify-center items-center gap-4">
                <div class="flex relative h-2 w-2 left-3">
                    <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-sky-400 opacity-75"></span>
                    <span class="relative inline-flex rounded-full h-2 w-2 bg-sky-500"></span>
                </div>
                <small>Online</small>
            </div>
        </li>
        <li class="profile-sidebar-active-menu">
            <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-white py-3 group">
                <svg class="w-5 h-5 text-gray-500 transition duration-75 group-hover:text-gray-900" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g>
                        <path opacity="0.5" d="M2 12C2 7.28595 2 4.92893 3.46447 3.46447C4.92893 2 7.28595 2 12 2C16.714 2 19.0711 2 20.5355 3.46447C22 4.92893 22 7.28595 22 12" stroke="#1C274D" stroke-width="1.5"></path>
                        <path d="M14 6H10C7.19974 6 5.79961 6 4.73005 6.54497C3.78924 7.02433 3.02433 7.78924 2.54497 8.73005C2 9.79961 2 11.1997 2 14C2 16.8003 2 18.2004 2.54497 19.27C3.02433 20.2108 3.78924 20.9757 4.73005 21.455C5.79961 22 7.19974 22 10 22H14C16.8003 22 18.2004 22 19.27 21.455C20.2108 20.9757 20.9757 20.2108 21.455 19.27C22 18.2004 22 16.8003 22 14C22 11.1997 22 9.79961 21.455 8.73005C20.9757 7.78924 20.2108 7.02433 19.27 6.54497C18.2004 6 16.8003 6 14 6Z" stroke="#1C274D" stroke-width="1.5"></path>
                        <path opacity="0.5" d="M17 6V10.8076C17 11.7825 17 12.27 16.8709 12.5607C16.5766 13.2233 15.8506 13.5805 15.1461 13.4095C14.8369 13.3344 14.4507 13.037 13.6782 12.4422C13.2421 12.1064 13.024 11.9385 12.797 11.8398C12.2886 11.619 11.7114 11.619 11.203 11.8398C10.976 11.9385 10.7579 12.1064 10.3218 12.4422C9.5493 13.037 9.16307 13.3344 8.85391 13.4095C8.14942 13.5805 7.42342 13.2233 7.12914 12.5607C7 12.27 7 11.7825 7 10.8076V6" stroke="#1C274D" stroke-width="1.5"></path>
                    </g>
                </svg>
                <span class="ms-3">Subscriptions</span>
            </a>
        </li>

        <li class="profile-sidebar-active-menu">
            <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-white py-3 group">
                <svg class="w-5 h-5 text-gray-500 transition duration-75 group-hover:text-gray-900" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g>
                        <path d="M18.7491 9.70957V9.00497C18.7491 5.13623 15.7274 2 12 2C8.27256 2 5.25087 5.13623 5.25087 9.00497V9.70957C5.25087 10.5552 5.00972 11.3818 4.5578 12.0854L3.45036 13.8095C2.43882 15.3843 3.21105 17.5249 4.97036 18.0229C9.57274 19.3257 14.4273 19.3257 19.0296 18.0229C20.789 17.5249 21.5612 15.3843 20.5496 13.8095L19.4422 12.0854C18.9903 11.3818 18.7491 10.5552 18.7491 9.70957Z" stroke="#1C274C" stroke-width="1.5"></path>
                        <path opacity="0.5" d="M7.5 19C8.15503 20.7478 9.92246 22 12 22C14.0775 22 15.845 20.7478 16.5 19" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"></path>
                    </g>
                </svg>
                <span class="ms-3">Alerts</span>
            </a>
        </li>

        <li class="profile-sidebar-active-menu">
            <a href="{{ route('logout') }}" class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-white py-3 group">
                <svg class="w-5 h-5 text-gray-500 transition duration-75 group-hover:text-gray-900" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g>
                        <path d="M8.00171 7C8.01382 4.82497 8.11027 3.64706 8.87865 2.87868C9.75733 2 11.1715 2 14 2H15C17.8284 2 19.2426 2 20.1213 2.87868C21 3.75736 21 5.17157 21 8V16C21 18.8284 21 20.2426 20.1213 21.1213C19.2426 22 17.8284 22 15 22H14C11.1715 22 9.75733 22 8.87865 21.1213C8.11027 20.3529 8.01382 19.175 8.00171 17" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"></path>
                        <path opacity="0.5" d="M8 19.5C5.64298 19.5 4.46447 19.5 3.73223 18.7678C3 18.0355 3 16.857 3 14.5V9.5C3 7.14298 3 5.96447 3.73223 5.23223C4.46447 4.5 5.64298 4.5 8 4.5" stroke="#1C274C" stroke-width="1.5"></path>
                        <path d="M15 12L6 12M6 12L8 14M6 12L8 10" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                    </g>
                </svg>
                <span class="ms-3">Logout</span>
            </a>
        </li>
    </ul>
</div>