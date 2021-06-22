<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TeacherModel;

class TeachersController extends Controller
{
    //
    public function __construct()
    {
        $this -> TeacherModel = new TeacherModel();
    }

    public function index(){

        $data = [
            'teacher' => $this->TeacherModel->allData(),
        ];
        return view('admin.teacher.v_teachers', $data);
    }
    public function add_page(){
        return view('admin.teacher.v_add_teacher');
    }
}
