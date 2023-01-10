<?php

namespace App\Http\Controllers;

use App\Models\Jadwal;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CompetitionController extends Controller
{
    public function index()
    {
        $jadwals = DB::select('select ScoreA,ScoreB,tanggal,main, (select Team from teams where teams.id=jadwals.teamA_id) as teamA, (select Team from teams where teams.id=jadwals.teamB_id) as teamB,(select Logo from teams where teams.id=jadwals.teamA_id) as logoA,(select Logo from teams where teams.id=jadwals.teamB_id) as logoB  from jadwals order by id desc limit 4;');

        $grup = DB::select("select *, grups.Groups from groups join grups on groups.grup_id = grups.id");
        $season_team = DB::table('teams')->select('season')->orderBy('season', 'desc')->limit(1)->get();
        $season = (int)$season_team[0]->season;
        $name_grup = DB::select("select Groups from grups where Season =" . $season . ";");

        return view('competition', ['jadwal' => $jadwals, 'grups' => $grup, 'data' => $name_grup]);
    }
}
