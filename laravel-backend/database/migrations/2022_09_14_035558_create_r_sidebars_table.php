
    <?php
        use Illuminate\Support\Facades\Schema;
        use Illuminate\Database\Schema\Blueprint;
        use Illuminate\Database\Migrations\Migration;
        
        class CreateRSidebarsTable extends Migration
        {
            /**
             * Run the migrations.
             *
             * @return void
             */
            public function up()
            {
                Schema::create("r_sidebars", function (Blueprint $table) {

						$table->increments('id');
						$table->string('title',100)->nullable();
						$table->longText('content')->nullable();
						$table->integer('order');
						$table->integer('state');
						$table->timestamps();



						// ----------------------------------------------------
						// -- SELECT [r_sidebars]--
						// ----------------------------------------------------
						// $query = DB::table("r_sidebars")
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
                Schema::dropIfExists("r_sidebars");
            }
        }
    