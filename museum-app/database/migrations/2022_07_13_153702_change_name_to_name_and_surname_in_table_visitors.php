<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeNameToNameAndSurnameInTableVisitors extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('name_and_surname_in_table_visitors', function (Blueprint $table) {
            $table->renameColumn('name', 'name_and_surname');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('name_and_surname_in_table_visitors', function (Blueprint $table) {
            $table->renameColumn('name_and_surname', 'name');
        });
    }
}
