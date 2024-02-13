<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Создает таблицу для формы обр.связи
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('feedbacks', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('appeal');
            $table->timestamps();
        });
    }

     /**
     * Удаляет таблицу для форм обр.связи
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('feedbacks');
    }
};
