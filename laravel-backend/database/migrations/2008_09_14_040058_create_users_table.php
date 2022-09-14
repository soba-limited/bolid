
    <?php
        use Illuminate\Support\Facades\Schema;
        use Illuminate\Database\Schema\Blueprint;
        use Illuminate\Database\Migrations\Migration;
        
        class CreateUsersTable extends Migration
        {
            /**
             * Run the migrations.
             *
             * @return void
             */
            public function up()
            {
                Schema::create("users", function (Blueprint $table) {

						$table->bigIncrements('id');
						$table->string('name',255)->nullable();
						$table->string('email',255)->nullable();
						$table->timestamp('email_verified_at')->nullable();
						$table->string('password',255)->nullable();
						$table->string('remember_token',100)->nullable();
						$table->integer('account_type');
						$table->bigInteger('r_profile_id')->nullable()->unsigned();
						$table->bigInteger('c_profile_id')->nullable();
						$table->bigInteger('d_profile_id')->nullable();
						$table->integer('point');
						$table->timestamps();
						

                    //*********************************
                    // Foreign KEY [ Uncomment if you want to use!! ]
                    //*********************************
                        //$table->foreign("r_profile_id")->references("id")->on("r_profiles");



						// ----------------------------------------------------
						// -- SELECT [users]--
						// ----------------------------------------------------
						// $query = DB::table("users")
						// ->leftJoin("r_profiles","r_profiles.id", "=", "users.r_profile_id")
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
                Schema::dropIfExists("users");
            }
        }
    