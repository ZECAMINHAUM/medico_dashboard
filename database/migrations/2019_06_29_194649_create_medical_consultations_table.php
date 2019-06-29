<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMedicalConsultationsTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up () {
		Schema::create('medical_consultations', function (Blueprint $table) {
			$table->bigIncrements('id');
			$table->bigInteger('fk_id_doctor')->unsigned();
			$table->bigInteger('fk_id_patient')->unsigned();
			$table->dateTime('start');
			$table->dateTime('end');
			$table->string('type', 30);
			$table->string('observations', 60);
			$table->foreign('fk_id_doctor')->references('id')->on('doctors')->onDelete('cascade');
			$table->foreign('fk_id_patient')->references('id')->on('patients')->onDelete('cascade');
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
		Schema::dropIfExists('medical_consultations');
	}
}
