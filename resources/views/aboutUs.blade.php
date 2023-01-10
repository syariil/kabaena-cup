@extends('layout.master')
@section('title', 'About Us')

@section('content')
<section class="flex flex-col justify-center items-center relative py-16">

    <div class="w-full flex flex-col items-center sm-mb-16 mb-6 z-[1]">
            <img src="image/black-profile.png" alt="my profile" class="dark:block hidden md:w-[200px] md:h-[200px] w-[240px] h-[240px] rounded-full ">
            <img src="image/white-profile.png" alt="my profile" class="dark:hidden block md:w-[200px] md:h-[200px] w-[240px] h-[240px] rounded-full ">
            <h2 class="font-poppins font-semibold text-[32px] text-gray-900 dark:text-gray-100 align-middle">Muhammad Syahril</h2>
    </div>

    <div class="w-full flex justify-between items-center flex-col sm:mb-16 mb-6">
        @foreach ($data as $datas)
        <div class="flex items-center justify-between">

            <h4 class="{{ $datas->style }} text-left flex-1 w-[12px] mr-[220px]">
                {{ $datas->Asking }}
            </h4>

            @if ($datas->Answer === '@sya_riil')
                <h4 class="{{ $datas->style }} flex-1 w-[12px] mr-[120px] underline hover:text-blue-600">
                    <a href="https://instagram.com/sya_riil">
                        {{ $datas->Answer }}
                    </a>
                </h4>
            @else
                <h4 class="{{ $datas->style }}   flex-1 w-[12px] mr-[120px]">
                    {{ $datas->Answer }}
                </h4>
            @endif
        </div>
        @endforeach
    </div>
</section>
@endsection
