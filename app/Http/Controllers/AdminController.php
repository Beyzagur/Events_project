<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
   public function admin_panel(){

       return view('layouts.admin_panel');
   }

   public function events(){

       return view('events');
   }
}
