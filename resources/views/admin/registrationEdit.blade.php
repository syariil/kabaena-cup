@extends('admin.layoutAdmin.master')
@section('title', 'Registration edit')

@section('content')


<section class="flex justify-center items-center py-4">
    <div class="flex flex-col justify-center w-full md:w-[90%] py-4 rounded-2xl bg-gray-200 dark:bg-gray-800">
        <div class="flex justify-center py-4 my-4">
            <div class="flex justify-center mt-4">
                <div class="flex justify-center w-full">
                    <div class="overflow-x-auto relative shadow-md sm:rounded-lg">
                        <h3 class="font-poppins font-semibold text-[18px] md:text-[28px] text-gray-800 dark:text-gray-200  border-b-2 md:border-b-4 border-gray-800 dark:border-gray-200 mb-4 capitalize">Season {{ $regis->Season }}
                        </h3>
                        <form method="post" action="{{ route('registration.update', $regis->id) }}">
                            @csrf
                            @method('PUT')
                            <!-- data team -->
                            <div class="grid gap-6 mb-6 md:grid-cols-2">
                                {{-- <div>
                                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-200"
                                        for="user_avatar">Season</label>
                                        <input name="Season" type="number" id="asal_team"
                                        class="bg-gray-50 dark:bg-gray-900 border border-gray-300 dark:border-gray-700 text-gray-900 dark:text-gray-200 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" value=" {{ $regis->Season }} "
                                         required>
                                </div> --}}
                                <div>
                                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-200"
                                        for="user_avatar">status</label>
                                        <input name="status" type="text" id="asal_team"
                                        class="bg-gray-50 dark:bg-gray-900 border border-gray-300 dark:border-gray-700 text-gray-900 dark:text-gray-200 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" value=" {{ $regis->status }} "
                                         required>
                                </div>
    
                            </div>
                            <button type="submit"
                                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection