<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeacherModel extends Model
{
    public function allData(){
        return [
            [
                'id' => '123',
                'name' => 'joni',
                'subject' => 'mtk'

            ],
            [
                'id' => '123',
                'name' => 'joni',
                'subject' => 'rumah'
            ],
            [
                'id' => '123',
                'name' => 'joni',
                'subject' => 'rumah'

            ]
        ];
    }
}
