<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdTbRecommendAdminid extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('RECOMMEND', function(Blueprint $table)
		{
			$table->string("admin_id", 50)->after('site_id');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('RECOMMEND', function(Blueprint $table)
		{
            $table->dropColumn('admin_id');
		});
	}

}
