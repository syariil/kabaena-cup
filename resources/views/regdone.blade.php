@extends('layout.master')
@section('title', 'done')

@section('content')

    @if ($data = Session::get('success'))
        <div class="flex justify-center items-center w-full h-full bg-gray-200 dark:bg-gray-800 px-4 md:px-0">
            <h2 class="font-poppins font-semibold text-[24px] text-gray-900 dark:text-gray-200 capitalize">
                Congratiolation {{ $data }}... team anda telah terdaftar <br class="hidden md:block">
                di turnament kabaena cup <br class="hidden md:block">
                Selamat berjuang...
                <br class="hidden md:block">
            </h2>
        </div>
    @else
        <div class="flex justify-center items-center w-full h-full bg-gray-200  dark:bg-gray-800 px-4 md:px-0">
            <h2 class="font-poppins font-normal text-[32px] text-gray-900 dark:text-gray-200 uppercase">
                404 | not found
            </h2>
        </div>
    @endif


@endsection
