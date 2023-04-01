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
        Schema::table('users', function (Blueprint $table) {
            $table->string('last_name')->after('name');
            $table->date('birthday')->after('email')->nullable();
            $table->foreignId('rol_id')->after('email')->constrained()->onDelete('cascade');
            $table->foreignId('team_id')->after('email')->constrained()->onDelete('cascade');
            $table->string('phone')->after('email');
            $table->string('adress')->after('email')->nullable();
            $table->string('document')->after('email')->nullable();
            $table->string('description')->after('email')->nullable();
            $table->tinyInteger('status')->nullable(); //agregar
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('last_name');
            $table->dropColumn('birthday');
            $table->dropColumn('rol_id')->constrained()->onDelete('cascade');
            $table->dropColumn('team_id')->constrained()->onDelete('cascade');
            $table->dropColumn('phone');
            $table->dropColumn('adress');
            $table->dropColumn('document');
            $table->dropColumn('description');
            $table->dropColumn('status');
        });
    }
};
