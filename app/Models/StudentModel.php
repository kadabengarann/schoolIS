<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentModel extends Model
{
    public function allData(){
        return [
            [
                'id' => '123',
                'name' => 'joni',
                'house' => 'rumah',
                'year' => '3000'

            ],
            [
                'id' => '123',
                'name' => 'joni',
                'house' => 'rumah',
                'year' => '3000'

            ],
            [
                'id' => '123',
                'name' => 'joni',
                'house' => 'rumah',
                'year' => '3000'

            ]
        ];
    }
}
