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
        $this->middleware('auth');
    }

    public function index(){

        $data = [
            'teacher' => $this->TeacherModel->allData(),
        ];
        return view('admin.teacher.v_teachers', $data);
    }
    
    public function detail($id){

        if (!$this->TeacherModel->detailData($id)) {
            abort(404);
        }

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

        $data = [
            'id' => Request()->id,
            'name' => Request()->name,
            'subject' => Request()->subject,
            'address' => Request()->address,
            'tgl_lahir' => Request()->date,
            'tmp_lahir' => Request()->birthplace
        ];

        $this->TeacherModel->addData($data);
        return redirect()->route('teachers')->with('pesan', 'Added new data !1!1');
    }

    public function edit($id){

        if (!$this->TeacherModel->detailData($id)) {
            abort(404);
        }
        $data = [
            'teacher' => $this->TeacherModel->detailData($id),
        ];
        return view('admin.teacher.v_edit_teacher', $data);
    }

    public function update($id){
        Request()->validate([
            'id' => 'required|min:10|max:10',
            'name' => 'required',
            'subject' => 'required',
            'address' => 'required',
            'date' => 'required',
            'birthplace' => 'required'
        ]);

        $data = [
            'id' => Request()->id,
            'name' => Request()->name,
            'subject' => Request()->subject,
            'address' => Request()->address,
            'tgl_lahir' => Request()->date,
            'tmp_lahir' => Request()->birthplace
        ];

        $this->TeacherModel->editData($id, $data);
        return redirect()->route('teacherDetail', $id)->with('pesan', 'Updated a data !1!1');
    }

    public function delete($id)
    {
        $this->TeacherModel->deleteData($id);
        return redirect()->route('teachers')->with('pesan', 'Deleted a data !1!1');

    }
}
