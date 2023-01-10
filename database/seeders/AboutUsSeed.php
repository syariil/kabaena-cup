<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\AboutUs;

class AboutUsSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $asking = ['NIM', 'Alamat', 'Hobi', 'Instagram'];
        $answer = ['L200190133', 'Kartasura', 'Rebahan', '@sya_riil'];
        for ($i = 0; $i < count($asking); $i++) {
            AboutUs::create([
                'Asking' => $asking[$i],
                'Answer' => $answer[$i]
            ]);
        }
    }
}
