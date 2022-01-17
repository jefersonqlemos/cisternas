<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CisternasController extends Controller
{
    //
    public function catalogoCisternas()
    {
        return view('catalogocisternas');
    }

    public function contato()
    {
        return view('contato');
    }

    public function sobre()
    {
        return view('sobre');
    }

    public function shop()
    {
        return view('shop');
    }
}
