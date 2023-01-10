@extends('admin.layoutAdmin.master')
@section('title', 'Registration')

@section('content')

<section class="flex justify-center items-center py-4">
    <div class="flex flex-col justify-center w-full md:w-[90%] py-4 rounded-2xl bg-gray-200 dark:bg-gray-800">
        <div class="flex justify-center py-4 my-4">
            @if ($message = Session::get('success'))
            <div class="text-[42px] text-gray-700 uppercase bg-green-500 rounded-3xl">
                <p>{{ $message }}</p>
            </div>
            @endif
        </div>

        <div class="flex justify-center mt-4">
            <div class="flex justify-center w-full">
                <div class="overflow-x-auto relative shadow-md sm:rounded-lg">
                    <h3 class="font-poppins font-semibold text-[18px] md:text-[28px] text-gray-800 dark:text-gray-200  border-b-2 md:border-b-4 border-gray-800 dark:border-gray-200 mb-4 capitalize">Season
                    </h3>
                    <form method="post" action="{{ route('registration.create') }}">
                        @csrf

                        <!-- data team -->
                        <div class="grid gap-6 mb-6 md:grid-cols-2">
                            <div>
                                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-200"
                                    for="user_avatar">Season</label>
                                    <input name="Season" type="number" id="asal_team"
                                    class="bg-gray-50 dark:bg-gray-900 border border-gray-300 dark:border-gray-700 text-gray-900 dark:text-gray-200 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="2"
                                     required>
                            </div>
                            <div>
                                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-200"
                                    for="user_avatar">status</label>
                                    <input name="status" type="text" id="asal_team"
                                    class="bg-gray-50 dark:bg-gray-900 border border-gray-300 dark:border-gray-700 text-gray-900 dark:text-gray-200 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="active | nonactive"
                                     required>
                            </div>

                        </div>
                        <button type="submit"
                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Submit</button>
                    </form>
                    <table class="w-auto text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="py-3 px-4 md:px-6">
                                    Season
                                </th>
                                <th scope="col" class="py-3 px-4 md:px-6">
                                    status
                                </th>
                                <th scope="col" class="py-3 px-4 md:px-6">
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $registration)
                            <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                                <th scope="row" class="py-4 px-4 md:px-6 ">
                                    {{$registration->Season}}
                                </th>
                            <td>
                                {{ $registration->status }}
                            </td>
                                <td class="py-4 px-4 md:px-6">
                                    <a href="{{ route('registration.edit', $registration->id) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                    <form action="{{ route('registration.delete',$registration->id) }}" method="Post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="font-medium text-red-600 dark:text-red-500 hover:underline">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="flex justify-center mt-4">
            <div class="flex flex-col justify-center">
                <h3 class="font-poppins font-semibold text-[18px] md:text-[28px] text-gray-800 dark:text-gray-200  border-b-2 md:border-b-4 border-gray-800 dark:border-gray-200 mb-3 capitalize">manage grups
                </h3>

                <a href="Registration/grup" class="py-2 px-4 bg-blue-600 items-end w-[75px] rounded-xl font-poppins font-semibold text-[16px] md:text-[20px] text-white uppercase ml-[355px] md:ml-[470px] mb-3">
                    add
                </a>
                <div class="relative shadow-md sm:rounded-lg mb-3 ml-0.5">
                    <table class="w-full text-sm text-center text-gray-500  mb-4">
                        <thead class="text-xs text-gray-700 dark:text-gray-300 uppercase bg-gray-400 dark:bg-gray-600">
                            <tr>
                                <th scope="col" class="py-3 px-1">
                                    Groups
                                </th>
                                <th scope="col" class="py-3 px-1">
                                    Season
                                </th>
                                <th scope="col" class="py-3 px-1 ">
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($grup as $grups)
                            <tr class="bg-gray-100 dark:bg-gray-900 border-b">
                                <th scope="row" class="py-2 font-semibold text-gray-900 dark:text-gray-300 whitespace-nowrap uppercase">
                                    {{ $grups->Groups }}
                                </th>
                                <td class="py-2 font-semibold text-gray-900 dark:text-gray-300">
                                    {{ $grups->Season }}
                                </td>
                                <td class="py-2">
                                    <a href="{{ route('registration.grupEdit', $grups->id) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                    <form action="{{ route('registration.grupDelete', $grups->id) }}" method="post">
                                        @method('delete')
                                        @csrf
                                        <button type="submit" class="font-medium text-red-600 dark:text-red-500 hover:underline">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</section>




@endsection
