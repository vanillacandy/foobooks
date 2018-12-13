<?php

namespace App\Http\Controllers;


use Illuminate\Http\Requests;

class BookController extends Controller
{
    public function index(){
        return "Here are all the books";
    }
    public function show($title){
        return view('books.show')->with(['title'=>$title] );
    }

}
