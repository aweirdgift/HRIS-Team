<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
   function index(){

    return view('dashboards.applicants.index');
   }

   function profile(){
       return view('dashboards.applicants.profile');
   }
   function settings(){
       return view('dashboards.applicants.settings');
   }
}
