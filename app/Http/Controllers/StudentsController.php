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

    public function add(){
        return view('admin.student.v_add_student');
    }

    public function detail($id){

        $data = [
            'student' => $this->StudentModel->detailData($id),
        ];
        return view('admin.student.v_student_detail', $data);
    }

    public function insert(){
        Request()->validate([
            'id' => 'required|unique:student,id|min:10|max:10',
            'name' => 'required',
            'year' => 'required',
            'address' => 'required',
            'date' => 'required',
            'house' => 'required',
            'birthplace' => 'required'
        ]);
        $data = [
            'id' => Request()->id,
            'name' => Request()->name,
            'house' => Request()->house,
            'alamat' => Request()->address,
            'year' => Request()->year,
            'tgl_lahir' => Request()->date,
            'tmp_lahir' => Request()->birthplace
        ];

        $this->StudentModel->addData($data);
        return redirect()->route('students')->with('pesan', 'Added new data !1!1');
    
    }

    public function edit($id){

        if (!$this->StudentModel->detailData($id)) {
            abort(404);
        }
        $data = [
            'student' => $this->StudentModel->detailData($id),
        ];
        return view('admin.student.v_edit_student', $data);
    }

    public function update($id){
        Request()->validate([
            'id' => 'required|min:10|max:10',
            'name' => 'required',
            'year' => 'required',
            'address' => 'required',
            'date' => 'required',
            'house' => 'required',
            'birthplace' => 'required'
        ]);
        $data = [
            'id' => Request()->id,
            'name' => Request()->name,
            'house' => Request()->house,
            'alamat' => Request()->address,
            'year' => Request()->year,
            'tgl_lahir' => Request()->date,
            'tmp_lahir' => Request()->birthplace
        ];

        $this->StudentModel->editData($id, $data);
        return redirect()->route('studentDetail', $id)->with('pesan', 'Updated a data !1!1');
    }
}
