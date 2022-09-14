
    <?php
        use Illuminate\Support\Facades\Schema;
        use Illuminate\Database\Schema\Blueprint;
        use Illuminate\Database\Migrations\Migration;
        
        class CreateRPickupsTable extends Migration
        {
            /**
             * Run the migrations.
             *
             * @return void
             */
            public function up()
            {
                Schema::create("r_pickups", function (Blueprint $table) {

						$table->bigIncrements('id');
						$table->bigInteger('r_post_id')->nullable()->unsigned();
						$table->timestamps();
						//$table->foreign("r_post_id")->references("id")->on("r_posts");



						// ----------------------------------------------------
						// -- SELECT [r_pickups]--
						// ----------------------------------------------------
						// $query = DB::table("r_pickups")
						// ->leftJoin("r_posts","r_posts.id", "=", "r_pickups.r_post_id")
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
                Schema::dropIfExists("r_pickups");
            }
        }
    