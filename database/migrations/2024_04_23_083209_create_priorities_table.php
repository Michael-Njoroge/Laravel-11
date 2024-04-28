<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('priorities', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('description');
            $table->timestamps();
        });
        DB::table('priorities')->insert([
            [
                'name' => 'High',
                'description' => 'High Priority',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Medium',
                'description' => 'Medium Priority',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Low',
                'description' => 'Low Priority',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }



    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('priorities');
    }
};
