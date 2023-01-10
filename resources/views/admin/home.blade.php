@extends('admin.layoutAdmin.master')
@section('title', 'Home')

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
            <table class="w-auto text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="py-3 px-4 md:px-6">
                            id
                        </th>
                        <th scope="col" class="py-3 px-4 md:px-6">
                            Ketua
                        </th>
                        <th scope="col" class="py-3 px-4 md:px-6">
                            Team
                        </th>
                        <th scope="col" class="py-3 px-4 md:px-6">
                            Season
                        </th>
                        <th scope="col" class="py-3 px-4 md:px-6">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $team)
                    <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                        <th scope="row" class="py-4 px-4 md:px-6 ">
                            {{$team->id}}
                        </th>
                        <td class="py-4 px-4 md:px-6 font-medium text-gray-900 dark:text-white">
                            {{$team->Ketua}}
                        </td>
                        <td class="py-4 px-4 md:px-6">
                            {{$team->Team}}
                        </td>
                        <td class="py-4 px-4 md:px-6">
                            {{$team->Season}}
                        </td>
                        <td class="py-4 px-4 md:px-6">
                            <a href="{{ route('admin.edit', $team->id) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                            <form action="{{ route('admin.destroy',$team->id) }}" method="Post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="font-medium text-red-600 dark:text-red-500 hover:underline">Delete</button>
                            </form>
                            <a href="{{ route('admin.show', $team->id) }}" class="font-medium text-green-600 dark:text-green-500 hover:underline">Show</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>



@endsection
