<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8" />
    <title>Login - Admin & Dashboard Template</title>
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
    <link rel="shortcut icon" href="assets/images/favicon.ico" />


   <link rel="stylesheet" href="./assets/libs/swiper/swiper-bundle.min.css">


    <link rel="stylesheet" href="assets/css/icons.css" />
    <link rel="stylesheet" href="assets/css/tailwind.css" />



</head>
    
<body data-mode="light" data-sidebar-size="lg">


   
    <div class="container-fluid">
        <div class="h-screen md:overflow-hidden">
            <div class="grid grid-cols-1 md:grid-cols-12 ">
                <div class="col-span-12 md:col-span-5 lg:col-span-4 xl:col-span-3 relative z-50">
                    <div class="w-full bg-white xl:p-12 p-10 dark:bg-zinc-800">
                        <div class="flex h-[90vh] flex-col">
                                <div class="mx-auto">
                                <a href="index.html" class="">
                                    <img src="assets/images/logo-sm.svg" alt="" class="h-8 inline"> <span class="text-xl align-middle font-medium ltr:ml-2 rtl:mr-2 dark:text-white">Minia</span>
                                </a>
                            </div>

                            <div class="my-auto">
                                <div class="text-center">
                                    <h5 class="text-gray-600 dark:text-gray-100">Welcome Back !</h5>
                                    <p class="text-gray-500 dark:text-gray-100/60 mt-1">Sign in to continue to Minia.</p>
                                </div>

                                <form class="mt-4 pt-2" method="POST" action="{{ route('login') }}">
                                        @csrf

                                    <div>
                                        <x-input-label for="email" :value="__('Email')" />
                                        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                    </div>

                                    <!-- Password -->
                                    <div class="mt-4">
                                        <x-input-label for="password" :value="__('Password')" />

                                        <x-text-input id="password" class="block mt-1 w-full"
                                                        type="password"
                                                        name="password"
                                                        required autocomplete="current-password" />

                                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                    </div>

                                    <!-- Remember Me -->
                                    <div class="block mt-4">
                                        <label for="remember_me" class="inline-flex items-center">
                                            <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                                            <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                                        </label>
                                    </div>

                                    <div class="flex items-center justify-end mt-4 mr-2">
                                        @if (Route::has('password.request'))
                                            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 mr-2" href="{{ route('password.request') }}">
                                                {{ __('Forgot your password?') }}
                                            </a>
                                        @endif

                                        <x-primary-button class="ms-3">
                                            {{ __('Log in') }}
                                        </x-primary-button>
                                    </div>
                                </form>

                                {{-- <div class="mt-4 pt-2 text-center">
                                    <div>
                                        <h6 class="text-14 mb-3 text-gray-500 dark:text-gray-100 font-medium">- Sign in with -</h6>
                                    </div>

                                    <div class="flex justify-center gap-3">
                                        <a href="" class="h-9 w-9 bg-violet-500 leading-[2.9] rounded-full">
                                            <i class="mdi mdi-facebook text-lg text-white"></i>
                                        </a>
                                        <a href="" class="h-9 w-9 bg-sky-500 leading-[2.9] rounded-full">
                                            <i class="mdi mdi-twitter text-lg text-white"></i>
                                        </a>
                                        <a href="" class="h-9 w-9 bg-red-400 leading-[2.9] rounded-full">
                                            <i class="mdi mdi-google text-lg text-white"></i>
                                        </a>
                                    </div>
                                </div> --}}

                                <div class="mt-12 text-center">
                                    <p class="text-gray-500 dark:text-gray-100">Don't have an account ? <a href="{{ route('register') }}" class="text-violet-500 font-semibold"> Signup now </a> </p>
                                </div>
                            </div>

                            
                            <div class=" text-center">
                                <p class="text-gray-500 dark:text-gray-100 relative mb-5">© <script>document.write(new Date().getFullYear())</script> Minia . Crafted with <i class="mdi mdi-heart text-red-400"></i> by Themesbrand</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-span-12 md:col-span-7 lg:col-span-8 xl:col-span-9">
                    <div class="h-screen bg-cover relative p-5 bg-[url('../images/auth-bg.jpg')]">
                        <div class="absolute inset-0 bg-violet-500/90"></div>

                        <ul class="bg-bubbles absolute top-0 left-0 w-full h-full overflow-hidden animate-square">
                            <li class="h-10 w-10 rounded-3xl bg-white/10 absolute left-[10%] "></li>
                            <li class="h-28 w-28 rounded-3xl bg-white/10 absolute left-[20%]"></li>
                            <li class="h-10 w-10 rounded-3xl bg-white/10 absolute left-[25%]"></li>
                            <li class="h-20 w-20 rounded-3xl bg-white/10 absolute left-[40%]"></li>
                            <li class="h-24 w-24 rounded-3xl bg-white/10 absolute left-[70%]"></li>
                            <li class="h-32 w-32 rounded-3xl bg-white/10 absolute left-[70%]"></li>
                            <li class="h-36 w-36 rounded-3xl bg-white/10 absolute left-[32%]"></li>
                            <li class="h-20 w-20 rounded-3xl bg-white/10 absolute left-[55%]"></li>
                            <li class="h-12 w-12 rounded-3xl bg-white/10 absolute left-[25%]"></li>
                            <li class="h-36 w-36 rounded-3xl bg-white/10 absolute left-[90%]"></li>
                        </ul>

                        <div class="grid grid-cols-12 content-center h-screen">
                            <div class="col-span-8 col-start-3">
                                <div class="swiper login-slider">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <i class="bx bxs-quote-alt-left text-green-600 text-5xl"></i>
                                                <h3 class="mt-4 text-white text-22">“I feel confident imposing change on myself. It's a lot more progressing fun than looking back. That's why I ultricies enim at malesuada nibh diam on tortor neaded to throw curve balls.”</h3>
                                                <div class="flex mt-6 mb-10 pt-4">
                                                    <img src="assets/images/users/avatar-1.jpg" class="h-12 w-12 rounded-full" alt="...">
                                                    <div class="flex-1 ltr:ml-3 rtl:mr-2 mb-4">
                                                        <h5 class="font-size-18 text-white">Ilse R. Eaton</h5>
                                                        <p class="mb-0 text-white/50">Manager
                                                        </p>
                                                    </div>
                                                </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <i class="bx bxs-quote-alt-left text-green-600 text-5xl"></i>
                                                <h3 class="mt-4 text-white text-22">“I feel confident imposing change on myself. It's a lot more progressing fun than looking back. That's why I ultricies enim at malesuada nibh diam on tortor neaded to throw curve balls.”</h3>
                                                <div class="flex mt-6 mb-10 pt-4">
                                                    <img src="assets/images/users/avatar-2.jpg" class="h-12 w-12 rounded-full" alt="...">
                                                    <div class="flex-1 ltr:ml-3 rtl:mr-2 mb-4">
                                                        <h5 class="font-size-18 text-white">Mariya Willam</h5>
                                                        <p class="mb-0 text-white/50">Designer
                                                        </p>
                                                    </div>
                                                </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <i class="bx bxs-quote-alt-left text-green-600 text-5xl"></i>
                                                <h3 class="mt-4 text-white text-22">“I feel confident imposing change on myself. It's a lot more progressing fun than looking back. That's why I ultricies enim at malesuada nibh diam on tortor neaded to throw curve balls.”</h3>
                                                <div class="flex mt-6 mb-10 pt-4">
                                                    <img src="assets/images/users/avatar-3.jpg" class="h-12 w-12 rounded-full" alt="...">
                                                    <div class="flex-1 ltr:ml-3 rtl:mr-2 mb-4">
                                                        <h5 class="font-size-18 text-white">Jiya Jons</h5>
                                                        <p class="mb-0 text-white/50">Developer
                                                        </p>
                                                    </div>
                                                </div>
                                        </div>
                                    </div>
                                    <div class="swiper-pagination"></div>
                                </div>

                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

        
    
        <div class="fixed ltr:right-5 rtl:left-5 bottom-10 flex flex-col gap-3 z-40 animate-bounce">
            <!-- light-dark mode button -->
            <a href="javascript: void(0);" id="ltr-rtl" class="px-3.5 py-4 z-40 text-14 transition-all duration-300 ease-linear text-white bg-violet-500 hover:bg-violet-600 rounded-full font-medium" onclick="changeMode(event)">
                <span class="ltr:hidden">LTR</span>
                <span  class="rtl:hidden">RTL</span>
            </a>  
        </div> 

    <script src="assets/libs/@popperjs/core/umd/popper.min.js"></script>
    <script src="assets/libs/feather-icons/feather.min.js"></script>
    <script src="assets/libs/metismenujs/metismenujs.min.js"></script>
    <script src="assets/libs/simplebar/simplebar.min.js"></script>
    <script src="assets/libs/feather-icons/feather.min.js"></script>

    <script src="./assets/libs/swiper/swiper-bundle.min.js"></script>
    
    <script src="assets/js/pages/login.init.js"></script>

    <script src="assets/js/app.js"></script>
</body>

</html>