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
        Schema::create('problems', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('book_id');
            $table->foreign('book_id')->references('id')->on('books')->onDelete('cascade');
            $table->char('proplem_table_id',3);
            $table->char('problem_1',10);
            $table->char('problem_2',10);
            $table->char('problem_3',10);
            $table->char('problem_4',10);
            $table->char('problem_5',10);
            $table->char('problem_6',10);
            $table->char('problem_7',10);
            $table->char('problem_8',10);
            $table->char('problem_9',10);
            $table->char('problem_10',10);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('problems');
    }
};
