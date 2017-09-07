：<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CouponTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coupon', function (Blueprint $table) {
             $table->increments('id');
            $table->string('name');
            $table->string('card_msg');
            $table->string('card_usid');
            $table->enum('code_type', ['auto', 'custom']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return voidCoupon:
     */
    public function down()
    {
        Schema::dropIfExists('password_resets');
    }
}
