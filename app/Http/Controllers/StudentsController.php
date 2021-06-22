<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StudentModel;

class StudentsController extends Controller
{
    //
    public function __construct()
    {
        $this -> StudentModel = new StudentModel();
    }

    public function index(){

        $data = [
            'student' => $this->StudentModel->allData(),
        ];

        return view('admin.student.v_students', $data);
    }
    public function add_page(){
        return view('admin.student.v_add_student');
    }
}
