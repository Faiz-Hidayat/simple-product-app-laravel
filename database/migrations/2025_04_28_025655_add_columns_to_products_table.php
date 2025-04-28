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
        if (Schema::hasTable('products')) {
            Schema::table('products', function (Blueprint $table) {
                // Only add columns if they don't exist
                if (!Schema::hasColumn('products', 'name')) {
                    $table->string('name');
                }
                if (!Schema::hasColumn('products', 'price')) {
                    $table->decimal('price', 10, 2);
                }
                if (!Schema::hasColumn('products', 'description')) {
                    $table->text('description')->nullable();
                }
            });
        } else {
            // Create the table if it doesn't exist
            Schema::create('products', function (Blueprint $table) {
                $table->id();
                $table->string('name');
                $table->decimal('price', 10, 2);
                $table->text('description')->nullable();
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // We don't want to drop the table if we're just adding columns
        if (Schema::hasTable('products')) {
            Schema::table('products', function (Blueprint $table) {
                $table->dropColumn(['name', 'price', 'description']);
            });
        }
    }
};
