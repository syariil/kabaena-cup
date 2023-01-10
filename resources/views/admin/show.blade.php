@extends('admin.layoutAdmin.master')
@section('title', 'team show')

@section('content')

<div class="flex justify-center mt-4">
    <section class="flex justify-center mt-4">
        <div class="flex flex-col w-full items-center bg-gray-200 dark:bg-gray-800 pt-9 rounded-xl ">
            <div class="flex flex-col justify-center w-full px-9">
                    <!-- data team -->
                <div class="grid gap-6 mb-6 md:grid-cols-2 ml-2 px-9">
                    <div>
                        <label for="nama_ketua"
                            class="block mb-2 text-sm font-medium text-gray-800 dark:text-gray-300">Ketua</label>
                            <h2 class="block mb-2 text-[25px] font-medium text-gray-900 dark:text-gray-200">
                                {{ $team->Ketua }}
                            </h2>
                    </div>
                    <div>
                        <label for="nama_ketua"
                            class="block mb-2 text-sm font-medium text-gray-800 dark:text-gray-300"> Team</label>
                            <h2 class="block mb-2 text-[25px] font-medium text-gray-900 dark:text-gray-200">
                                {{ $team->Team }}
                            </h2>
                    </div>
                    <div>
                        <label for="nama_ketua"
                            class="block mb-2 text-sm font-medium text-gray-800 dark:text-gray-300">Asal</label>
                            <h2 class="block mb-2 text-[25px] font-medium text-gray-900 dark:text-gray-200">
                                {{ $team->Kota }}
                            </h2>
                    </div>
                    <div>
                        <label for="nama_ketua"
                            class="block mb-2 text-sm font-medium text-gray-800 dark:text-gray-300">Whatsapp</label>
                            <h2 class="block mb-2 text-[25px] font-medium text-gray-900 dark:text-gray-200">
                                {{ $team->Whatsapp }}
                            </h2>
                    </div>
                    <div>
                        <label for="nama_ketua"
                            class="block mb-2 text-sm font-medium text-gray-800 dark:text-gray-300">Logo</label>
                            <img src="../../image/logo/{{ $team->Logo }}" alt="{{ $team->Team }}" class="w-[50px] h-[50px]  rounded-full">
                    </div>
                </div>


                <!-- player 1 -->
                <label for="nama_ketua"
                class=" text-md font-medium text-gray-800 dark:text-gray-300 flex justify-center border-b-2 border-gray-800 dark:border-gray-200 mb-4">player 1</label>
                <div class="grid gap-0 md:gap-12 mb-6 md:grid-cols-3 ml-2 px-9 border-b-2 border-gray-800 dark:border-gray-200 bg-gray-300 dark:bg-gray-700 rounded-3xl">

                    <h2 class="block mb-2 text-[16px] font-medium text-gray-900 dark:text-gray-200">
                        {{ $team->Username }}
                    </h2>
                    <h2 class="block mb-2 text-[16px] font-medium text-gray-900 dark:text-gray-200">
                        {{ $team->Id_game }}
                    </h2>
                    <h2 class="block mb-2 text-[16px] font-medium text-gray-900 dark:text-gray-200">
                        {{ $team->Role }}
                    </h2>

                </div>
                <!-- player 2 -->
                <label for="nama_ketua"
                class=" text-md font-medium text-gray-800 dark:text-gray-300 flex justify-center border-b-2 border-gray-800 dark:border-gray-200 mb-4">player 2</label>
                <div class="grid gap-0 md:gap-12 mb-3 md:grid-cols-3 ml-2 px-9 border-b-2 border-gray-800 dark:border-gray-200 bg-gray-300 dark:bg-gray-700 rounded-3xl">

                    <h2 class="block mb-2 text-[16px] font-medium text-gray-900 dark:text-gray-200">
                        {{ $team->Username2 }}
                    </h2>
                    <h2 class="block mb-2 text-[16px] font-medium text-gray-900 dark:text-gray-200">
                        {{ $team->Id_game2 }}
                    </h2>
                    <h2 class="block mb-2 text-[16px] font-medium text-gray-900 dark:text-gray-200">
                        {{ $team->Role2 }}
                    </h2>
                </div>
                <!-- plauer 3 -->
                <label for="nama_ketua"
                class=" text-md font-medium text-gray-800 dark:text-gray-300 flex justify-center border-b-2 border-gray-800 dark:border-gray-200 mb-4">player 3</label>
                <div class="grid gap-0 md:gap-12 mb-3 md:grid-cols-3 ml-2 px-9 border-b-2 border-gray-800 dark:border-gray-200 bg-gray-300 dark:bg-gray-700 rounded-3xl">

                    <h2 class="block mb-2 text-[16px] font-medium text-gray-900 dark:text-gray-200">
                        {{ $team->Username3 }}
                    </h2>
                    <h2 class="block mb-2 text-[16px] font-medium text-gray-900 dark:text-gray-200">
                        {{ $team->Id_game3 }}
                    </h2>
                    <h2 class="block mb-2 text-[16px] font-medium text-gray-900 dark:text-gray-200">
                        {{ $team->Role3 }}
                    </h2>

                </div>
                <!-- player 4 -->
                <label for="nama_ketua"
                class=" text-md font-medium text-gray-800 dark:text-gray-300 flex justify-center border-b-2 border-gray-800 dark:border-gray-200 mb-4">player 4</label>
                <div class="grid gap-0 md:gap-12 mb-3 md:grid-cols-3 ml-2 px-9 border-b-2 border-gray-800 dark:border-gray-200 bg-gray-300 dark:bg-gray-700 rounded-3xl">

                    <h2 class="block mb-2 text-[16px] font-medium text-gray-900 dark:text-gray-200">
                        {{ $team->Username4 }}
                    </h2>
                    <h2 class="block mb-2 text-[16px] font-medium text-gray-900 dark:text-gray-200">
                        {{ $team->Id_game4 }}
                    </h2>
                    <h2 class="block mb-2 text-[16px] font-medium text-gray-900 dark:text-gray-200">
                        {{ $team->Role4 }}
                    </h2>

                </div>
                <!-- player 5 -->
                <label for="nama_ketua"
                class=" text-md font-medium text-gray-800 dark:text-gray-300 flex justify-center border-b-2 border-gray-800 dark:border-gray-200 mb-4">player 5</label>
                <div class="grid gap-0 md:gap-12 mb-3 md:grid-cols-3 ml-2 px-9 border-b-2 border-gray-800 dark:border-gray-200 bg-gray-300 dark:bg-gray-700 rounded-3xl">

                    <h2 class="block mb-2 text-[16px] font-medium text-gray-900 dark:text-gray-200">
                        {{ $team->Username5 }}
                    </h2>
                    <h2 class="block mb-2 text-[16px] font-medium text-gray-900 dark:text-gray-200">
                        {{ $team->Id_game5 }}
                    </h2>
                    <h2 class="block mb-2 text-[16px] font-medium text-gray-900 dark:text-gray-200">
                        {{ $team->Role5 }}
                    </h2>

                </div>
                <!-- jika ada player 6 -->
                <!-- player 6 -->
                @if($team->Username6)
                <label for="nama_ketua"
                class=" text-md font-medium text-gray-800 dark:text-gray-300 flex justify-center border-b-2 border-gray-800 dark:border-gray-200 mb-4">player 6</label>
                <div class="grid gap-0 md:gap-12 mb-3 md:grid-cols-3 ml-2 px-9 border-b-2 border-gray-800 dark:border-gray-200 bg-gray-300 dark:bg-gray-700 rounded-3xl">

                    <h2 class="block mb-2 text-[16px] font-medium text-gray-900 dark:text-gray-200">
                        {{ $team->Username6 }}
                    </h2>
                    <h2 class="block mb-2 text-[16px] font-medium text-gray-900 dark:text-gray-200">
                        {{ $team->Id_game6 }}
                    </h2>
                    <h2 class="block mb-2 text-[16px] font-medium text-gray-900 dark:text-gray-200">
                        {{ $team->Role6 }}
                    </h2>

                </div>
                @endif
            </div>
        </div>
    </section>
</div>



@endsection
