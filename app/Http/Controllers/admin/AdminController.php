<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class AdminController extends Controller
{
    public function index()
    {
        $season = DB::table('teams')->select('Season')->orderBy('Season', 'desc')->limit(1)->get();
        $season = (int)$season[0]->Season;
        $team = DB::table('teams')->select(
            'id',
            'Team',
            'Ketua',
            'Season'
        )->where('Season', '=', $season)->get();
        return view('admin.home', ['data' => $team]);
    }

    public function edit(Team $id)
    {
        return view('admin.edit', ['team' => $id]);
    }
    public function show(Team $id)
    {
        return view('admin.show', ['team' => $id]);
    }

    public function update(Request $request, Team $id)
    {
        $validate = 'required|max:108';
        $idGame = 'required|numeric|max_digits:108';
        $role = 'required|in:roam,mid,exp,gold,Jungler';
        $request->validate([
            'Ketua' => 'required|max:45',
            'Team' => $validate,
            'Kota' => $validate,
            'Whatsapp' => 'required|numeric|max_digits:14',
            'Logo' => 'mimes:jpeg,jpg,png|max:5120',

            'Username' => $validate,
            'Id_game' => $idGame,
            'Role' => $role,

            'Username2' => $validate,
            'Id_game2' => $idGame,
            'Role2' => $role,

            'Username3' => $validate,
            'Id_game3' => $idGame,
            'Role3' => $role,

            'Username4' => $validate,
            'Id_game4' => $idGame,
            'Role4' => $role,

            'Username5' => $validate,
            'Id_game5' => $idGame,
            'Role5' => $role,

            'Username6' => 'max:108',
            'Id_game6' => 'max:108',
            'Role6' => 'in:Role,roam,mid,exp,gold,Jungler',

        ]);
        $input = $request->except('_token', '_method');
        if ($request->file('Logo')) {
            // name logo
            $logo = $request->get('Team') . '_logo.' . $request->file('Logo')->extension();
            // delete old image
            if ($id->Logo !== 'logo_default.jpeg') {
                File::delete('image/logo/' . $logo);
            }
            // change logo name if logo input exist
            $request->file('Logo')->move(public_path('image/logo'), $logo);
            $input['Logo'] = $logo;
        }
        $id->fill($input)->save();
        $data = 'update ' . $id->Team . ' done';
        return redirect()->route('admin.index')->with('success', $data);
    }


    public function destroy(Team $id)
    {
        if ($id->Logo !== 'logo_default.jpeg') {
            File::delete('image/logo/' . $id->Logo);
        }
        $id->delete();
        return redirect()->route('admin.index')->with('success', 'delete done');
    }
}
