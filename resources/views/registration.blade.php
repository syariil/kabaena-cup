@extends('layout.master')
@section('title', 'Registration')

@section('content')
    <section class="flex justify-center mt-4">
        <div class="flex flex-col w-full md:w-[80%] items-center bg-gray-200 dark:bg-gray-800 pt-9 rounded-xl">
        @if($data[0]->status == 'active')

            <div class="flex flex-col">
                <div class="flex flex-col justify-center item">
                    <h2
                        class="font-poppins font-bold text-[24px] md:text-[32px] text-black dark:text-white leading-4 uppercase mb-4">
                        Regist<span class="text-red-600">ration</span>
                    </h2>
                    <div class="flex flex-row justify-start mb-6">
                        <p class="font-poppins font-semibold text-[13px] md:text-[16px] text-gray-900 dark:text-gray-100">
                            Fee <span class="text-red-600">25K</span> <br>
                            Rekening <span class="text-red-600"> 3232-10-323210-32-3</span> <br>
                            Nama <span class="text-red-600"> Jumran </span> <br>
                            bank <span class="text-red-600">BMI</span>
                        </p>
                    </div>
                </div>
                <form method="post" action="{{ route('registration.regis') }}" enctype="multipart/form-data">
                    @csrf

                    <!-- data team -->
                    <div class="grid gap-6 mb-6 md:grid-cols-2">
                        <div>
                            <label for="nama_ketua"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-200">Nama Ketua</label>
                            <input name="Ketua" type="text" id="nama_ketua"
                                class="bg-gray-50 dark:bg-gray-900 border border-gray-300 dark:border-gray-700 text-gray-900 dark:text-gray-200 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                placeholder="resky" required>
                        </div>
                        <div>
                            <label for="nama_team"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-200">Nama Team</label>
                            <input name="Team" type="text" id="nama_team"
                                class="bg-gray-50 dark:bg-gray-900 border border-gray-300 dark:border-gray-700 text-gray-900 dark:text-gray-200 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                placeholder="Sleeping Knightx" required>
                        </div>
                        <div>
                            <label for="asal_team"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-200">Asal Team</label>
                            <input name="Kota" type="text" id="asal_team"
                                class="bg-gray-50 dark:bg-gray-900 border border-gray-300 dark:border-gray-700 text-gray-900 dark:text-gray-200 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                placeholder="Kabaena Timur" required>
                        </div>
                        <div>
                            <label for="nomor_wa"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-200">Nomor WA</label>
                            <input name="Whatsapp" type="tel" id="nomor_wa"
                                class="bg-gray-50 dark:bg-gray-900 border border-gray-300 dark:border-gray-700 text-gray-900 dark:text-gray-200 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                placeholder="0812-3456-7890" required value="628">
                        </div>
                        <div class="mb-6">
                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-200"
                                for="user_avatar">logo</label>
                            <input name="Logo"
                                class="block w-full text-sm text-gray-900 dark:text-gray-200 bg-gray-50 dark:bg-gray-900 rounded-lg border border-gray-300 dark:border-gray-700 cursor-pointer focus:outline-none"
                                aria-describedby="user_avatar_help" id="user_avatar" type="file">
                            <div class="mt-1 text-sm text-gray-500 dark:text-gray-400" id="user_avatar_help">jika belum
                                memiliki logo team bisa diskip</div>
                        </div>
                        <div class="mb-6">
                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-200"
                                for="user_avatar">bukti pembayaran</label>
                            <input name="bukti_pembayaran"
                                class="block w-full text-sm text-gray-900 dark:text-gray-200 bg-gray-50 dark:bg-gray-900 rounded-lg border border-gray-300 dark:border-gray-700 cursor-pointer focus:outline-none"
                                aria-describedby="user_avatar_help" id="user_avatar" type="file" required>
                        </div>
                        <div class="mb-6">
                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-200"
                            for="user_avatar">Season</label>
                            <input name="Season" type="number" id="season"
                                class="bg-gray-50 dark:bg-gray-900 border border-gray-300 dark:border-gray-700 text-gray-900 dark:text-gray-200 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-full p-2.5 block"
                                value="{{ $data[0]->Season }}" readonly>
                        </div>
                    </div>

                    <!-- data player -->
                    <!-- player 1 -->
                    <div class="flex flex-row justify-center mb-2">
                        <hr class="w-[35%] items-center mt-4 mr-4 text-gray-900 dark:text-gray-200 ">
                        <span
                            class="font-poppins font-semibold text-[12] md:text-[14px] text-gray-900 dark:text-gray-200">player1</span>
                        <hr class="w-[35%] items-center mt-4 ml-4 text-gray-900 dark:text-gray-200 ">
                    </div>
                    <div class="mb-6">
                        <label for="username"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-200">Username Game</label>
                        <input name="Username" type="text" id="username"
                            class="bg-gray-50 dark:bg-gray-900 border border-gray-300 dark:border-gray-700 text-gray-900 dark:text-gray-200 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                            placeholder="Lesung Pipi" required>
                    </div>
                    <div class="mb-6">
                        <label for="id_game" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-200">ID
                            Game</label>
                        <input name="Id_game" type="number" id="id_game"
                            class="bg-gray-50 dark:bg-gray-900 border border-gray-300 dark:border-gray-700 text-gray-900 dark:text-gray-200 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                            placeholder="97964400" required>
                    </div>
                    <div class="mb-6">
                        <label for="role_game"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-200">Role</label>
                        <select name="Role" id="role_game"
                            class="bg-gray-50 dark:bg-gray-900 border border-gray-300 dark:border-gray-700 text-gray-900 dark:text-gray-200 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                            <option value="">Role</option>
                            <option value="roam">Roamer</option>
                            <option value="mid">Mid Liner</option>
                            <option value="exp">Exp Liner</option>
                            <option value="gold">Gold Liner</option>
                            <option value="Jungler">Jungler</option>
                        </select>
                    </div>

                    <!-- player 2 -->
                    <div class="flex flex-row justify-center mb-2">
                        <hr class="w-[35%] items-center mt-4 mr-4 text-gray-900 dark:text-gray-200 ">
                        <span
                            class="font-poppins font-semibold text-[12] md:text-[14px] text-gray-900 dark:text-gray-200">player2</span>
                        <hr class="w-[35%] items-center mt-4 ml-4 text-gray-900 dark:text-gray-200 ">
                    </div>
                    <div class="mb-6">
                        <label for="sername2"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-200">Username Game</label>
                        <input name="Username2" type="text" id="username2"
                            class="bg-gray-50 dark:bg-gray-900 border border-gray-300 dark:border-gray-700 text-gray-900 dark:text-gray-200 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                            placeholder="Lesung Pipi" required>
                    </div>
                    <div class="mb-6">
                        <label for="id_game2" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-200">ID
                            Game</label>
                        <input name="Id_game2" type="number" id="id_game2"
                            class="bg-gray-50 dark:bg-gray-900 border border-gray-300 dark:border-gray-700 text-gray-900 dark:text-gray-200 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                            placeholder="97964400" required>
                    </div>
                    <div class="mb-6">
                        <label for="role_game2"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-200">Role</label>
                        <select name="Role2" id="role_game2"
                            class="bg-gray-50 dark:bg-gray-900 border border-gray-300 dark:border-gray-700 text-gray-900 dark:text-gray-200 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                            <option value="">Role</option>
                            <option value="roam">Roamer</option>
                            <option value="mid">Mid Liner</option>
                            <option value="exp">Exp Liner</option>
                            <option value="gold">Gold Liner</option>
                            <option value="Jungler">Jungler</option>
                        </select>
                    </div>

                    <!-- player 3 -->
                    <div class="flex flex-row justify-center mb-2">
                        <hr class="w-[35%] items-center mt-4 mr-4 text-gray-900 dark:text-gray-200 ">
                        <span
                            class="font-poppins font-semibold text-[12] md:text-[14px] text-gray-900 dark:text-gray-200">player3</span>
                        <hr class="w-[35%] items-center mt-4 ml-4 text-gray-900 dark:text-gray-200 ">
                    </div>
                    <div class="mb-6">
                        <label for="username3"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-200">Username Game</label>
                        <input name="Username3" type="text" id="username3"
                            class="bg-gray-50 dark:bg-gray-900 border border-gray-300 dark:border-gray-700 text-gray-900 dark:text-gray-200 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                            placeholder="Lesung Pipi" required>
                    </div>
                    <div class="mb-6">
                        <label for="id_game3" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-200">ID
                            Game</label>
                        <input name="Id_game3" type="number" id="id_game3"
                            class="bg-gray-50 dark:bg-gray-900 border border-gray-300 dark:border-gray-700 text-gray-900 dark:text-gray-200 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                            placeholder="97964400" required>
                    </div>
                    <div class="mb-6">
                        <label for="Role_game3"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-200">Role</label>
                        <select name="Role3" id="role_game3"
                            class="bg-gray-50 dark:bg-gray-900 border border-gray-300 dark:border-gray-700 text-gray-900 dark:text-gray-200 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                            <option value="">Role</option>
                            <option value="roam">Roamer</option>
                            <option value="mid">Mid Liner</option>
                            <option value="exp">Exp Liner</option>
                            <option value="gold">Gold Liner</option>
                            <option value="Jungler">Jungler</option>
                        </select>
                    </div>

                    <!-- player 4 -->
                    <div class="flex flex-row justify-center mb-2">
                        <hr class="w-[35%] items-center mt-4 mr-4 text-gray-900 dark:text-gray-200 ">
                        <span
                            class="font-poppins font-semibold text-[12] md:text-[14px] text-gray-900 dark:text-gray-200">player4</span>
                        <hr class="w-[35%] items-center mt-4 ml-4 text-gray-900 dark:text-gray-200 ">
                    </div>
                    <div class="mb-6">
                        <label for="username4"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-200">Username Game</label>
                        <input name="Username4" type="text" id="username4"
                            class="bg-gray-50 dark:bg-gray-900 border border-gray-300 dark:border-gray-700 text-gray-900 dark:text-gray-200 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                            placeholder="Lesung Pipi" required>
                    </div>
                    <div class="mb-6">
                        <label for="id_game4" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-200">ID
                            Game</label>
                        <input name="Id_game4" type="number" id="id_game4"
                            class="bg-gray-50 dark:bg-gray-900 border border-gray-300 dark:border-gray-700 text-gray-900 dark:text-gray-200 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                            placeholder="97964400" required>
                    </div>
                    <div class="mb-6">
                        <label for="role_game4"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-200">Role</label>
                        <select name="Role4" id="role_game4"
                            class="bg-gray-50 dark:bg-gray-900 border border-gray-300 dark:border-gray-700 text-gray-900 dark:text-gray-200 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                            <option value="">Role</option>
                            <option value="roam">Roamer</option>
                            <option value="mid">Mid Liner</option>
                            <option value="exp">Exp Liner</option>
                            <option value="gold">Gold Liner</option>
                            <option value="Jungler">Jungler</option>
                        </select>
                    </div>

                    <!-- player 5 -->
                    <div class="flex flex-row justify-center mb-2">
                        <hr class="w-[35%] items-center mt-4 mr-4 text-gray-900 dark:text-gray-200 ">
                        <span
                            class="font-poppins font-semibold text-[12] md:text-[14px] text-gray-900 dark:text-gray-200">player5</span>
                        <hr class="w-[35%] items-center mt-4 ml-4 text-gray-900 dark:text-gray-200 ">
                    </div>
                    <div class="mb-6">
                        <label for="username5"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-200">Username Game</label>
                        <input name="Username5" type="text" id="username5"
                            class="bg-gray-50 dark:bg-gray-900 border border-gray-300 dark:border-gray-700 text-gray-900 dark:text-gray-200 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                            placeholder="Lesung Pipi" required>
                    </div>
                    <div class="mb-6">
                        <label for="id_game5" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-200">ID
                            Game</label>
                        <input name="Id_game5" type="number" id="id_game5"
                            class="bg-gray-50 dark:bg-gray-900 border border-gray-300 dark:border-gray-700 text-gray-900 dark:text-gray-200 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                            placeholder="97964400" required>
                    </div>
                    <div class="mb-6">
                        <label for="role_game5"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-200">Role</label>
                        <select name="Role5" id="role_game5"
                            class="bg-gray-50 dark:bg-gray-900 border border-gray-300 dark:border-gray-700 text-gray-900 dark:text-gray-200 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                            <option value="">Role</option>
                            <option value="roam">Roamer</option>
                            <option value="mid">Mid Liner</option>
                            <option value="exp">Exp Liner</option>
                            <option value="gold">Gold Liner</option>
                            <option value="Jungler">Jungler</option>
                        </select>
                    </div>

                    <!-- player 6 -->
                    <div class="flex flex-row justify-center mb-2">
                        <hr class="w-[10%] items-center mt-4 mr-4 text-gray-900 dark:text-gray-200 ">
                        <span
                            class="font-poppins font-semibold text-[5] md:text-[14px] text-gray-900 dark:text-gray-200">player6(tidak
                            wajib)</span>
                        <hr class="w-[10%] items-center mt-4 ml-4 text-gray-900 dark:text-gray-200 ">
                    </div>
                    <div class="mb-6">
                        <label for="username6"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-200">Username Game</label>
                        <input name="Username6" type="text" id="username6"
                            class="bg-gray-50 dark:bg-gray-900 border border-gray-300 dark:border-gray-700 text-gray-900 dark:text-gray-200 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                            placeholder="Lesung Pipi">
                    </div>
                    <div class="mb-6">
                        <label for="id_game6" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-200">ID
                            Game</label>
                        <input name="Id_game6" type="text" id="id_game6"
                            class="bg-gray-50 dark:bg-gray-900 border border-gray-300 dark:border-gray-700 text-gray-900 dark:text-gray-200 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                            placeholder="97964400">
                    </div>
                    <div class="mb-6">
                        <label for="role_game6"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-200">Role</label>
                        <select name="Role6" id="role_game6"
                            class="bg-gray-50 dark:bg-gray-900 border border-gray-300 dark:border-gray-700 text-gray-900 dark:text-gray-200 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                            <option value="Role" selected>Role</option>
                            <option value="roam">Roamer</option>
                            <option value="mid">Mid Liner</option>
                            <option value="exp">Exp Liner</option>
                            <option value="gold">Gold Liner</option>
                            <option value="Jungler">Jungler</option>
                        </select>
                    </div>

                    @if ($errors->any())
                        <div class="p-4 mb-4 text-sm text-red-700 bg-red-100 rounded-lg" role="alert">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li><span class="font-medium">{{ $error }}</span> </li>
                                @endforeach
                            </ul>
                        </div>
                    @endif


                    <button type="submit"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Daftar</button>
                </form>
            </div>
        @else
        <div class="flex justify-center items-center w-full h-full bg-gray-200 dark:bg-gray-800 px-4 md:px-0 py-8">
            <h2 class="font-poppins font-semibold text-[36px] text-gray-900 dark:text-gray-200 uppercase">
                Coming soon
            </h2>
        </div>
        @endif
        </div>
    </section>
@endsection
