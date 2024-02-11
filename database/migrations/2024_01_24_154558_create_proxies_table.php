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
        Schema::create('proxies', function (Blueprint $table) {
            $table->id();
            $table->string('proxytext')->nullable();
            $table->string('status')->nullable();
            $table->string('networkType')->nullable();
            $table->json('whitelistedIps')->nullable();
            $table->string('username')->nullable();
            $table->string('password')->nullable();
            $table->string('publicIp')->nullable();
            $table->string('connectIp')->nullable();
            $table->integer('httpPort')->nullable();
            $table->integer('httpsPort')->nullable();
            $table->integer('socks5Port')->nullable();
            $table->string('proxyType')->nullable();
            $table->timestamp('createdAt')->nullable();
            $table->timestamp('expiresAt')->nullable();
            $table->json('metadata')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('proxies');
    }
};
