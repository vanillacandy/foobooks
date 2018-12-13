<?php

namespace App\Http\Controllers;


use Illuminate\Http\Requests;

class WelcomeController extends Controller
{
    public function __invoke(){
        return view('welcome');
    }
}
