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
        Schema::create('trips', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title')->nullable();
            $table->unsignedInteger('fleet_type_id')->default(0);
            $table->unsignedInteger('vehicle_route_id')->default(0);
            $table->unsignedInteger('schedule_id')->default(0);
            $table->unsignedInteger('start_from')->default(0);
            $table->unsignedInteger('end_to')->default(0);
            $table->string('day_off')->nullable();
            $table->tinyInteger('status')->default(1);
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
        Schema::dropIfExists('trips');
    }
};
