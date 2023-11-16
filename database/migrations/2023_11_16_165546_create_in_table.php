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
        Schema::create('in', function (Blueprint $table) {
            $table->id();
            $table->string('order_number')->nullable();
            $table->string('name_SH')->nullable();
            $table->string('name_EN')->nullable();
            $table->string('manufacturer')->nullable();
            $table->string('model')->nullable();
            $table->string('location')->nullable();
            $table->string('sap_number')->nullable();
            $table->string('use')->nullable();
            $table->string('unit')->nullable();
            $table->integer('stock_count')->nullable();
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
        Schema::dropIfExists('in');
    }
};
