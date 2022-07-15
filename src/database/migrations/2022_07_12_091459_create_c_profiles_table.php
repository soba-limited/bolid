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
        Schema::create('c_profiles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('thumbs')->nullable();
            $table->longText('profile')->nullable();
            $table->integer('c_type_id')->nullable();
            $table->integer('c_c_profile_id')->nullable();
            $table->integer('c_m_profile_id')->nullable();
            $table->integer('meishi_id')->nullable();
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
        Schema::dropIfExists('c_profiles');
    }
};
