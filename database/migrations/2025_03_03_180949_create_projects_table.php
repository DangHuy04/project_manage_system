<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('project'); // Tên dự án
            $table->foreignId('userid')->constrained('users')->onDelete('cascade'); // Liên kết với bảng users
            $table->date('deadline'); // Hạn chót
            $table->integer('process')->default(0); // Tiến trình (0-100%)
            $table->text('description')->nullable(); // Mô tả dự án
        });
    }

    public function down()
    {
        Schema::dropIfExists('projects');
    }
};
