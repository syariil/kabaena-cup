<?php

namespace App\Http\Controllers\AboutUs;

use App\Http\Controllers\Controller;
use App\Models\AboutUs;


class AboutUsController extends Controller
{

    public function AboutUs()
    {
        $data = AboutUs::all();
        return view('aboutUs', ['data' => $data]);
    }
}
