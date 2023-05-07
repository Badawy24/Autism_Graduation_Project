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
            $table->unsignedBigInteger('childId');
            $table->foreign('childId')->references('id')->on('childs');
            $table->string('testImage')->nullable();
            $table->boolean('a1')->nullable();
            $table->boolean('a2')->nullable();
            $table->boolean('a3')->nullable();
            $table->boolean('a4')->nullable();
            $table->boolean('a5')->nullable();
            $table->boolean('a6')->nullable();
            $table->boolean('a7')->nullable();
            $table->boolean('a8')->nullable();
            $table->boolean('a9')->nullable();
            $table->boolean('a10')->nullable();
            $table->string('whoCompletesTheTest')->nullable();
            $table->boolean('userFamilyMemberWith')->nullable();
            $table->boolean('testResult')->nullable();
            $table->timestamp('testTime')->nullable();
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
        Schema::dropIfExists('tests');
    }
};
