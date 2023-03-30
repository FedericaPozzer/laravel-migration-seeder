<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;

class PageController extends Controller
{
    public function homepage() {
        $trains = Train::all();
        // dd($trains);
        return view('homepage', compact("trains"));
    }
}
