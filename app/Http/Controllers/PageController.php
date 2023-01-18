<?php

namespace App\Http\Controllers;

use App\Train;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        $trains = Train::all();
        return view('guest.homepage', compact('trains'));
    }
}
