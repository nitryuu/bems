<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsController extends Controller
{
    public function usages()
    {
        return view('pages.usages');
    }

}

?>
