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
        Schema::create('r_proms', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('r_post_id');
            $table->timestamps();

            $table->foreign('r_post_id')->references('id')->on('r_posts')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('r_proms');
    }
};