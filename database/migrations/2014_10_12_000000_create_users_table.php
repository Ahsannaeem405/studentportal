<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('role')->nullable();
            $table->string('number')->nullable();
            $table->string('password');


            $table->string('mon_start_time')->nullable();
            $table->string('mon_end_time')->nullable();
            $table->string('tue_start_time')->nullable();
            $table->string('tue_end_time')->nullable();

            $table->string('wed_start_time')->nullable();
            $table->string('wed_end_time')->nullable();

            $table->string('thu_start_time')->nullable();
            $table->string('thu_end_time')->nullable();

            $table->string('fri_start_time')->nullable();
            $table->string('fri_end_time')->nullable();

            $table->string('sat_start_time')->nullable();
            $table->string('sat_end_time')->nullable();

            $table->string('sun_start_time')->nullable();
            $table->string('sun_end_time')->nullable();

            $table->string('img')->nullable();




            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
