<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Champion;

class ChampionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $season = ['season 1', 'season 2'];
        $team = ['anbu esport', 'kamu jomblo e-sport'];
        $kota = ['kendari', 'kendari'];
        $image = ['image/s1_w1.jpeg', 'image/s2_w1.jpeg'];

        for ($x = 0; $x < count($season); $x++) {
            Champion::create([
                'Team' => $team[$x],
                'Season' => $season[$x],
                'Kota' => $kota[$x],
                'Image' => $image[$x],
            ]);
        }
    }
}
