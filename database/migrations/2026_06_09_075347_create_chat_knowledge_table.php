<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('chat_knowledge', function (Blueprint $table) {
            $table->id();
            $table->enum('type', ['faq', 'case_study', 'service', 'pricing']);
            $table->string('title');
            $table->text('keywords')->nullable();
            $table->longText('content');
            $table->boolean('is_active')->default(true);
            $table->integer('priority')->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('chat_knowledge');
    }
};
