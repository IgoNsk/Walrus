<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
	  $sender = $this;
		Schema::create("user", function($table) use ($sender){
		  $table->engine = 'InnoDB';
		  // поля
      $table->integer('object_id');
      $table->string('email', 100);
      $table->string('password', 50);
      $table->string('firstName', 50);
      $table->string('lastName', 50)->nullable();
      $table->timestamp('last_enter')->nullable();
      
      // индексы
      $table->primary('object_id');
      $table->unique('email');
      $table->index('last_enter');
      
      // внешние связи
//       $table->foreign('object_id')
//         ->references('id')->on('Object')
//         ->onDelete('cascade');
    });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('user');
	}

}
