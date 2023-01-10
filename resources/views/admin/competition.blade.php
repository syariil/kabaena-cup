@extends('admin.layoutAdmin.master')
@section('title', 'Competition')

@section('content')
    <section class="flex justify-center items-center py-4">
        <div class="flex justify-center w-full md:w-[90%] py-4 rounded-2xl">



            <div class="flex flex-col bg-gray-300 dark:bg-gray-700 py-6 ml-0 md:ml-5 rounded-3xl border-b-2 border-gray-800 dark:border-gray-200">
                @if ($message = Session::get('success'))
            <div class="font-poppins font-normal text-[22px] md:text-[32px] text-gray-700 uppercase bg-green-500 rounded-3xl">
                <p>{{ $message }}</p>
            </div>
            @endif
                <!-- jadwal -->
                <h2 class="font-poppins font-semibold text-[18px] md:text-[32px] text-black dark:text-white py-4 border-b-4 border-gray-800 dark:border-gray-200 ml-3 md:ml-2">
                    Manage jadwal
                </h2>
                <div class="flex justify-center mt-4">
                    <div class="flex flex-col justify-center">
                        <h3 class="font-poppins font-semibold text-[18px] md:text-[28px] text-gray-800 dark:text-gray-200  ml-8 md:ml-0">
                        </h3>

                        <a href="/admin/jadwal" class="py-2 px-4 bg-blue-600 items-end w-[75px] mb-2 rounded-xl font-poppins font-semibold text-[16px] md:text-[20px] text-white uppercase ml-[355px] md:ml-[470px]">
                            add
                        </a>
                        <div class="relative shadow-md sm:rounded-lg mb-3 ml-0.5">
                            <table class="w-full text-sm text-left text-gray-500  mb-4">
                                <thead class="text-xs text-gray-700 dark:text-gray-300 uppercase bg-gray-400 dark:bg-gray-600">
                                    <tr>
                                        <th scope="col" class="py-3 px-1 md:px-3">
                                            id team A
                                        </th>
                                        <th scope="col" class="py-3 px-1 md:px-3">
                                            id Team B
                                        </th>
                                        <th scope="col" class="py-3 px-1 md:px-3">
                                            Score A
                                        </th>
                                        <th scope="col" class="py-3 px-1 md:px-3">
                                            Score B
                                        </th>
                                        <th scope="col" class="py-3 px-1 md:px-3">
                                            Tanggal
                                        </th>
                                        <th scope="col" class="py-3 px-1 md:px-3">
                                            Main
                                        </th>
                                        <th scope="col" class="py-3  md:px-3">
                                            Action
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($jadwal as $jadwals)
                                    <tr class="bg-gray-100 dark:bg-gray-900 border-b">
                                        <th scope="row" class="py-4 px-3 md:px-6 font-semibold text-gray-900 dark:text-gray-300 whitespace-nowrap uppercase">
                                            {{ $jadwals->teamA_id }}
                                        </th>
                                        <td class="py-4 px-1 md:px-3 font-semibold text-gray-900 dark:text-gray-300">
                                            {{ $jadwals->teamB_id }}
                                        </td>
                                        <td class="py-4 px-1 md:px-3 font-semibold text-gray-900 dark:text-gray-300">
                                            {{ $jadwals->ScoreA }}
                                        </td>
                                        <td class="py-4 px-1 md:px-3 font-semibold text-gray-900 dark:text-gray-300">
                                            {{ $jadwals->ScoreB }}
                                        </td>
                                        <td class="py-4 px-1 md:px-3 ">
                                            {{ $jadwals->tanggal }}
                                        </td>
                                        <td class="py-4 px-1 md:px-3 ">
                                            {{ $jadwals->main }}
                                        </td>
                                        <td class="py-4 md:px-3">
                                            <a href="{{ route('jadwal.edit', $jadwals->id) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>


                <!-- group -->
                <h2 class="font-poppins font-semibold text-[18px] md:text-[32px] text-black dark:text-white py-4 border-b-4 border-gray-800 dark:border-gray-200 mb-4 ml-3 md:ml-2">
                    Manage group
                </h2>
                <div class="flex justify-center mt-4">
                    <div class="flex flex-col justify-center">
                    @foreach($grup as $g)
                        <h3 class="font-poppins font-semibold text-[18px] md:text-[28px] text-gray-800 dark:text-gray-200 mb-2 ml-8 md:ml-0">
                            {{ $g->Groups }}
                        </h3>

                        <div class="relative shadow-md sm:rounded-lg mb-3 ml-0.5">
                            <table class="w-full text-sm text-left text-gray-500  mb-4">
                                <thead class="text-xs text-gray-700 dark:text-gray-300 uppercase bg-gray-400 dark:bg-gray-600">
                                    <tr>
                                        <th scope="col" class="py-3 px-1 md:px-3">
                                            Team
                                        </th>
                                        <th scope="col" class="py-3 px-1 md:px-3">
                                            Win
                                        </th>
                                        <th scope="col" class="py-3 px-1 md:px-3">
                                            Lose
                                        </th>
                                        <th scope="col" class="py-3 px-1 md:px-3">
                                            WR
                                        </th>
                                        <th scope="col" class="py-3 px-1 md:px-3">
                                            Points
                                        </th>
                                        <th scope="col" class="py-3 px-1 md:px-3">
                                            Match
                                        </th>
                                        <th scope="col" class="py-3  md:px-3">
                                            Action
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($groups as $grup)
                                        @if($grup->Groups == $g->Groups)
                                    <tr class="bg-gray-100 dark:bg-gray-900 border-b">
                                        <th scope="row" class="py-4 px-3 md:px-6 font-semibold text-gray-900 dark:text-gray-300 whitespace-nowrap uppercase">
                                            {{ $grup->Team }}
                                        </th>
                                        <td class="py-4 px-1 md:px-3">
                                            {{ $grup->Win }}
                                        </td>
                                        <td class="py-4 px-1 md:px-3">
                                            {{ $grup->Lose }}
                                        </td>
                                        <td class="py-4 px-1 md:px-3">
                                            {{ $grup->Winrate }}%
                                        </td>
                                        <td class="py-4 px-1 md:px-3">
                                            {{ $grup->Points }}
                                        </td>
                                        <td class="py-4 px-1 md:px-3">
                                            {{ $grup->Playing }}
                                        </td>
                                        <td class="py-4 md:px-3">
                                            <a href="{{ route('group.edit', $grup->id) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                        </td>
                                    </tr>
                                        @endif
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                    @endforeach
                    </div>
                </div>
            </div>

            <!-- table grup -->


        </div>
    </section>
@endsection
