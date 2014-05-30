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
		  // ����
      $table->integer('object_id');
      $table->string('email', 100);
      $table->string('password', 50);
      $table->string('firstName', 50);
      $table->string('lastName', 50)->nullable();
      $table->timestamp('last_enter')->nullable();
      
      // �������
      $table->primary('object_id');
      $table->unique('email');
      $table->index('last_enter');
      
      // ������� �����
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
