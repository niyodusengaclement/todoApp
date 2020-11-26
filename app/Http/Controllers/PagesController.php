<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('pages/index');
    }
    public function about(){
        return view('pages/about');
    }
    public function contactUs(){
        return view('pages/contactus');
    }
    public function users(){
        $data = array(
            'title' => 'Welcome to the hell of wrong users',
            'users' => ['Mistico', 'Clement', 'Tune', 'Paul', 'Jz', 'Olly']
        );
        return view('pages/users')->with($data);
    }
}
