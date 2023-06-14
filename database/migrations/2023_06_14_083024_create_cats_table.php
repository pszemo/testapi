<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('cats', function (Blueprint $table) {
            $table->increments('id', true);
            $table->string('name');
            $table->integer('age');
            $table->string('color');
            $table->integer('office_id')->unsigned();
            $table->boolean('ready_to_adopt')->default(false);
            $table->timestamps();
            $table->foreign('office_id')->references('id')->on('offices');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cats');
    }
};
