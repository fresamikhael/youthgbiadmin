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
        Schema::create('service_schedules', function (Blueprint $table) {
            $table->id();

            $table->date('date');
            $table->string('type');
            $table->string('preacher');
            $table->string('kir')->nullable();
            $table->string('worship_leader');
            $table->string('singer1')->nullable();
            $table->string('singer2')->nullable();
            $table->string('guitarist')->nullable();
            $table->string('bassist')->nullable();
            $table->string('keyboardist')->nullable();
            $table->string('drummer')->nullable();
            $table->string('prayer');

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
        Schema::dropIfExists('service_schedule');
    }
};
