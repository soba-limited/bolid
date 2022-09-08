
    <?php
        use Illuminate\Support\Facades\Schema;
        use Illuminate\Database\Schema\Blueprint;
        use Illuminate\Database\Migrations\Migration;
        
        class CreateLCategorysTable extends Migration
        {
            /**
             * Run the migrations.
             *
             * @return void
             */
            public function up()
            {
                Schema::create("l_categorys", function (Blueprint $table) {

						$table->increments('id');
						$table->string('name',100)->nullable();
						$table->string('slug',100)->nullable();
						$table->integer('depth');
						$table->integer('parent_id')->nullable();
						$table->timestamps();
						$table->softDeletes();



						// ----------------------------------------------------
						// -- SELECT [l_categorys]--
						// ----------------------------------------------------
						// $query = DB::table("l_categorys")
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
                Schema::dropIfExists("l_categorys");
            }
        }
    