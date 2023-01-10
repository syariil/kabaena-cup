@extends('admin.layoutAdmin.master')
@section('title', 'add jadwal')

@section('content')

    <div class="flex justify-center mt-4">
        <section class="flex justify-center mt-4">
            <div class="flex flex-col w-full items-center bg-gray-200 dark:bg-gray-800 pt-9 rounded-xl">
                <div class="flex flex-col justify-center px-8">
                    <h2 class="font-poppins font->semibold text-[32px] text-black dark:text-white leading-4 py-4 my-4 ml-2">
                    </h2>
                    <form method="POST" action="{{ route('jadwal.add') }}">
                        @csrf

                        <!-- data team -->
                        <div class="grid gap-6 mb-6 md:grid-cols-2 ml-2">
                            <div>
                                <label for="Team"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-200">id Team A</label>
                                <input name="TeamA_id" type="number" id="nama_ketua"
                                    class="bg-gray-50 dark:bg-gray-900 border border-gray-300 dark:border-gray-700 text-gray-900 dark:text-gray-200 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                    placeholder="resky" required>
                            </div>
                            <div>
                                <label for="Team"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-200">id Team B</label>
                                <input name="TeamB_id" type="number" id="nama_ketua"
                                    class="bg-gray-50 dark:bg-gray-900 border border-gray-300 dark:border-gray-700 text-gray-900 dark:text-gray-200 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                    placeholder="resky" required>
                            </div>
                            <div>
                                <label for="Team"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-200">tanggal</label>
                                <input name="tanggal" type="text" id="nama_ketua"
                                    class="bg-gray-50 dark:bg-gray-900 border border-gray-300 dark:border-gray-700 text-gray-900 dark:text-gray-200 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                    placeholder="resky" required>
                            </div>
                            <div>
                                <label for="Team"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-200">jam</label>
                                <input name="main" type="text" id="nama_ketua"
                                    class="bg-gray-50 dark:bg-gray-900 border border-gray-300 dark:border-gray-700 text-gray-900 dark:text-gray-200 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                    placeholder="resky" required>
                            </div>
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
                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">tambahkan</button>
                    </form>
                </div>
            </div>
        </section>
    </div>



@endsection
