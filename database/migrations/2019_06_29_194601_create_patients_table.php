<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientsTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up () {
		Schema::create('patients', function (Blueprint $table) {
			$table->bigIncrements('id');
			$table->bigInteger('fk_id_doctor')->unsigned();
			$table->string('name', 30);
			$table->date('birthday');
			$table->string('phone');
			$table->foreign('fk_id_doctor')->references('id')->on('doctors')->onDelete('cascade');
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
		Schema::dropIfExists('patients');
	}
}
