<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCompetitorsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('competitors', function(Blueprint $table) {
            $table->increments('id');
            $table->text('row');
			$table->string('name');
			$table->integer('goals');
			$table->string('phone');
			$table->boolean('sponsoring');
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
        Schema::drop('competitors');
    }

}
