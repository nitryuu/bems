<?php

namespace App\Http\Controllers;

use App\Gedung;
use App\Lantai;

class UsController extends Controller
{
    public function usages()
    {
    	$gedung = Gedung::get();
        return view('pages.usages')->with([
        	'gedung' => $gedung
        ]);
    }

}

?>
