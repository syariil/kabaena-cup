<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Group;
use App\Models\Jadwal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminCompetitionController extends Controller
{
    public function index()
    {
        $jadwal = DB::table('jadwals')->orderBy('id', 'desc')->limit(4)->get();
        $season = DB::select('select Season from teams order by season desc limit 1');
        $season = (int)$season[0]->Season;
        $grup = DB::select('select Groups from grups where Season =' . $season . ';');
        $nama_grup = DB::table('grups')->select(
            'groups.id',
            'groups.Team',
            'groups.Win',
            'groups.Lose',
            'groups.Winrate',
            'groups.Points',
            'groups.Playing',
            'grups.Groups'
        )->join('groups', 'groups.grup_id', '=', 'grups.id')->get();

        return view('admin.Competition', ['grup' => $grup, 'groups' => $nama_grup, 'jadwal' => $jadwal]);
    }

    public function grups(Group $id)
    {
        return view('admin.grup', ['grup' => $id]);
    }
    public function grupUpdate(Request $request, Group $id)
    {
        $validate = 'required|numeric';
        $request->validate([
            'Win' => $validate,
            'Lose' => $validate,
            'Winrate' => $validate,
            'Points' => $validate,
            'Playing' => $validate,
        ]);

        $id->fill($request->except('_token', '_method'))->save();

        return redirect()->route('competition')->with('success', $request->Team . ' grup update');
    }

    public function jadwal(Jadwal $id)
    {
        return view('admin.jadwalUpdate', ['jadwal' => $id]);
    }

    public function jadwalUpdate(Request $request, Jadwal $id)
    {
        $request->validate([
            'teamA_id' => 'required|numeric',
            'teamB_id' => 'required|numeric',
            'ScoreA' => 'required|numeric',
            'ScoreB' => 'required|numeric',
            'tanggal' => 'required',
            'main' => 'required'
        ]);

        $id->fill($request->except('_method', '_token'))->save();

        return redirect()->route('competition')->with('success', 'jadwal update');
    }

    public function jadwalAdd()
    {
        return view('admin.jadwal');
    }

    public function jadwalAdds(Request $request)
    {
        $request->validate([
            'TeamA_id' => 'required|numeric',
            'TeamB_id' => 'required|numeric',
            'tanggal' => 'required',
            'main' => 'required'
        ]);
        Jadwal::create($request->except('_token'));
        return redirect()->route('competition')->with('success', 'jadwal ditambahkan');
    }
}
