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
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
			$table->integer('title')->nullable();
            $table->string('email')->unique();
			$table->string('verification')->default('Not Verified');
            $table->string('password');
			$table->integer('status')->nullable();
			$table->string('designation');
			$table->string('occupation');
			$table->bigInteger('number')->nullable();
			$table->string('address');
			$table->string('image')->default('default.jpg');
			$table->string('residingcity');
			$table->integer('UserType')->default('1');
			$table->float('latitude',10,7)->default(28);
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
