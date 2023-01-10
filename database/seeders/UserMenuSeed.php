<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\UserMenu;

class UserMenuSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // data faker indonesia
        $Menu = ['Home', 'Competion', 'Registration', 'Champion', 'About', 'About Us'];
        $Link = ['/', 'Competion', 'Registration', 'Champion', 'About', 'AboutUs'];
        $style = [
            "block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-red-600 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent  {{ (request()->is('/')) ? 'text-red-600 dark:text-white' : 'dark:text-white text-gray-900'}}",
            "block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-red-600 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent  {{ (request()->is('Competition')) ? 'text-red-600 dark:text-white' : 'dark:text-white text-gray-900' }}",
            "block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-red-600 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent  {{ (request()->is('Registration')) ? 'text-red-600 dark:text-white' : 'dark:text-white text-gray-900' }}",
            "block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-red-600 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent  {{ (request()->is('Champion')) ? 'text-red-600 dark:text-white' : 'dark:text-white text-gray-900' }}",
            "block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-red-600 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent  {{ (request()->is('About')) ? 'text-red-600 dark:text-white' : 'dark:text-white text-gray-900' }}",
            "block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-red-600 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent  {{ (request()->is('AboutUs')) ? 'text-red-600 dark:text-white' : 'dark:text-white text-gray-900' }}"
        ];

        // membuat data dummy sebanyak 10 record
        for ($x = 0; $x < count($Menu); $x++) {

            // insert data dummy pegawai dengan faker
            UserMenu::create([
                'Menu' => $Menu[$x],
                'Link' => $Link[$x],
                'style' => $style[$x],
            ]);
        }
    }
}
