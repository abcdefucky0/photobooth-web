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
        Schema::create('booth_sessions', function (Blueprint $table) {
            $table->id();
            $table->string('session-code')->unique();
            $table->foreignId('template_id')->nullable()->constrained('templates')->nullOnDelete();
            $table->enum('status', ['waiting_payment', 'active', 'completed', 'expired'])->default('waiting_payment');
            $table->timestamp('started_at')->nullable();
            $table->string('filter')->nullable();
            $table->timestamp('expired_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('booth_sessions');
    }
};
