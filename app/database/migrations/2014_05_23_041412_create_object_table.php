<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateObjectTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
    $sender = $this;
		Schema::create("object", function($table) use ($sender){
		  $table->engine = 'InnoDB';
		  // поля
      $table->increments('id');
      $table->integer('class_id')->unsigned();
      $table->string('caption');
      $table->boolean('is_active')->default(true);
      $table->string('name', 100)->nullable();
      $table->timestamps();
      
      // индексы
      $table->index('class_id');
      $table->index('caption');
      $table->index('name');
    });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('object');
	}
}
