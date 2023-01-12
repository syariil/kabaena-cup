<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Grups;
use App\Models\Registration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminRegistration extends Controller
{
    public function index()
    {
        $registration = DB::table('registrations')->orderBy('id', 'desc')->limit(4)->get();
        $grup = DB::table('grups')->limit(6)->get();
        return view('admin.registration', ['data' => $registration, 'grup' => $grup]);
    }

    public function create(Request $request)
    {
        $request->validate([
            'Season' => 'required|numeric',
            'status' => 'required|in:active,nonactive'
        ]);

        Registration::create($request->except('_token'));
        return redirect()->route('admin.registration')->with('success', 'season ditambahkan');
    }

    public function edit(Registration $id)
    {
        return view('admin.registrationEdit', ['regis' => $id]);
    }

    public function update(Request $request, Registration $id)
    {
        $request->validate([
            'status' => 'required|in:active,nonactive'
        ]);
        $id->fill($request->except('_token', '_method'))->save();
        return redirect()->route('admin.registration')->with('success', 'season diupdate');
    }

    public function delete(Registration $id)
    {
        $id->delete();
        return redirect()->route('admin.registration')->with('success', 'season dihapus');
    }

    public function grup()
    {
        return view('admin.groups');
    }

    public function creategrup(Request $request)
    {
        $request->validate([
            'Groups' => 'required',
            'Season' => 'required|numeric'
        ]);

        Grups::create($request->except('_token'));
        return redirect()->route('admin.registration')->with('success', 'add grup done');
    }

    public function grupEdit(Grups $id)
    {
        return view('admin.groupsEdit', ['data' => $id]);
    }

    public function grupUpdate(Request $request, Grups $id)
    {
        $request->validate([
            'Groups' => 'required',
            'Season' => 'required|numeric'
        ]);

        $id->fill($request->except('_token', '_method'))->save();
        return redirect()->route('admin.registration')->with('success', 'update grup done');
    }

    public function grupDelete(Grups $id)
    {
        $id->delete();
        return redirect()->route('admin.registration')->with('success', 'delete grup done');
    }
}
