<?php
        use Illuminate\Support\Facades\Schema;
        use Illuminate\Database\Schema\Blueprint;
        use Illuminate\Database\Migrations\Migration;

        class CreateLSeriesTable extends Migration
        {
            /**
             * Run the migrations.
             *
             * @return void
             */
            public function up()
            {
                Schema::create("l_series", function (Blueprint $table) {
                    $table->increments('id');
                    $table->string('name', 128)->nullable();
                    $table->timestamps();


                    // ----------------------------------------------------
                    // -- SELECT [l_series]--
                    // ----------------------------------------------------
                    // $query = DB::table("l_series")
                    // ->get();
                    // dd($query); //For checking
                });
            }

            /**
             * Reverse the migrations.
             *
             * @return void
             */
            public function down()
            {
                Schema::dropIfExists("l_series");
            }
        }