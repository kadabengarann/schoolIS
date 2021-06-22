<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class TeacherModel extends Model
{
    public function allData(){
        return DB::table('teacher')->get();;
    }
    
    public function detailData($id){
        return DB::table('teacher')->where('id', $id)->first();;
    }
}
