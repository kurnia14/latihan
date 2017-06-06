<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class testerController extends Controller
{
     public function tampilTestAdmin()
     {
         return view('tester.testerAdmin');
     }
}
