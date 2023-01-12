<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ asset('image/logo.png') }}">

    <title>Login</title>

    @vite('resources/js/app.js')
    <script src="js/script.js"></script>
    <link rel="stylesheet" href="css/style.css">
</head>

<body class="bg-white-gardient">
    <div class="flex justify-center w-full h-full md:h-auto items-center bg-gray-300 dark:bg-gray-700 ">
        <section class="bg-gray-50 dark:bg-gray-900 rounded-3xl w-full md:w-[50%] h-auto px-8 py-5 md:py-0">

            <div class="flex flex-col items-center justify-center  mx-auto md:h-screen">
                <a href="{{ url('Competition') }}"
                    class="flex items-center mb-6 text-[36px] md:text-[42px] font-bold font-poppins text-gray-900 dark:text-gray-100 uppercase">
                    kabaena <span class="text-red-600">cup</span>
                </a>
                <div class="w-full bg-gray-200 dark:bg-gray-800 shadow md:mt-0 sm:max-w-md xl:p-0 rounded-3xl">
                    <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                        <form class="space-y-4 md:space-y-6" action="{{ route('login.action') }}" method="post">
                            {{ csrf_field() }}
                            <div>
                                <label for="username"
                                    class="block mb-2 text-[20px] md:text-[24px] font-medium text-gray-900 dark:text-gray-100">Username</label>
                                <input type="username" name="username" id="username"
                                    class="bg-gray-50 dark:bg-gray-900 border border-gray-300 dark:border-gray-700 text-gray-900 dark:text-gray-100 text-[18px] md:text-[24px] rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                                    placeholder="Username" required>
                            </div>
                            <div>
                                <label for="password"
                                    class="block mb-2 text-[20px] md:text-[24px] font-medium text-gray-900 dark:text-gray-100">Password</label>
                                <input type="password" name="password" id="password" placeholder="••••••••"
                                    class="bg-gray-50 dark:bg-gray-900 border border-gray-300 dark:border-gray-700 text-gray-900 dark:text-gray-100 text-[18px] md:text-[24px] rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                                    required>
                            </div>
                            <div class="flex justify-center py-4 my-4">
                                @if ($message = Session::get('success'))
                                <div class="text-[22px] text-gray-700 dark:text-gray-300 capitalize bg-red-500 rounded-xl">
                                    <p>{{ $message }}</p>
                                </div>
                                @endif
                            </div>
                            <button type="submit"
                                class="w-full text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-[20px] md:text-[24px] px-5 py-2.5 text-center">Log in</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
