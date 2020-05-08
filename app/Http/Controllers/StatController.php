<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StatController extends Controller
{
    public function stat()
    {
        return view('/pages/statistic');
    }

}

?>
