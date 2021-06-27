<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('user.v_index');
    }
    public function biodata()
    {
        return view('user.v_biodata');
    }
    public function jadwal()
    {
        return view('user.v_jadwal');
    }
}


