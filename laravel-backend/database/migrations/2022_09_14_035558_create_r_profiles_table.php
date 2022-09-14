
    <?php
        use Illuminate\Support\Facades\Schema;
        use Illuminate\Database\Schema\Blueprint;
        use Illuminate\Database\Migrations\Migration;
        
        class CreateRProfilesTable extends Migration
        {
            /**
             * Run the migrations.
             *
             * @return void
             */
            public function up()
            {
                Schema::create("r_profiles", function (Blueprint $table) {

						$table->bigIncrements('id');
						$table->string('nicename',255)->nullable();
						$table->string('sex')->nullable();
						$table->string('zipcode',16)->nullable();
						$table->string('zip',8)->nullable();
						$table->string('other_address',255)->nullable();
						$table->integer('age')->nullable();
						$table->string('work_type',16)->nullable();
						$table->string('industry',100)->nullable();
						$table->string('occupation',100)->nullable();
						$table->integer('marriage')->nullable();
						$table->integer('child')->nullable();
						$table->string('income',50)->nullable();
						$table->timestamps();
						$table->softDeletes();



						// ----------------------------------------------------
						// -- SELECT [r_profiles]--
						// ----------------------------------------------------
						// $query = DB::table("r_profiles")
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
                Schema::dropIfExists("r_profiles");
            }
        }
    