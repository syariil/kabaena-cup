@extends('layout.master')
@section('title', 'About')

@section('content')

<section class="flex justify-center py-6 md:py-4">
    <div class="w-full md:w-[80%] bg-gray-200 dark:bg-gray-800 py-6 rounded-2xl">
        <h1 class="font-poppins font-bold text-[24px] md:text-[32px] text-gray-900 dark:text-gray-100 uppercase flex justify-center pb-6">
            kabaena <span class="text-red-600"> cup</span>
        </h1>

    <div class="flex md:flex-row flex-col-reverse justify-center items-center">
        <div class="flex flex-col content-center">
            <div class="flex flex-col justify-start px-9 md:px-[120px] ">
                <h2 class="font-poppins font-semibold text-[24px] md:text-[28px] dark:text-gray-200 text-gray-800 capitalize underline underline-offset-8">
                    what is kabena cup?
                </h2>
                <p class="px-6 md:py-2 py-6 font-poppins font-normal text-[16px] dark:text-gray-300 text-gray-700">
                    Kabaena cup adalah sebuah ajang kompetisi kejuaraan game Mobile legend yang berada di Kabaena Timur, Bombana, Sulawesi Tenggara.
                </p>
            </div>
            <div class="flex flex-col justify-start px-9 md:px-[120px]">
                <h2 class="font-poppins font-semibold text-[24px] md:text-[28px] dark:text-gray-200 text-gray-800 capitalize underline underline-offset-8">
                    when the turnament start?
                </h2>
                <p class="px-6 py-2 font-poppins font-normal text-[16px] dark:text-gray-300 text-gray-700 uppercase">
                    Yaaa... Nda Tau! loh kok tanya saya.
                </p>
            </div>
            <div class="flex flex-col justify-start px-9 md:px-[120px]">
                <h2 class="font-poppins font-semibold text-[24px] md:text-[28px] dark:text-gray-200 text-gray-800 capitalize underline underline-offset-8">
                    info
                </h2>
                <div class="px-4 py-2 flex flex-col justify-start">
                    <div class="flex flex-row justify-start">
                        <h4 class="font-poppins font-semibold text-[16px] md:text-[18px] text-gray-700 dark:text-gray-300 flex w-[180px] ">business</h4>
                        <h4 class="font-poppins font-semibold text-[16px] md:text-[18px] text-black  dark:text-white">kabaenacup@gmail.com</h4>
                    </div>
                    <div class="flex flex-row justify-start">
                        <h4 class="font-poppins font-semibold text-[16px] md:text-[18px] text-gray-700 dark:text-gray-300 flex w-[180px] ">youtube</h4>
                        <a href="https://www.youtube.com/@kabaenacupmlbb888" class="font-poppins font-semibold text-[16px] md:text-[18px] text-black dark:text-white dark:hover:text-red-500 hover:text-red-600 hover:border-b-2 border-gray-900 dark:border-gray-100">Kabaena Cup MLBB</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex content-center py-4 mr-0 md:mr-[120px] ml-2 md:ml-0">
            <img src="image/logo.png" alt="logo" class="w-[380px] h-[280px] rounded-xl md:rounded-full">
        </div>
    </div>
</div>
</section>

@endsection
