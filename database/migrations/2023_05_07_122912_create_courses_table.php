<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('courseTitleEn')->nullable();
            $table->string('courseTitleAr')->nullable();
            $table->string('courseDescriptionEn')->nullable();
            $table->string('courseDescriptionAr')->nullable();
            $table->string('courseImage')->nullable();
            $table->string('courseType')->nullable();
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
        Schema::dropIfExists('courses');
    }
};
