<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('transports', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->string('type'); // E.g., "bus", "train", "bicycle"
        $table->string('company')->nullable(); // E.g., transport company name
        $table->string('location');
        $table->date('date');
        $table->text('description')->nullable();
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transports');
    }
};
