<?php
declare(strict_types=1);

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
        Schema::create('dishes_menu', function (Blueprint $table) {
            $table->foreignId('menu_id')
                ->references('id')
                ->cascadeOnDelete()
                ->on('menu');
            $table->foreignId('dishes_id')
                ->references('id')
                ->cascadeOnDelete()
                ->on('dishes');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dishes_menu');
    }
};
