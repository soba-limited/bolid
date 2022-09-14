
    <?php
        use Illuminate\Support\Facades\Schema;
        use Illuminate\Database\Schema\Blueprint;
        use Illuminate\Database\Migrations\Migration;
        
        class CreateRSeriesTable extends Migration
        {
            /**
             * Run the migrations.
             *
             * @return void
             */
            public function up()
            {
                Schema::create("r_series", function (Blueprint $table) {

						$table->increments('id');
						$table->string('name',100)->nullable();
						$table->timestamps();



						// ----------------------------------------------------
						// -- SELECT [r_series]--
						// ----------------------------------------------------
						// $query = DB::table("r_series")
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
                Schema::dropIfExists("r_series");
            }
        }
    