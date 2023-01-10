@extends('layout.master')
@section('title', 'Competition')

@section('content')

<div class="flex justify-center py-4">
    <div class="flex flex-col justify-center w-full md:w-[90%] bg-gray-200 dark:bg-gray-800 rounded-2xl">

        <!-- jadwal -->
        <div  class="flex justify-center w-full py-4">
            <h1 class="font-poppins font-semibold text-[34px] text-gray-800 dark:text-gray-200 uppercase border-b-4 border-gray-900 dark:border-gray-200">
                Jadwal
            </h1>
        </div>
        <!-- full -->
        <div class="flex justify-center ">
            <!-- jadwal  -->
            <div class="flex flex-col justify-center items-center w-[510px] h-auto py-4">
                @foreach($jadwal as $jadwals)
                <div class="flex justify-between mb-4 bg-gray-300 dark:bg-gray-700 rounded-xl w-[510px]">
                    <div class="flex flex-col w-[510px] mt-3 items-center">
                        <img src="{{ asset('image/logo/'.$jadwals->logoA) }}" alt="logo" class="w-[50px] md:w-[75px] h-[50px] md:h-[75px] rounded-full mb-2">
                        <h2 class="font-poppins font-semibold text-[14px] md:text-[16px] text-gray-800 dark:text-gray-200 capitalize">
                            {{ $jadwals->teamA }}
                        </h2>
                    </div>

                    <div class="flex flex-col w-[350px] justify-center ml-4">
                        <h2 class="font-poppins font-semibold text-[24px] text-gray-800 dark:text-gray-200 capitalize mt-4 ml-2">
                            <span class="ml-4"> {{ $jadwals->ScoreA }} </span>
                            <span class="ml-4">:</span>
                            <span class="ml-4">{{ $jadwals->ScoreB }}</span>
                        </h2>
                        <h4 class="font-poppins font-normal text-[13px] text-gray-800 dark:text-gray-200 capitalize mt-4 ml-4">
                            {{ $jadwals->tanggal }}
                        </h4>
                        <h4 class="font-poppins font-normal text-[13px] text-gray-800 dark:text-gray-200 capitalize ml-5">
                            {{ $jadwals->main }} WITA
                        </h4>
                    </div>

                    <div class="flex flex-col mt-3 w-[510px] items-center">
                        <img src="{{ asset('image/logo/'.$jadwals->logoB) }}" alt="logo" class="w-[50px] md:w-[75px] h-[50px] md:h-[75px] rounded-full mb-2">
                        <h2 class="font-poppins font-semibold text-[14px] md:text-[16px] text-gray-800 dark:text-gray-200 capitalize">
                            {{ $jadwals->teamB }}
                        </h2>
                    </div>
                </div>
                @endforeach

            </div>
        </div>


        <!-- standing -->
        <div class="" id='grup'>

            <div  class="flex justify-center w-full">
                <h1 class="font-poppins font-semibold text-[34px] text-gray-800 dark:text-gray-200 uppercase border-b-4 dark:border-gray-100 border-gray-900">
                    standing
                </h1>
            </div>
            <!-- table -->
            <div class="flex justify-center">
                <div class="flex flex-col justify-center">
                @foreach($data as $g)
                    <h3 class="font-poppins font-semibold text-[22px] md:text-[28px] text-gray-800 dark:text-gray-200 mb-2 ml-3 md:ml-0">
                        {{ $g->Groups }}
                    </h3>

                    <div class="relative shadow-md sm:rounded-lg mb-3">
                        <table class="w-full text-sm text-left text-gray-500  mb-4">
                            <thead class="text-xs text-gray-700 dark:text-gray-300 uppercase bg-gray-300 dark:bg-gray-700">
                                <tr>
                                    <th scope="col" class="py-3 px-2 md:px-3">
                                        Team
                                    </th>
                                    <th scope="col" class="py-3 px-2 md:px-3">
                                        Win
                                    </th>
                                    <th scope="col" class="py-3 px-2 md:px-3">
                                        Lose
                                    </th>
                                    <th scope="col" class="py-3 px-2 md:px-3">
                                        Winrate
                                    </th>
                                    <th scope="col" class="py-3 px-2 md:px-3">
                                        Points
                                    </th>
                                    <th scope="col" class="py-3 px-2 md:px-3">
                                        Match
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($grups as $grup)
                                    @if($grup->Groups == $g->Groups)
                                <tr class="bg-gray-100 dark:bg-gray-900 border-b">
                                    <th scope="row" class="py-4 px-3 md:px-6 font-semibold text-gray-900 dark:text-gray-300 whitespace-nowrap uppercase">
                                        {{ $grup->Team }}
                                    </th>
                                    <td class="py-4 px-2 md:px-3">
                                        {{ $grup->Win }}
                                    </td>
                                    <td class="py-4 px-2 md:px-3">
                                        {{ $grup->Lose }}
                                    </td>
                                    <td class="py-4 px-2 md:px-3">
                                        {{ $grup->Winrate }}%
                                    </td>
                                    <td class="py-4 px-2 md:px-3">
                                        {{ $grup->Points }}
                                    </td>
                                    <td class="py-4 px-2 md:px-3">
                                        {{ $grup->Playing }}
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

        <!-- bracket -->
        <div class="flex flex-col justify-center items-center py-4">
            <h1 class="font-poppins font-semibold text-[34px] text-gray-800 dark:text-gray-200 uppercase border-b-4 border-gray-900 dark:border-gray-100">
                bracket
            </h1>
            <img src="image/bracket.jpeg" alt="bracket" class="w-[720px] h-[510px] rounded-xl object-contain mt-4">
        </div>

    </div>
</div>

@endsection
