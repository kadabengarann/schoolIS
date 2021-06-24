<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentTable extends Migration
{
    public function up()
    {
        Schema::create('student', function (Blueprint $table) {

		$table->string('id',10);
		$table->string('name',50)->nullable()->default('NULL');
		$table->string('alamat',250)->nullable()->default('NULL');
		$table->string('house',25)->nullable()->default('NULL');
		$table->string('year',4)->nullable()->default('NULL');
		$table->date('tgl_lahir')->nullable()->default('NULL');
		$table->string('tmp_lahir',25)->nullable()->default('NULL');

        });
    }

    public function down()
    {
        Schema::dropIfExists('student');
    }
}