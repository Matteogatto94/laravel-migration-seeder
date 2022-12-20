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
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->string('agency', 30);
            $table->string('departure_station', 50);
            $table->string('arrival_station', 50);
            $table->float('departure_time', 4, 2);
            $table->float('arrival_time', 4, 2);
            $table->string('reference_number', 12);
            $table->tinyInteger('carriages')->unsigned()->nullable();
            $table->boolean('is_available')->default(1);
            $table->boolean('is_deleted')->default(1);
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
        Schema::dropIfExists('tickets');
    }
};
