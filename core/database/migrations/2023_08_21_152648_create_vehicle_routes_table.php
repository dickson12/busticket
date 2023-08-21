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
        Schema::create('vehicle_routes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 60)->nullable();
            $table->unsignedInteger('start_from')->default(0);
            $table->unsignedInteger('end_to')->nullable()->default(0);
            $table->text('stoppages')->nullable();
            $table->string('distance', 40)->nullable();
            $table->string('time', 40)->nullable();
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
        Schema::dropIfExists('vehicle_routes');
    }
};
