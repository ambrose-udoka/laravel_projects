<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClubsponsorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clubsponsors', function (Blueprint $table) {
            $table->bigIncrements('clubsponsor_id');
            $table->foreignId('sponsor_id')->constrained('sponsors')->references('sponsor_id');
            $table->string('season');
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
        Schema::dropIfExists('clubsponsors');
    }
}
