<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RegistrationController extends Controller
{
    public function index()
    {
        $data = DB::table('registrations')->orderBy('Season', 'desc')->limit(1)->get();
        return view('registration', ['data' => $data]);
    }

    public function regis(Request $request)
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
            'bukti_pembayaran' => 'mimes:jpeg,jpg,png|max:5120',

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
        $input = $request->except('_token');
        if ($request->file('Logo')) {
            $logo = $request->get('Team') . '_logo.' . $request->file('Logo')->extension();
            // change name logo jika ada logo
            $request->file('Logo')->move(public_path('image/logo'), $logo);
            $input['Logo'] = $logo;
        }

        $pendaftaran = $request->get('Team') . '_pendaftaran.' . $request->file('bukti_pembayaran')->extension();
        $request->file('bukti_pembayaran')->move(public_path('image/pendaftaran/'), $pendaftaran);
        $input['bukti_pembayaran'] = $pendaftaran;

        Team::create($input);

        $team = $request->get('Team');

        return redirect()->route('registration.done')->with('success', $team);
    }

    public function regDone()
    {
        return view('regdone');
    }
}
