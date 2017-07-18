<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdTbSiteId extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('IP_BLOCK', function(Blueprint $table)
		{
			$table->integer("site_id");
            $table->dropColumn('user_id');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		$table->integer("user_id");
        $table->dropColumn('site_id');
	}

}
