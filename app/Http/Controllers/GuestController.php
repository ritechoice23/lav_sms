<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuestController extends Controller
{
    //
//    show the index page for the website
public function index(){
    return view('guest.guest');
}
}
