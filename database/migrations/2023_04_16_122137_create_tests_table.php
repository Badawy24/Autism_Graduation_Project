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
        Schema::create('tests', function (Blueprint $table) {
            $table->id();
            $table->foreign('childId')->refrences('id')->on('childs');
            $table->string('testImage');
            $table->integer('a1');
            $table->integer('a2');
            $table->integer('a3');
            $table->integer('a4');
            $table->integer('a5');
            $table->integer('a6');
            $table->integer('a7');
            $table->integer('a8');
            $table->integer('a9');
            $table->integer('a10');
            $table->string('whoCompletesTheTest');
            $table->boolean('userFamilyMemberWith');
            $table->integer('testScore');
            $table->boolean('testReasult');
            $table->timestamps('testTime');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tests');
    }
};
