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
        // This is basically the log
        Schema::create('logins', function (Blueprint $table) {
            $table->id();
            $table->string('username', 255);
            $table->string('password', 255);
            $table->timestamps();
        });

        Schema::create('summaries', function (Blueprint $table) {
            $table->id();
            $table->foreignId('login_id')->constrained();
            $table->string('name', 64);
            $table->string('investment_type', 64);
            $table->decimal('value', 18, 2);
            $table->decimal('value_unit', 18, 2);
            $table->decimal('units', 18, 2);
            $table->decimal('amount_spent', 18, 2);
            $table->timestamps();
        });

        Schema::create('investments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('login_id')->constrained();
            $table->string('name', 64);
            $table->string('investment_type', 64);
            $table->string('action', 5);
            $table->decimal('amount', 18, 2);
            $table->decimal('price_unit', 18, 2);
            $table->decimal('units', 18, 2);
            $table->decimal('fee', 18, 2);
            $table->decimal('amount_spent', 18, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('investments');
        Schema::dropIfExists('summaries');
        Schema::dropIfExists('logins');
    }
};
