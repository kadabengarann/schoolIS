<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(AdminController $adminController, UserController $userController)
    {
        $this->adminController = $adminController;
        $this->userController = $userController;
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        if (Auth::user()->level == 1) {
            return $this->adminController->index();
        }
        else if (Auth::user()->level == 2) {
            return $this->userController->index();

        }
        
    }
}
