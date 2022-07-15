<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('r_profiles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('thumbs')->nullable();
            $table->integer('sex')->nullable();
            $table->string('address')->nullable();
            $table->integer('age')->nullable();
            $table->string('working_style')->nullable();
            $table->string('industly')->nullable();
            $table->string('occupation')->nullable();
            $table->integer('marriage')->nullable();
            $table->integer('child')->nullable();
            $table->integer('income')->nullable();
            $table->string('hobby')->nullable();
            $table->string('cosmetics')->nullable();
            $table->string('brand')->nullable();
            $table->timestamps();
            $table->softDeletesTz();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('r_profiles');
    }
};
