<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClassController extends Controller
{
    public function classone()
    {
        $one = DB::table('one')->get();
        return $one;
    }

    public function classtwo()
    {
        $one = DB::table('two')->get();
        return $one;
    }

    public function classthree()
    {
        $one = DB::table('three')->get();
        return $one;
    }

    public function classfour()
    {
        $one = DB::table('four')->get();
        return $one;
    }

    public function classfive()
    {
        $one = DB::table('five')->get();
        // return $one;

        // foreach($one as $class5)
        // {
        //     echo $class5->name . "<br>";
        // }
        
        return view('classfive', ['data' => $one]);

    }
    
}
