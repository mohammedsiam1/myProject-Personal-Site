<!DOCTYPE html>
<html dir="rtl" >
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- TAILWIND CSS -->
   @include('pagesDash.links')
    <!-- ALPINE JS -->
<title>لوحة الادمن</title>
</head>
<body class="antialiased bg-gray-100">
    <div class="flex relative" x-data="{navOpen: false}">
        <!-- NAV -->
        <nav  style="background: rgba(0, 0, 0, 0.863)" class="absolute md:relative w-64 transform -translate-x-full md:translate-x-0 h-screen overflow-y-scroll bg-black transition-all duration-300"
        :class="{'-translate-x-full': !navOpen}">
            <div class="flex flex-col justify-between h-full">
                <div class="p-4">
                    <!-- LOGO -->
                    <a class="flex items-center text-white space-x-4" href="">
                        <span class="text-2xl font-bold">صفحة ادارة الموقع</span>
                    </a>

                    <!-- SEARCH BAR -->
                    <div class="border-gray-700 py-5 text-white border-b rounded">
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-2">
                                <svg class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                            </div>
                            <form action="">
                                <input type="search" class="w-full py-2 rounded pl-10 bg-gray-800 border-none focus:outline-none focus:ring-0" placeholder="بحث">
                            </form>
                        </div>
                        <!-- SEARCH RESULT -->
                    </div>

                    <!-- NAV LINKS -->
                    <div class="py-4 text-gray-400 space-y-1">
                        <!-- BASIC LINK -->
                        <a href="" class="block py-2.5 px-4 flex items-center space-x-2 bg-gray-800 text-white hover:bg-gray-800 hover:text-white rounded">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 8v8m-4-5v5m-4-2v2m-2 4h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                            <span>ادارة الادمن</span>
                        </a>
                        <!-- DROPDOWN LINK -->
                        <div class="block" x-data="{open: false}">
                            <ul class="menu">
            @foreach ($alllinks['data'] as $linke)
            <li class=" nav-item start">
                <a href="" id_link={{ $linke->id }} class="linkClickNow nav-link nav-toggle">
                    <span
           class="title block py-2.5 px-4 flex items-center space-x-2 bg-gray-800 text-white hover:bg-gray-800 hover:text-white rounded">{{ $linke->linksName }} </span>

                    <span class="menu-arrow"></span>
                </a>

                <ul class="sub-menu" style="text-align: center;">
                    <div class="resultlink" style="text-align: center;">


                    </div>
                </ul>
            </li>
            <br>
        @endforeach
                            </ul>
                        </div>
                    </div>
                    @include('pagesDash.CallLinks')
                </div>
                <!-- PROFILE -->
                <div class="text-gray-200 border-gray-800 rounded flex items-center justify-between p-2">

                    <a onclick="event.preventDefault(); document.getElementById('logoutForm').submit()" href="#" class="hover:bg-gray-800 hover:text-white p-2 rounded">
                        <form id="logoutForm" action="" method="POST"></form>
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path></svg>
                        </form>
                    </a>
                </div>
            </div>
        </nav>
        <!-- END OF NAV -->

        <!-- PAGE CONTENT -->
        <main class="flex-1 h-screen overflow-y-scroll overflow-x-hidden">
            <div class="md:hidden justify-between items-center bg-black text-white flex">
                <button @click="navOpen = !navOpen" class="btn p-4 focus:outline-none hover:bg-gray-800">
                    <svg class="w-6 h-6 fill-current" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path></svg>
                </button>
            </div>
            <section class="max-w-7xl mx-auto py-4 px-5">
                <div class="flex justify-between items-center border-b border-gray-300">
                    <h1 class="text-2xl font-semibold pt-2 pb-6">الادارة</h1>

                </div>
                <div class="social-container">
                    @if (Session::has('sucsess'))
                <div style="background: #3bc90385; font-weight: bold;text-align: center;
                align-items: center;" class="alert alert-success" role="alert">
                    {{ Session::get('sucsess') }}
                </div>
                @endif

                  </div>


                <!-- STATISTICS -->
            @include('pagesDash.statistcs')
                <!-- END OF STATISTICS -->

                <!-- TABLE -->
             @include('pagesDash.table')
                </div>
                <!-- END OF TABLE -->


            </section>
            <!-- END OF PAGE CONTENT -->
        </main>
    </div>
    @include('pagesDash.scripts')
</body>
</html>
