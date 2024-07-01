<!-- ========== Left Sidebar Start ========== -->
    <div class="vertical-menu rtl:right-0 fixed ltr:left-0 bottom-0 top-16 h-screen border-r bg-slate-50 border-gray-50 print:hidden dark:bg-zinc-800 dark:border-neutral-700 z-10">
        <div data-simplebar class="h-full">
            <div id="sidebar-menu">
                <ul class="metismenu" id="side-menu">
                    <li class="menu-heading px-4 py-3.5 text-xs font-medium text-gray-500 cursor-default" data-key="t-menu">Menu</li>
                    <li>
                        <a href="{{ url('/dashboard') }}" class="pl-6 pr-4 py-3 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">
                            <i class="fa-solid fa-house mr-2" style="font-size: 20px;"></i>
                            <span data-key="t-dashboard" style="font-size: large;">Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route ('profile.edit')}}" class="pl-6 pr-4 py-3 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">
                            <i class="fa-solid fa-user mr-3" style="font-size: 20px;"></i>
                            <span data-key="t-dashboard" style="font-size: large;">Profile</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('posts.store') }}" class="pl-6 pr-4 py-3 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">
                            <i class="fa-solid fa-border-all mr-3" style="font-size: 19px;"></i>
                            <span data-key="t-dashboard" style="font-size: large;">View all Post</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('posts.create') }}" class="pl-6 pr-4 py-3 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">
                            <i class="fa-solid fa-plus mr-3" style="font-size: 26px;"></i>
                            <span data-key="t-dashboard" style="font-size: large;">Create New Post</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Left Sidebar End -->