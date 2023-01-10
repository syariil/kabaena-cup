@extends('layout.master')
@section('title', 'Champion')

@section('content')
    <section class="flex justify-center ">
        <div class="flex justify-center  flex-wrap w-full md:w-[80%]  px-0 md:px-6 bg-gray-200 dark:bg-gray-800 rounded-2xl">
            @foreach ($data as $dt)
                <div
                    class="flex justify-center flex-col px-6 md:px-10 py-12 rounded-[20px] min-w-[350px] sm:min-w-[250px] max-h-[250px] mx-0 md:mx-6 my-5 border-2 ml-3 md:ml-0 border-gray-900 dark:border-gray-100 bg-gray-300 dark:bg-gray-700">
                    <p
                        class="font-poppins text-gray-900 dark:text-gray-200 text-[26px] md:text-[32px] my-5 leading-[32px] font-bold uppercase ">
                        seasson {{ $dt->Season }}
                    </p>
                    <div class="flex flex-row ">
                        <img src="image/logo/{{ $dt->Logo }}" alt="image" class="w-[48px] h-[48px] rounded-full" />
                        <div class="flex flex-col ml-5">
                            <h4
                                class="font-poppins text-gray-900 dark:text-gray-200 text-[18px] md:text-[20px] leading-[32px] font-semibold uppercase">
                                {{ $dt->Team }}</h4>
                            <p
                                class="font-poppins text-gray-900 dark:text-gray-200 text-[12px] md:text-[16px]  leading-[26px] font-normal uppercase">
                                {{ $dt->Kota }}</p>
                        </div>
                    </div>
                    <div class="py-8">
                        <a href="/Champion/{{ $dt->id }}"
                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center uppercase font-poppins">
                            view
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@endsection
