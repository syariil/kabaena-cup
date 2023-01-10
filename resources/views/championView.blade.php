<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ asset('image/logo.png') }}">

    <title>{{ $data->Team }}</title>

    @vite('resources/js/app.js')
    <script src="{{ asset('js/script.js') }}"></script>
    <link rel="stylesheet" href="css/style.css">
</head>

<body class="bg-gray-100 dark:bg-gray-900">



    <!-- navbar -->
    <nav class="bg-white dark:bg-gray-900 border-gray-200 px-2 sm:px-4 py-2.5 rounded ">
        <div class="container flex flex-wrap items-center justify-between mx-auto">
            <div class="flex flex-row">
                <a href="{{ url('/') }}" class="flex items-center mr-2">
                    <img src="{{ url('/image/logo.png') }}" class="h-6 mr-3 sm:h-9 rounded-full" alt="Kabaena cup" />
                    <h2
                        class="self-center text-[28px] text-black dark:text-white font-poppins font-semibold whitespace-nowrap uppercase">Kabaena <span class="text-red-500">Cup</span>
                    </h2>
                </a>

                <button id="theme-toggle" type="button"
                    class="ml-6 px-5 text-gray-500  hover:bg-gray-100 dark:hover:bg-gray-800 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-900 rounded-lg text-sm sidebar">
                    <svg id="theme-toggle-dark-icon" class="hidden w-7 h-7" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                    </svg>
                    <svg id="theme-toggle-light-icon" class="hidden w-7 h-7" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
                            fill-rule="evenodd" clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>

            <button onclick="toggle()" type="button"
                class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 dark:hover:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:focus:ring-gray-800"
                aria-controls="navbar-default" aria-expanded="false">
                <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                        clip-rule="evenodd"></path>
                </svg>
            </button>

            <div class="hidden w-full md:block md:w-auto " id="navbar-default">
                <ul
                    class="flex flex-col p-4 mt-4 border border-gray-100 dark:border-gray-900 rounded-lg bg-gray-50 dark:bg-gray-800 md:flex-row
                md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0
                md:bg-white md:dark:bg-gray-900">

                    <li>
                        <a href="{{ url('/') }}"
                            class="block py-2 pl-3 pr-4  rounded hover:bg-gray-100 dark:hover:bg-gray-700  md:hover:bg-transparent md:border-0 md:hover:text-red-600 md:p-0 md:dark:hover:text-white md:dark:hover:bg-transparent  {{ request()->is('/') ? 'text-red-600 dark:text-red-500' : ' text-gray-900 dark:text-gray-200' }}">Home</a>
                    </li>
                    <li>
                        <a href="{{ url('Competition') }}"
                            class="block py-2 pl-3 pr-4  rounded hover:bg-gray-100 dark:hover:bg-gray-700 md:hover:bg-transparent md:border-0 md:hover:text-red-600 md:p-0 md:dark:hover:text-white md:dark:hover:bg-transparent  {{ request()->is('Competition') ? 'text-red-600 dark:text-red-500' : ' text-gray-900 dark:text-gray-200' }}">Competition</a>
                    </li>
                    <li>
                        <a href="{{ url('Registration') }}"
                            class="block py-2 pl-3 pr-4  rounded hover:bg-gray-100 dark:hover:bg-gray-700 md:hover:bg-transparent md:border-0 md:hover:text-red-600 md:p-0 md:dark:hover:text-white md:dark:hover:bg-transparent  {{ request()->is('Registration') ? 'text-red-600 dark:text-red-500' : ' text-gray-900 dark:text-gray-200' }}">Registration</a>
                    </li>
                    <li>
                        <a href="{{ url('Champion') }}"
                            class="block py-2 pl-3 pr-4  rounded hover:bg-gray-100 dark:hover:bg-gray-700 md:hover:bg-transparent md:border-0 md:hover:text-red-600 md:p-0 md:dark:hover:text-white md:dark:hover:bg-transparent  {{ request()->is('Champion') ? 'text-red-600 dark:text-red-500' : ' text-gray-900 dark:text-gray-200' }}">Champion</a>
                    </li>
                    <li>
                        <a href="{{ url('About') }}"
                            class="block py-2 pl-3 pr-4  rounded hover:bg-gray-100 dark:hover:bg-gray-700 md:hover:bg-transparent md:border-0 md:hover:text-red-600 md:p-0 md:dark:hover:text-white md:dark:hover:bg-transparent  {{ request()->is('About') ? 'text-red-600 dark:text-red-500' : ' text-gray-900 dark:text-gray-200' }}">About</a>
                    </li>
                    <li>
                        <a href="{{ url('AboutUs') }}"
                            class="block py-2 pl-3 pr-4  rounded hover:bg-gray-100 dark:hover:bg-gray-700 md:hover:bg-transparent md:border-0 md:hover:text-red-600 md:p-0 md:dark:hover:text-white md:dark:hover:bg-transparent  {{ request()->is('AboutUs') ? 'text-red-600 dark:text-red-500' : ' text-gray-900 dark:text-gray-200' }}">About
                            Us</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    <!-- content -->
    <div class="flex justify-center">
        <div class="flex flex-col items-center bg-gray-200 dark:bg-gray-800 w-full md:w-[90%] rounded-3xl">
            <img src="{{asset('/image/logo/'.$data->Logo)}}" alt="logo" class="md:w-[250px] w-[190px] h-[190px]   md:h-[250px] rounded-[35%] object-contain py-3 px-6 shadow-md shadow-gray-800 dark:shadow-gray-200 mb-4 mt-4">
            <div class="flex flex-col items-center px-6 border-b-4 border-gray-800 dark:border-gray-200">
                <h1 class="font-poppins font-bold text-[24px] md:text-[36px] text-gray-900 dark:text-gray-100 leading-4 uppercase hover:animate-bounce">
                    {{ $data->Team }}
                </h1>
                <h3 class="font-poppins font-semibold text-[18px] md:text-[20px] text-gray-700 dark:text-gray-300 leading-6 py-3">
                    {{ $data->Kota }}
                </h3>
            </div>

            <div class="flex flex-wrap justify-center items-center mt-8 md:mt-10 mb-3">
                <!-- player 1 -->
                <div class="flex w-[180px] md:w-[260px] flex-col items-center bg-gray-400 dark:bg-gray-600 dark:hover:bg-gray-400 hover:bg-gray-500 rounded-2xl mr-4 mb-4 ml-4 md:ml-2">
                    <img src="{{ asset('/image/role/'.$data->Role.'.jpg') }}" alt="Role" class="w-[230px] md:w-[220px] h-[230px] md:h-[120px] object-contain">
                    <h2 class="font-poppins font-semibold text-[18px] md:text-[24px] text-gray-900 dark:text-gray-200 leading-6  mb-4">
                        {{ $data->Username }}
                    </h2>
                </div>
                <!-- player2 -->
                <div class="flex w-[180px] md:w-[260px] flex-col items-center bg-gray-400 hover:bg-gray-500 dark:bg-gray-600 dark:hover:bg-gray-400 rounded-2xl mr-4 mb-4 ml-4 md:ml-2">
                    <img src="{{ asset('/image/role/'.$data->Role2.'.jpg') }}" alt="Role" class="w-[230px] md:w-[220px] h-[230px] md:h-[120px] object-contain">
                    <h2 class="font-poppins font-semibold text-[18px] md:text-[24px] text-gray-900 dark:text-gray-200 leading-6  mb-4">
                        {{ $data->Username2 }}
                    </h2>
                </div>
                <!-- player 3 -->
                <div class="flex w-[180px] md:w-[260px] flex-col items-center bg-gray-400 hover:bg-gray-500 dark:bg-gray-600 dark:hover:bg-gray-400 rounded-2xl mr-4 mb-4 ml-4 md:ml-2">
                    <img src="{{ asset('/image/role/'.$data->Role3.'.jpg') }}" alt="Role" class="w-[230px] md:w-[220px] h-[230px] md:h-[120px] object-contain">
                    <h2 class="font-poppins font-semibold text-[18px] md:text-[24px] text-gray-900 dark:text-gray-200 leading-6  mb-4">
                        {{ $data->Username3 }}
                    </h2>
                </div>
                <!-- player 4 -->
                <div class="flex w-[180px] md:w-[260px] flex-col items-center bg-gray-400 hover:bg-gray-500 dark:bg-gray-600 dark:hover:bg-gray-400 rounded-2xl mr-4 mb-4 ml-4 md:ml-2">
                    <img src="{{ asset('/image/role/'.$data->Role4.'.jpg') }}" alt="Role" class="w-[230px] md:w-[220px] h-[230px] md:h-[120px] object-contain">
                    <h2 class="font-poppins font-semibold text-[18px] md:text-[24px] text-gray-900 dark:text-gray-200 leading-6  mb-4">
                        {{ $data->Username4 }}
                    </h2>
                </div>
                <!-- player 5 -->
                <div class="flex w-[180px] md:w-[260px] flex-col items-center bg-gray-400 hover:bg-gray-500 dark:bg-gray-600 dark:hover:bg-gray-400 rounded-2xl mr-4 mb-4 ml-4 md:ml-2">
                    <img src="{{ asset('/image/role/'.$data->Role5.'.jpg') }}" alt="Role" class="w-[230px] md:w-[220px] h-[230px] md:h-[120px] object-contain">
                    <h2 class="font-poppins font-semibold text-[18px] md:text-[24px] text-gray-900 dark:text-gray-200 leading-6  mb-4">
                        {{ $data->Username5 }}
                    </h2>
                </div>
                @if($data->Username6)
                <div class="flex w-[180px] md:w-[260px] flex-col items-center bg-gray-400 hover:bg-gray-500 dark:bg-gray-600 dark:hover:bg-gray-400 rounded-2xl mr-4 mb-4 ml-4 md:ml-2">
                    <img src="{{ asset('/image/role/'.$data->Role6.'.jpg') }}" alt="Role" class="w-[230px] md:w-[220px] h-[230px] md:h-[120px] object-contain">
                    <h2 class="font-poppins font-semibold text-[18px] md:text-[24px] text-gray-900 dark:text-gray-200 leading-6  mb-4">
                        {{ $data->Username6 }}
                    </h2>
                </div>
                @endif
            </div>
        </div>

    </div>



