<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('chat_leads', function (Blueprint $table) {
            $table->uuid('session_token')->nullable()->unique()->after('id');
        });
    }

    public function down(): void
    {
        Schema::table('chat_leads', function (Blueprint $table) {
            $table->dropColumn('session_token');
        });
    }
};
