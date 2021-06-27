<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StudentModel;
use App\Models\TeacherModel;
use Illuminate\Support\Facades\DB;


class AdminController extends Controller
{
    public function __construct()
    {
        $this -> StudentModel = new StudentModel();
        $this -> TeacherModel = new TeacherModel();
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data = [
            'student' => $this->StudentModel->count(),
            'teacher' => $this->TeacherModel->count(),
            'gryffindor' => DB::table('student')->where('house', '<=', 'Gryffindor')->get()->count(),
            'hufflepuff' => DB::table('student')->where('house', '<=', 'Hufflepuff')->get()->count(),
            'ravenclaw' => DB::table('student')->where('house', '<=', 'Ravenclaw')->get()->count(),
            'slytherin' => DB::table('student')->where('house', '<=', 'Slytherin')->get()->count()

        ];
        return view('admin.v_index', $data);
    }
}
