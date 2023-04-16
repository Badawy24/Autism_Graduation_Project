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
        Schema::create('childs', function (Blueprint $table) {
            $table->id();
            $table->foreign('userId')->refrences('id')->on('users');
            $table->string('firstName');
            $table->string('lastName');
            $table->string('childImage');
            $table->date('birthDate');
            $table->string('gender');
            $table->string('childEthnicity');
            $table->integer('childJaundice');
            $table->integer('numberOfTests');
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
        Schema::dropIfExists('childs');
    }
};
