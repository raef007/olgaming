<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTbIpBlock extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('IP_BLOCK', function(Blueprint $table)
		{
			$table->increments('ipb_seq');
			$table->integer('user_id');
			$table->string('ip_num', 20);
			$table->text('reason');
			$table->char('status', 1);
			$table->string('reg_date', 8);
			$table->string('reg_datetime', 14);
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('IP_BLOCK');
	}

}
