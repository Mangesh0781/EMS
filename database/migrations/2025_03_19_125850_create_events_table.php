<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
{
    Schema::create('events', function (Blueprint $table) {
        $table->id();
        $table->string('event_name');
        $table->date('date');
        $table->string('venue');
        $table->text('description');
        $table->foreignId('organizer_id')->constrained('users')->onDelete('cascade');
        $table->enum('status', ['upcoming', 'ongoing', 'completed'])->default('upcoming');
        $table->string('image_path')->nullable(); // 🆕 Add this line to store image path
        $table->timestamps();
    });
}


    public function down()
    {
        Schema::dropIfExists('events');
    }
};

