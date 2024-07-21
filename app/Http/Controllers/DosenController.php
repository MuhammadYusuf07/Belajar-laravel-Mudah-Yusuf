<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DosenController extends Controller
{
    //
    public function index(){
        return view('dosen_index');
    }

    public function create(){
        return view('dosen_create');
    }
}
