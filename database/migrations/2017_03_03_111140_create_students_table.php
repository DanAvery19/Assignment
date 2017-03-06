<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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

            $table->increments('id');
            $table->string('First_Name', 200)->nullable()->default(null);
            $table->string('Middle_Name', 200)->nullable()->default(null);
            $table->string('Last_Name', 200)->nullable()->default(null);
            $table->string('Course')->nullable()->default(null);
            $table->string('Contact')->nullable()->default(null);
            $table->string('Guardian_Name', 200)->nullable()->default(null);
            $table->timestamps();
            $table->softDeletes();

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
