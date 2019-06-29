<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrescriptionsTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up () {
		Schema::create('prescriptions', function (Blueprint $table) {
			$table->bigIncrements('id');
			$table->bigInteger('fk_id_medical_consultations')->unsigned();
			$table->date('shelf_life');
			$table->string('drug_name');
			$table->dateTime('last_alert');
			$table->foreign('fk_id_medical_consultations')->references('id')->on('medical_consultations')->onDelete('cascade');
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
		Schema::dropIfExists('prescriptions');
	}
}
