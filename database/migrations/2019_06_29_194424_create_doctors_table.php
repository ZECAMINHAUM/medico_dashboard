<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDoctorsTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up () {
		Schema::create('doctors', function (Blueprint $table) {
			$table->bigIncrements('id');
			$table->bigInteger('fk_id_user')->unsigned();
			$table->string('cpf', 20);
			$table->string('crm', 20);
			$table->foreign('fk_id_user')->references('id')->on('users')->onDelete('cascade');
			$table->timestamps();
			$table->softDeletes();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down () {
		Schema::dropIfExists('doctors');
	}
}
