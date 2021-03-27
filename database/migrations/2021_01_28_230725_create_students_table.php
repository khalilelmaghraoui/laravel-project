<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('First_name');
            $table->string('Last_name');
            $table->string('CIN');
            $table->string('CNE');
            $table->string('exampleFormControlSelect2');
            $table->string('email');
            $table->timestamp('email_verified_at')->nullable();
            $table->date('datetimepicker1');
            $table->string('telephone');
            $table->string('exampleFormControlSelect1');
            $table->string('exampleFormControlSelect3');
            $table->string('photo');
            $table->rememberToken();
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
        Schema::dropIfExists('students');
    }
}
