<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Champion;
use App\Models\Team;
use Illuminate\Support\Facades\DB;

class ChampionController extends Controller
{
    //
    public function index()
    {
        $data = DB::table('champions')->select(
            'teams.Team',
            'teams.Season',
            'teams.Kota',
            'teams.Logo',
            'teams.id'
        )->join('teams', 'teams.id', 'champions.team_id')->orderBy('teams.Season', 'desc')->get();
        return view('champion', ['data' => $data]);
    }

    public function show($id)
    {
        $data = Team::find($id);
        return view('championView', ['data' => $data]);
    }
}
