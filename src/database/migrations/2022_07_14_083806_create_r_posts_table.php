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
        Schema::create('r_posts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('r_category_id');
            $table->string('title');
            $table->string('thumbs')->nullable();
            $table->longText('contents')->nullable();
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
        Schema::dropIfExists('r_posts');
    }
};