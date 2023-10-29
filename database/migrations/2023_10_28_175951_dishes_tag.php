<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    public function up(): void
    {
        Schema::create('dishes_tag', function (Blueprint $table) {
            $table->foreignId('dishes_id')
                ->references('id')
                ->on('dishes');
            $table->foreignId('ingredient_tag_id')
                ->references('id')
                ->on('ingredients_tags');
            $table->foreignId('time_tag_id')
                ->references('id')
                ->on('times_tags');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('dishes_tag');
    }
};
