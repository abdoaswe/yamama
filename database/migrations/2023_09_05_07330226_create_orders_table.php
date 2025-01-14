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
    Schema::create('orders', function (Blueprint $table) {
      $table->id();
      $table->decimal('total_Doler', 10, 2);
      $table->decimal('total_Lera', 10, 2);
      $table->string('notes')->nullable();
      $table->tinyText('accept');
      $table->tinyText('wait')->default(1);
      $table->integer('status')->default(0);
      $table->unsignedBigInteger('user_id');
      $table->foreign('user_id')->references('id')->on('users');

      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('orders');
  }
};
