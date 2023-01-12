@extends('layout.master')
@section('title', $post->title)
@section('content')
    <section class="flex justify-center py-4 ">
        <div class="flex flex-col bg-gray-200 dark:bg-gray-800 w-full md:w-[90%] rounded-xl">
            <div class="flex flex-col justify-center py-4 px-4 border-b-2 border-gray-600 dark:border-gray-400 mb-3">
                <h2 class="font-poppins font-semibold text-[24px] md:text-[28px] text-black dark:text-white uppercase text-center ">
                    {{ $post->title }} 
                </h2>
                <h3 class="font-poppins font-normal text-[14px] md:text-[18px] text-gray-700 dark:text-gray-300 text-center">
                     {{ date('l, d M Y', strtotime($post->created_at)) }} | by : {{ $post->writer }} 
                </h3>
            </div>

            <p class="font-poppins font-normal text-[15px] md:text-[18px] text-gray-700 indent-8 dark:text-gray-300 text-justify px-6 py-9">
                {!! $post->post  !!}
            </p>

            <div class="flex flex-col border-t-2 border-gray-600 dark:border-gray-400">

                <div class="flex flex-col py-3">
                    @foreach ($other as $post)
                    <div class="flex flex-col px-4 border-b-2 border-t-2 border-gray-700 bg-gray-300 dark:bg-gray-700 rounded-xl dark:border-gray-400 w-[90%] md:w-[70%] ml-4 mb-2">
                        <a href=" {{ url('post/'.$post->id) }}">
                            <h2 class="font-poppins font-semibold text-[20px] md:text-[24px] text-gray-900 dark:text-gray-100 capitalize">
                                {{ $post->title }}
                            </h2>
                            <p class="mb-3 font-normal text-gray-800 dark:text-gray-200">
                                {{ $post->short_post }}<span class="text-blue-500">.....continue</span>
                            </p>
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection