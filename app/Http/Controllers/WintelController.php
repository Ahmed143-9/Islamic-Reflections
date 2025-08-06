<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WintelController extends Controller
{
    public function show(){
        $wintel = DB::table('wintels')->get();
        return $wintel;
    }
}
