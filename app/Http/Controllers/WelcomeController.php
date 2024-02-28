<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function hello()
    {
        return 'Hello World';
    }

    // public function greeting()
    // {
    //     return view('blog.hello', ['name' => 'Putri']);
    // } 

    public function greeting()
    {
        return view('blog.hello')->with('name', 'Putri')
            ->with('occupation', 'Mahasiswa');
    }
}
