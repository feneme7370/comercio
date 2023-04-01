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
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->constrained()->onDelete('cascade');
            $table->string('title');
            $table->longText('description');
            
            $table->string('city')->nullable(); //agregar
            $table->string('adress');
            
            $table->float('price', 12, 2);
            $table->string('money'); //agregar

            $table->integer('number_bedrooms');
            $table->integer('number_wc');
            $table->tinyInteger('garage')->nullable();
            $table->tinyInteger('children')->nullable(); //agregar
            $table->tinyInteger('pets')->nullable(); //agregar
            $table->tinyInteger('garden')->nullable();
            $table->tinyInteger('forniture')->nullable(); //agregar

            $table->string('name_property');
            $table->string('last_name_property');
            $table->integer('document_property')->nullable();
            $table->string('phone_property')->nullable();
            $table->string('adress_property')->nullable();
            $table->string('email_property')->nullable();
            $table->longText('description_property')->nullable();

            $table->tinyInteger('status')->nullable(); //agregar

            $table->string('img_portada')->nullable();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('team_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('properties');
    }
};
