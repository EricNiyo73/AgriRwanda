<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agronomies', function (Blueprint $table) {
            $table->id();
             $table->string('district');
             $table->string('category');
            $table->string('plant_name');
            $table->string('video'); 
            $table->text('additional_info');
            $table->text('in_charge');
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
        Schema::dropIfExists('agronomies');
    }
};
