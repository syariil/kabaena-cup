@extends('admin.layoutAdmin.master')
@section('title', 'Champion')

@section('content')

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
            <form method="post" action="{{ route('champion.add') }}">
                @csrf

                <!-- data team -->
                <div class="grid gap-6 mb-6 md:grid-cols-2">
                    <div>
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-200"
                            for="user_avatar">id Team</label>
                            <input name="team_id" type="number" id="asal_team"
                            class="bg-gray-50 dark:bg-gray-900 border border-gray-300 dark:border-gray-700 text-gray-900 dark:text-gray-200 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
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
                            Team
                        </th>
                        <th scope="col" class="py-3 px-4 md:px-6">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $champion)
                    <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                        <th scope="row" class="py-4 px-4 md:px-6 ">
                            {{$champion->Team}}
                        </th>
                        <td class="py-4 px-4 md:px-6">
                            <a href="{{ route('champion.edit', $champion->id) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                            <form action="{{ route('champion.delete',$champion->id) }}" method="Post">
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



@endsection
