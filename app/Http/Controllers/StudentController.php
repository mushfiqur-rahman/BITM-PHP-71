<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(){
        $fame = "Mushfiqur Rahman";
        $age = "25";
//        return 'Hello from controller';
//        return view('home', compact('name','age'));
//        return view('home')
//            ->with('a', $fame)
//            ->with('b', $age);
        return view('home',[
            'fame'=>$fame,
            'age'=>$age
        ]);
    }

    public function add(){
       return 'Hello About';
    }
}
