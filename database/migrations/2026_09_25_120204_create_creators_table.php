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
        Schema::create('creators', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
            $table->string('instagram_followed');
            $table->string('follower_count');
            $table->string('content_niche');
            $table->string('state')->default('Kerala');
            $table->string('district');
            $table->string('commercials')->nullable();
            $table->string('instagram_link');
            $table->string('contact_number');
            $table->string('ip_address')->nullable();
            $table->string('status')->default('pending');
            $table->text('notes')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('creators');
    }
};
