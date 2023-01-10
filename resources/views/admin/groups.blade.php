@extends('admin.layoutAdmin.master')
@section('title', 'Grup')

@section('content')
<div class="flex justify-center mt-4">
    <section class="flex justify-center mt-4">
        <div class="flex flex-col w-full items-center bg-gray-200 dark:bg-gray-800 pt-9 rounded-xl">
            <div class="flex flex-col justify-center px-8">
                <form method="post" action="{{ route('registration.grupCreate') }}">
                    @csrf

                    <!-- data team -->
                    <div class="grid gap-6 mb-6 md:grid-cols-2">
                        <div>
                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-200"
                                for="user_avatar">Groups</label>
                                <input name="Groups" type="text" id="asal_team"
                                class="bg-gray-50 dark:bg-gray-900 border border-gray-300 dark:border-gray-700 text-gray-900 dark:text-gray-200 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Group A"
                                    required>
                        </div>
                        <div>
                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-200"
                                for="user_avatar">Season</label>
                                <input name="Season" type="number" id="asal_team"
                                class="bg-gray-50 dark:bg-gray-900 border border-gray-300 dark:border-gray-700 text-gray-900 dark:text-gray-200 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="1"
                                    required>
                        </div>

                    </div>
                    <button type="submit"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Submit</button>
                </form>
            </div>
        </div>
    </section>
</div>

@endsection
