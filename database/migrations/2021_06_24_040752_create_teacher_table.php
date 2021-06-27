<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeacherTable extends Migration
{
    public function up()
    {
        Schema::create('teacher', function (Blueprint $table) {

		$table->string('id',10);
		$table->string('name',50)->nullable();
		$table->string('subject',25)->nullable();
		$table->string('address',250)->nullable();
		$table->date('tgl_lahir')->nullable();
		$table->string('tmp_lahir',25)->nullable();

        });
    }

    public function down()
    {
        Schema::dropIfExists('teacher');
    }
}
