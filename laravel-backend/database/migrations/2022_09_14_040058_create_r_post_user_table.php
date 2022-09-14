
    <?php
        use Illuminate\Support\Facades\Schema;
        use Illuminate\Database\Schema\Blueprint;
        use Illuminate\Database\Migrations\Migration;
        
        class CreateRPostUserTable extends Migration
        {
            /**
             * Run the migrations.
             *
             * @return void
             */
            public function up()
            {
                Schema::create("r_post_user", function (Blueprint $table) {

						$table->bigIncrements('id');
						$table->bigInteger('user_id')->nullable()->unsigned();
						$table->bigInteger('r_post_id')->nullable()->unsigned();
						$table->timestamps();
						//$table->foreign("user_id")->references("id")->on("users");
						//$table->foreign("r_post_id")->references("id")->on("r_posts");



						// ----------------------------------------------------
						// -- SELECT [r_post_user]--
						// ----------------------------------------------------
						// $query = DB::table("r_post_user")
						// ->leftJoin("users","users.id", "=", "r_post_user.user_id")
						// ->leftJoin("r_posts","r_posts.id", "=", "r_post_user.r_post_id")
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
                Schema::dropIfExists("r_post_user");
            }
        }
    