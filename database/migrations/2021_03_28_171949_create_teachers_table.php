<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->string('fullname', 100);
            $table->string('designation',100);
            $table->string('bloodgroup', 20)->nullable();
            $table->date('DOB');
            $table->string('gender', 20);
			$table->string('email', 100)->unique();
			$table->string('phoneno', 20)->nullable();
			$table->string('password', 50)->nullable();
			$table->text('image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('teachers');
    }
}
