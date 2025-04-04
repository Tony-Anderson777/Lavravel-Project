<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// Le nom de la classe doit être en PascalCase
class CreatePropertiesTable extends Migration
{
    public function up()
    {
		Schema::create('properties', function (Blueprint $table) {
    $table->id();
    $table->string('name');
    $table->text('description');
    $table->decimal('price_per_night', 8, 2);
    $table->timestamps();
});
     
    }

    public function down()
    {
        Schema::dropIfExists('properties');
    }
}