<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddClubIdToClubsponsors extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('clubsponsors', function (Blueprint $table) {
           $table->foreignId('club_id')->constrained('clubs')->references('club_id'); //
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('clubsponsors', function (Blueprint $table) {
           $table->dropColumn('club_id'); //
        });
    }
}
