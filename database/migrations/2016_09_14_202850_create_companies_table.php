<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->increments('id');		
            $table->string('name');
			$table->string('name_sat');
			$table->string('rfc');
			$table->string('city');
			$table->string('direction');
			$table->string('type');
			$table->string('number_worker');
			$table->string('typology');
			$table->text('description');
			$table->string('web');
			$table->string('logo');
			$table->string('contact_name');
			$table->string('position');
			$table->string('phone');
			$table->string('cellphone');
			$table->integer('country_id')->unsigned();
            $table->foreign('country_id')->references('id')->on('countries');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('companies');
    }
}
