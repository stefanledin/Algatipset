<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddRattColumnToCompetitorsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('competitors', function(Blueprint $table) {
            $table->integer('ratt');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('competitors', function(Blueprint $table) {
            $table->drop_column('ratt');
        });
    }

}
