<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDateToTrainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // creo un collegamento con una migrate gia creata per aggoungere delle colonne
        Schema::table('trains', function (Blueprint $table) {
            //
            $table->date('departures_date')->after('departures');
            $table->date('arrivals_date')->after('arrivals');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('trains', function (Blueprint $table) {
            //
        });
    }
}
