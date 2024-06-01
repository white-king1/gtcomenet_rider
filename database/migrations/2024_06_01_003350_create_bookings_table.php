<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->integer('booker_id');
            $table->string('image')->nullable();
            $table->string('location')->nullable();
            $table->string('item_description');
            $table->integer('quantity');
            $table->enum('status', ['pending', 'delivered', 'completed', 'cancelled',])->default('pending');
            $table->string('rider_id')->nullable();
            $table->string('booking_id')->nullable();

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
        Schema::dropIfExists('bookings');
    }
}
