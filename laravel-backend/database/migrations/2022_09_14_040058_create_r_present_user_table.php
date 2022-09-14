
    <?php
        use Illuminate\Support\Facades\Schema;
        use Illuminate\Database\Schema\Blueprint;
        use Illuminate\Database\Migrations\Migration;
        
        class CreateRPresentUserTable extends Migration
        {
            /**
             * Run the migrations.
             *
             * @return void
             */
            public function up()
            {
                Schema::create("r_present_user", function (Blueprint $table) {

						$table->increments('id');
						$table->bigInteger('user_id')->nullable()->unsigned();
						$table->integer('r_present_id')->nullable()->unsigned();
						$table->text('hobby')->nullable();
						$table->text('brand')->nullable();
						$table->text('cosmetic')->nullable();
						$table->timestamps();
						//$table->foreign("user_id")->references("id")->on("users");
						//$table->foreign("r_present_id")->references("id")->on("r_presents");



						// ----------------------------------------------------
						// -- SELECT [r_present_user]--
						// ----------------------------------------------------
						// $query = DB::table("r_present_user")
						// ->leftJoin("users","users.id", "=", "r_present_user.user_id")
						// ->leftJoin("r_presents","r_presents.id", "=", "r_present_user.r_present_id")
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
                Schema::dropIfExists("r_present_user");
            }
        }
    