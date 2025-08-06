<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MemberController extends Controller
{
   public function show()
   {
    $members = DB::table('members')->get();
    return $members;
   }

}
