<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8" />
        <title>Dashboard - Admin & Dashboard Template</title>
        <meta
          name="viewport"
          content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />
        <meta
          content="Tailwind Admin & Dashboard Template"
          name="description"
        />
        <meta content="" name="Themesbrand" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="{{asset('assets/images/favicon.ico')}}" />

        <link href="{{asset('assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css')}}" rel="stylesheet" type="text/css">

         <link rel="stylesheet" href="{{asset('./assets/libs/swiper/swiper-bundle.min.css')}}">

        <link rel="stylesheet" href="{{asset('assets/css/icons.css')}}" />
        <link rel="stylesheet" href="{{asset('assets/css/tailwind.css')}}" />

        @livewireStyles

    </head>
    
    <body data-mode="light" data-sidebar-size="lg">
        <div class="hidden">
            <div class="fixed inset-0 bg-black/40 transition-opacity z-40"></div>
            <div class="h-screen z-50 bg-white fixed w-80 right-0" data-simplebar>
                <div class="flex items-center p-4 border-b border-gray-100">
                    <h5 class="m-0 mr-2">Theme Customizer</h5>
                    <a href="javascript:void(0);" class="h-6 w-6 text-center bg-gray-700 ml-auto rounded-full" >
                        <i class="mdi mdi-close text-15 align-middle text-white leading-relaxed"></i>
                    </a>
                </div>
                <div class="p-4">
                    <h6 class="mb-3">Layout</h6>
                    <div class="flex gap-4">
                        <div>
                            <input class="focus:ring-0" checked type="radio" name="layout" id="layout-vertical" value="vertical">
                            <label class="align-middle" for="layout-vertical">Vertical</label>
                        </div>
                        <div>
                            <input class="focus:ring-0" type="radio" name="layout" id="layout-horizontal" value="horizontal">
                            <label class="align-middle" for="layout-horizontal">Horizontal</label>
                        </div>
                    </div>

                    <h6 class="mt-4 mb-3 pt-2">Layout Mode</h6>
                    <div class="flex gap-4">
                        <div>
                            <input class="focus:ring-0" checked type="radio" name="layout-mode" id="layout-mode-light" value="light">
                            <label class="form-check-label" for="layout-mode-light">Light</label>
                        </div>
                        <div>
                            <input class="focus:ring-0" type="radio" name="layout-mode" id="layout-mode-dark" value="dark">
                            <label class="form-check-label" for="layout-mode-dark">Dark</label>
                        </div>
                    </div>

                    <h6 class="mt-4 mb-3 pt-2">Layout Width</h6>

                    <div class="flex gap-4">
                        <div>
                            <input class="focus:ring-0" checked type="radio" name="layout-width" id="layout-width-fuild" value="fuild" onchange="document.body.setAttribute('data-layout-size', 'fluid')">
                            <label class="form-check-label" for="layout-width-fuild">Fluid</label>
                        </div>
                        <div>
                            <input class="focus:ring-0" type="radio" name="layout-width" id="layout-width-boxed" value="boxed" onchange="document.body.setAttribute('data-layout-size', 'boxed')">
                            <label class="form-check-label" for="layout-width-boxed">Boxed</label>
                        </div>
                    </div>

                    <h6 class="mt-4 mb-3 pt-2">Layout Position</h6>
                    <div class="flex gap-4">
                        <div>
                            <input class="focus:ring-0" checked type="radio" name="layout-position" id="layout-position-fixed" value="fixed" onchange="document.body.setAttribute('data-layout-scrollable', 'false')">
                            <label class="form-check-label" for="layout-position-fixed">Fixed</label>
                        </div>
                        <div>
                            <input class="focus:ring-0" checked type="radio" name="layout-position" id="layout-position-scrollable" value="scrollable" onchange="document.body.setAttribute('data-layout-scrollable', 'true')">
                            <label class="form-check-label" for="layout-position-scrollable">Scrollable</label>
                        </div>
                    </div>

                    <h6 class="mt-4 mb-3 pt-2">Topbar Color</h6>
                    <div class="flex gap-4">
                        <div>
                            <input class="focus:ring-0" checked type="radio" name="topbar-color" id="topbar-color-light" value="light" onchange="document.body.setAttribute('data-topbar', 'light')">
                            <label class="form-check-label" for="topbar-color-light">Light</label>
                        </div>
                        <div>
                            <input class="focus:ring-0" type="radio" name="topbar-color" id="topbar-color-dark" value="dark" onchange="document.body.setAttribute('data-topbar', 'dark')">
                            <label class="form-check-label" for="topbar-color-dark">Dark</label>
                        </div>
                    </div>

                    <h6 class="mt-4 mb-3 pt-2 sidebar-setting">Sidebar Size</h6>

                    <div class="space-y-1">
                        <div class="form-check sidebar-setting">
                            <input class="focus:ring-0" checked type="radio" name="sidebar-size" id="sidebar-size-default" value="default" onchange="document.body.setAttribute('data-sidebar-size', 'lg')">
                            <label class="form-check-label" for="sidebar-size-default">Default</label>
                        </div>
                        <div class="form-check sidebar-setting">
                            <input class="focus:ring-0" type="radio" name="sidebar-size" id="sidebar-size-compact" value="compact" onchange="document.body.setAttribute('data-sidebar-size', 'md')">
                            <label class="form-check-label" for="sidebar-size-compact">Compact</label>
                        </div>
                        <div class="form-check sidebar-setting">
                            <input class="focus:ring-0" type="radio" name="sidebar-size" id="sidebar-size-small" value="small" onchange="document.body.setAttribute('data-sidebar-size', 'sm')">
                            <label class="form-check-label" for="sidebar-size-small">Small (Icon View)</label>
                        </div>
                    </div>

                    <h6 class="mt-4 mb-3 pt-2 sidebar-setting">Sidebar Color</h6>
                    <div class="space-y-1">
                        <div class="form-check sidebar-setting">
                            <input class="focus:ring-0" checked type="radio" name="sidebar-color" id="sidebar-color-light" value="light" onchange="document.body.setAttribute('data-sidebar', 'light')">
                            <label class="form-check-label" for="sidebar-color-light">Light</label>
                        </div>
                        <div class="form-check sidebar-setting">
                            <input class="focus:ring-0" type="radio" name="sidebar-color" id="sidebar-color-dark" value="dark" onchange="document.body.setAttribute('data-sidebar', 'dark')">
                            <label class="form-check-label" for="sidebar-color-dark">Dark</label>
                        </div>
                        <div class="form-check sidebar-setting">
                            <input class="focus:ring-0" type="radio" name="sidebar-color" id="sidebar-color-brand" value="brand" onchange="document.body.setAttribute('data-sidebar', 'brand')">
                            <label class="form-check-label" for="sidebar-color-brand">Brand</label>
                        </div>
                    </div>

                    <h6 class="mt-4 mb-3 pt-2">Direction</h6>
                    <div class="space-y-1">
                        <div>
                            <input class="focus:ring-0" checked type="radio" name="layout-direction" id="layout-direction-ltr" value="ltr">
                            <label class="form-check-label" for="layout-direction-ltr">LTR</label>
                        </div>
                        <div>
                            <input class="focus:ring-0" type="radio" name="layout-direction" id="layout-direction-rtl" value="rtl">
                            <label class="form-check-label" for="layout-direction-rtl">RTL</label>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="main-content ">

            @include('layouts.header')

            @include('layouts.sidebar')

            @yield('content')

            @include('layouts.footer')
            
        </div>
    
        <div class="fixed ltr:right-5 rtl:left-5 bottom-10 flex flex-col gap-3 z-40 animate-bounce">
            <!-- light-dark mode button -->
            <a href="javascript: void(0);" id="ltr-rtl" class="px-3.5 py-4 z-40 text-14 transition-all duration-300 ease-linear text-white bg-violet-500 hover:bg-violet-600 rounded-full font-medium" onclick="changeMode(event)">
                <span class="ltr:hidden">LTR</span>
                <span  class="rtl:hidden">RTL</span>
            </a>  
        </div> 

        @livewireScripts
        
        <script src="assets/libs/@popperjs/core/umd/popper.min.js"></script>
        <script src="assets/libs/feather-icons/feather.min.js"></script>
        <script src="assets/libs/metismenujs/metismenujs.min.js"></script>
        <script src="assets/libs/simplebar/simplebar.min.js"></script>
        <script src="assets/libs/feather-icons/feather.min.js"></script>
        
        
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <!-- apexcharts -->
        <script src="assets/libs/apexcharts/apexcharts.min.js"></script>
        <!-- Plugins js-->
        <script src="assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js"></script>
        <script src="assets/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-world-mill-en.js"></script>
        <!-- dashboard init -->
        <script src="assets/js/pages/dashboard.init.js"></script>
        
        <script src="assets/js/pages/nav&tabs.js"></script>

        <script src="./assets/libs/swiper/swiper-bundle.min.js"></script>
        
        <script src="assets/js/pages/login.init.js"></script>

        <script src="assets/js/app.js"></script>
    </body>
</html>