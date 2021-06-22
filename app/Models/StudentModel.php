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
}
