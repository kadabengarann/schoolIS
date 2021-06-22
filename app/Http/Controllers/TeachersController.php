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
    
    public function detail($id){

        $data = [
            'teacher' => $this->TeacherModel->detailData($id),
        ];
        return view('admin.teacher.v_teacher_detail', $data);
    }

    public function add(){
        return view('admin.teacher.v_add_teacher');
    }

    public function insert(){
        Request()->validate([
            'id' => 'required|unique:teacher,id|min:10|max:10',
            'name' => 'required',
            'subject' => 'required',
            'address' => 'required',
            'date' => 'required',
            'birthplace' => 'required'
        ]);
    }
}
