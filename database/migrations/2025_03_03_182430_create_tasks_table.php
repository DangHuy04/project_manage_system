<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('projectid');
            $table->unsignedBigInteger('userid');
            $table->string('mission');
            $table->integer('status')->default(0); // 0: chưa làm, 1: đang làm, 2: hoàn thành
            $table->text('description')->nullable();

            $table->foreign('projectid')->references('id')->on('projects')->onDelete('cascade');
            $table->foreign('userid')->references('id')->on('users')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('tasks');
    }
};
