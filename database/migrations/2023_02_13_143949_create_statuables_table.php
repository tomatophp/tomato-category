<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('statuables', function (Blueprint $table) {
            $table->foreignId("status_id")->references('id')->on('status')->onDelete('cascade');

            $table->unsignedBigInteger("statuables_id");
            $table->string("statuables_type");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('statuables');
    }
};
