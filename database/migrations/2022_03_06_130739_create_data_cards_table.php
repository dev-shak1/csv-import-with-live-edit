<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataCardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_cards', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('type')->nullable();
            $table->string('color')->nullable();
            $table->string('cost')->nullable();
            $table->string('color_cost')->nullable();
            $table->string('colorless_cost')->nullable();
            $table->string('total_cost')->nullable();
            $table->string('attack')->nullable();
            $table->string('defense')->nullable();
            $table->string('f_c')->nullable();
            $table->longText('description')->nullable();
            $table->string('set')->nullable();
            $table->string('to_be_evaluated')->nullable();
            $table->string('to_be_evaluated_in_which_deck')->nullable();
            $table->longText('comment')->nullable();
            $table->string('price')->nullable();
            $table->string('expansion')->nullable();
            $table->string('cod_carta')->nullable();
            $table->string('name_en')->nullable();
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
        Schema::dropIfExists('data_cards');
    }
}
