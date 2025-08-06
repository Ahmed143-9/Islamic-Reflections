<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LastController extends Controller
{
    public function lastcheck(){
        $users = DB::table('last')->get();
        // dd($users);

        foreach($users as $user){
           echo $user->name . "<br>";
        }
    }
}
