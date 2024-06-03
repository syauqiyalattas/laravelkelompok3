<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
   public function index(){
 
 $showmenu = auth()->user()->isAdmin();
    return view('dashboard', compact('showmenu'));

   } 
}
