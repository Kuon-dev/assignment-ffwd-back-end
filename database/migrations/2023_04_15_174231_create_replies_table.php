<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
  /**
   * Run the migrations.
   */
  public function up(): void {
    Schema::create("replies", function (Blueprint $table) {
      $table->id();
      $table->unsignedBigInteger("user_id");
      $table->unsignedBigInteger("comment_id");
      //$table->foreignId('comment_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
      //$table->foreignId('user_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
      $table->text("message");
      $table->boolean("is_deleted_by_user");
      $table->boolean("is_removed_by_admin");
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void {
    Schema::dropIfExists("replies");
  }
};
