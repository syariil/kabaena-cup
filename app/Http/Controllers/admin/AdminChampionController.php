<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Champion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AdminChampionController extends Controller
{
    public function index()
    {
        $data = DB::table('champions')->select([
            'teams.Team',
            'team_id',
            'champions.id'
        ])->join('teams', 'champions.team_id', '=', 'teams.id')->get();

        return view('admin.Champion', ['data' => $data]);
    }

    public function tambahkan(Request $request)
    {
        $request->validate([
            'team_id' => 'required|numeric'
        ]);

        Champion::create($request->all());
        return redirect()->route('champion');
    }

    public function edit(Champion $id)
    {
        return view('admin.championEdit', ['champion' => $id]);
    }

    public function update(Request $request, Champion $id)
    {
        $request->validate([
            'team_id' => 'required|numeric'
        ]);
        $id->fill($request->except('_token', '_method'))->save();
        return redirect()->route('admin.champion')->with('success', 'update done');
    }

    public function delete(Champion $id)
    {
        $id->delete();
        return redirect()->route('admin.champion')->with('success', 'delete done');
    }
}
