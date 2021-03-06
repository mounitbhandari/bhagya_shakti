<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResultMastersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('result_masters', function (Blueprint $table) {
            $table->id();

            $table->foreignId('draw_master_id')->references('id')->on('draw_masters')->onDelete('cascade');
            $table->foreignId('number_combination_id')->references('id')->on('number_combinations')->onDelete('cascade');

            $table->date('game_date');

            $table->tinyInteger('inforce')->default(1);
            $table->timestamps();
            $table->unique(['draw_master_id', 'game_date']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('result_masters');
    }
}
