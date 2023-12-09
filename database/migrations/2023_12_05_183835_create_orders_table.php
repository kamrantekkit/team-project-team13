<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->nullable();
            $table->string('email');
            $table->integer('price');
            $table->string('payment_id');
            $table->timestamp('created_at')->default(now());
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
}
