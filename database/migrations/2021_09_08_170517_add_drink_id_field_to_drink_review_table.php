<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDrinkIdFieldToDrinkReviewTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('drinkReviews', function (Blueprint $table) {
            $table->unsignedInteger('drink_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('drinkReviews', function (Blueprint $table) {
            $table->dropColumn('drink_id');
        });
    }
}
