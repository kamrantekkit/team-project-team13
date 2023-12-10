<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddressesTable extends Migration
{
    public function up(): void
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->id();
            $table->string('first_line');
            $table->string('second_line');
            $table->string('city');
            $table->string('postcode');

            $table->foreign('id')->references('id')
                ->on('users')->onDelete('cascade');
            });
    }

    public function down(): void
    {
        Schema::dropIfExists('addresses');
    }
}
