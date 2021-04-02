<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToGridTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('grid', function(Blueprint $table)
		{
			$table->foreign('link_id', 'links_ibfk_1')->references('id')->on('links')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('grid', function(Blueprint $table)
		{
			$table->dropForeign('links_ibfk_1');
		});
	}
}
