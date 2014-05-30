<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClassTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
    $sender = $this;
		Schema::create("class", function($table) use ($sender){
		  $table->engine = 'InnoDB';
		  // поля
      $table->increments('id');
      $table->string('caption');
      $table->string('class_name');
      $table->text('description')->nullable();
      
      // индексы
      $table->unique('class_name');
    });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('class');
	}
}
