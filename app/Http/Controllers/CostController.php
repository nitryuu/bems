<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CostController extends Controller
{
    public function cost()
    {
        return view('pages.cost');
    }

}
