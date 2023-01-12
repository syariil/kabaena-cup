@extends('layout.master')
@section('title', 'home')

@section('content')

<section class="flex justify-center">
    <div class="flex flex-col w-full bg-gray-200 dark:bg-gray-800 rounded-xl">

        <div class="flex flex-col py-4 ml-0 md:ml-4 border-b-2 md:border-b-0 border-black dark:border-white">
            <div class="flex flex-wrap justify-center py-2 w-full">
                @foreach ($new as $post)
                    
                <div class="flex flex-col content-center max-w-full md:max-w-[280px] p-6 bg-white border border-gray-200 rounded-xl shadow-md dark:bg-gray-900 dark:border-gray-700 mr-4 mb-4">
                    <a href=" {{ url('post/'.$post->id) }} ">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $post->title }}</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400"> {{ $post->short_post }} </p>
                    <a href="{{ url('post/'.$post->id) }}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 
                        focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Read more
                        <svg aria-hidden="true" class="w-4 h-4 " fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </a>
                </div>
                @endforeach
            </div>
        </div>

        <div class="flex flex-col border-t-2 border-gray-600 dark:border-gray-400">

            <div class="flex flex-col py-3">
                @foreach ($other as $post)
                <div class="flex flex-col px-4 border-b-2 border-t-2 border-gray-700 bg-gray-300 dark:bg-gray-700 rounded-xl dark:border-gray-400 w-[90%] md:w-[70%] ml-4 mb-2">
                    <a href="{{ url('post/'.$post->id) }}">
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
