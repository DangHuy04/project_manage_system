<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->id();
            $table->string('role')->unique(); // Tên vai trò (Admin, User, etc.)
        });
    }

    public function down()
    {
        Schema::dropIfExists('roles');
    }
};
