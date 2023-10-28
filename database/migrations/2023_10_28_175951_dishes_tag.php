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
            $table->foreignId('tag_id')
                ->references('id')
                ->on('tags');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('dishes_tag');
    }
};
