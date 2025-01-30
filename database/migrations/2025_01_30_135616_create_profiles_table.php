<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->string('headmaster_name'); 
            $table->string('headmaster_photo')->nullable();
            $table->text('welcome_message');
            $table->text('description');
            $table->text('visi');
            $table->text('misi');
            $table->string('email')->nullable(); 
            $table->string('phone')->nullable(); 
            $table->text('address')->nullable(); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profiles');
    }
};