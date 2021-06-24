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
		$table->string('name',50)->nullable()->default('NULL');
		$table->string('subject',25)->nullable()->default('NULL');
		$table->string('address',250)->nullable()->default('NULL');
		$table->string('tmp_lahir',25)->nullable()->default('NULL');

        });
    }

    public function down()
    {
        Schema::dropIfExists('teacher');
    }
}