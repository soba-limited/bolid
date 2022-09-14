
    <?php
        use Illuminate\Support\Facades\Schema;
        use Illuminate\Database\Schema\Blueprint;
        use Illuminate\Database\Migrations\Migration;
        
        class CreateRCategorysTable extends Migration
        {
            /**
             * Run the migrations.
             *
             * @return void
             */
            public function up()
            {
                Schema::create("r_categorys", function (Blueprint $table) {

						$table->increments('id');
						$table->string('name',100)->nullable();
						$table->string('slug',100)->nullable();
						$table->integer('depth');
						$table->integer('parent_id')->nullable();
						$table->timestamps();
						$table->softDeletes();



						// ----------------------------------------------------
						// -- SELECT [r_categorys]--
						// ----------------------------------------------------
						// $query = DB::table("r_categorys")
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
                Schema::dropIfExists("r_categorys");
            }
        }
    