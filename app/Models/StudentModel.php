<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class StudentModel extends Model
{
    public function allData(){
        return DB::table('student')->get();;
    }

    public function detailData($id){
        return DB::table('student')->where('id', $id)->first();;
    }

    public function addData($data)
    {
        return DB::table('student')->insert($data);;
    }

    public function editData($id, $data)
    {
        DB::table('student')
            ->where('id', $id)
            ->update($data);;
    }

    public function deleteData($id)
    {
        DB::table('student')
            ->where('id', $id)
            ->delete();
    }
}
