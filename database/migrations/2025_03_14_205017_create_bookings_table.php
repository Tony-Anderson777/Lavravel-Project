<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// Le nom de la classe doit correspondre au nom du fichier (sans le préfixe de date)
class CreateBookingsTable extends Migration
{
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
    $table->id();
    $table->foreignId('user_id')->constrained()->onDelete('cascade');
    $table->foreignId('property_id')->constrained()->onDelete('cascade');
    $table->date('start_date');
    $table->date('end_date');
    $table->timestamps();
});
    }

    public function down()
    {
        Schema::dropIfExists('bookings');
    }
}