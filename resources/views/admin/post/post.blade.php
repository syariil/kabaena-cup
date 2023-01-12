@extends('admin.layoutAdmin.master')
@section('title', 'post')
@section('content')

<section class="flex justify-center pt-4">
    <div class="flex flex-col w-full md:w-[90%] h-full bg-gray-200 dark:bg-gray-800 rounded-3xl px-4">
        <div class="flex justify-center items-center mt-3">
            <h2 class="font-poppins font-semibold text-[22px] md:text-[28px] text-gray-800 dark:text-gray-200 uppercase">
                Post
            </h2>
        </div>

            <form action="{{ route('post.post') }}" method="post">
                @csrf
                <div class="mb-4">
                    <label for="small-input" class="block mb-2 text-md font-medium text-gray-900 dark:text-white">Title</label>
                    <input type="text" name="title" class="block w-full py-4 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 px-3" placeholder="title">
                </div>
                <div class="mb-4">
                    <label for="small-input" class="block mb-2 text-md font-medium text-gray-900 dark:text-white">post</label>
                    <textarea id="psot" name="post" rows="4" class="w-full py-2 text-sm text-gray-900 bg-gray-50 border rounded-lg dark:bg-gray-700 focus:ring-blue-500 focus:border-blue-500 dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:text-white dark:placeholder-gray-400 px-3 border-gray-300 dark:border-gray-600" placeholder="Write a post..." required>

                    </textarea>
                </div>
                <div class="mb-2">
                    <button type="submit" class="font-poppins font-semibold text-white text-[22px] md:text-[28px] capitalize py-2 px-6 bg-blue-600 rounded-2xl">
                        post
                    </button>
                </div>
                
            </form>

    </div>

</section>

@endsection