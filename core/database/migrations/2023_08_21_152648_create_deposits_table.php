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
        Schema::create('deposits', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('user_id');
            $table->integer('booked_ticket_id');
            $table->unsignedInteger('method_code');
            $table->decimal('amount', 28, 8)->default(0);
            $table->string('method_currency', 40);
            $table->decimal('charge', 28, 8)->default(0);
            $table->decimal('rate', 28, 8)->default(0);
            $table->decimal('final_amo', 28, 8)->default(0);
            $table->text('detail')->nullable();
            $table->string('btc_amo')->nullable();
            $table->string('btc_wallet')->nullable();
            $table->string('trx', 40)->nullable();
            $table->integer('try')->default(0);
            $table->boolean('status')->default(false)->comment('1=>success, 2=>pending, 3=>cancel');
            $table->boolean('from_api')->default(false);
            $table->string('admin_feedback')->nullable();
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
        Schema::dropIfExists('deposits');
    }
};
