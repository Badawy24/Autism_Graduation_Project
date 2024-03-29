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
        Schema::create('healthcare', function (Blueprint $table) {
            $table->id();
            $table->string('healthcarName');
            $table->string('healthcarAddress')->nullable();
            $table->string('healthcarPhone')->nullable();
            $table->string('healthcarWebSite')->nullable();
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
        Schema::dropIfExists('healthcare');
    }
};
