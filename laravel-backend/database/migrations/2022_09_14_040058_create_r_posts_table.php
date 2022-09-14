
    <?php
        use Illuminate\Support\Facades\Schema;
        use Illuminate\Database\Schema\Blueprint;
        use Illuminate\Database\Migrations\Migration;
        
        class CreateRPostsTable extends Migration
        {
            /**
             * Run the migrations.
             *
             * @return void
             */
            public function up()
            {
                Schema::create("r_posts", function (Blueprint $table) {

						$table->bigIncrements('id');
						$table->bigInteger('user_id')->nullable()->unsigned();
						$table->integer('r_category_id')->nullable()->unsigned();
						$table->bigInteger('r_series_id')->nullable()->unsigned();
						$table->string('title',255)->nullable();
						$table->string('thumbs',255)->nullable();
						$table->string('mv',255)->nullable();
						$table->string('sub_title',255)->nullable();
						$table->text('discription')->nullable();
						$table->longText('content')->nullable();
						$table->integer('state')->nullable();
						$table->timestamps();
						$table->softDeletes();
						//$table->foreign("user_id")->references("id")->on("users");
						//$table->foreign("r_category_id")->references("id")->on("r_categorys");
						//$table->foreign("r_series_id")->references("id")->on("r_series");



						// ----------------------------------------------------
						// -- SELECT [r_posts]--
						// ----------------------------------------------------
						// $query = DB::table("r_posts")
						// ->leftJoin("users","users.id", "=", "r_posts.user_id")
						// ->leftJoin("r_categorys","r_categorys.id", "=", "r_posts.r_category_id")
						// ->leftJoin("r_series","r_series.id", "=", "r_posts.r_series_id")
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
                Schema::dropIfExists("r_posts");
            }
        }
    