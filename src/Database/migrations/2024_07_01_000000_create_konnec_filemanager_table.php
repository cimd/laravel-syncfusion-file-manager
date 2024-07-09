<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('konnec_filemanager', function (Blueprint $table) {
            $table->id();
            $table->string('disk', 45)->index();
            $table->string('path', 191);
            $table->string('name', 191);
            $table->string('extension', 5);
            $table->unsignedBigInteger('size')->default(0);
            $table->boolean('hasChild')->default(false);
            $table->boolean('isFile')->default(false);
            $table->string('type', 5)->nullable();
            $table->unsignedBigInteger('parentId')->nullable();
            $table->timestamps();
            $table->timestamp('deleted_at')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('konnec_filemanager');
    }
};
