<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdTbLevelBetSort extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('LEVEL_BET_MONEY', function(Blueprint $table)
		{
			$table->tinyInteger("sort")->after('level');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('LEVEL_BET_MONEY', function(Blueprint $table)
		{
            $table->dropColumn('sort');
		});
	}

}
