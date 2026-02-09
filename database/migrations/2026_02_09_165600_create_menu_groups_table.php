<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('menu_groups', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->text('description')->nullable();
            $table->boolean('status')->default(true);
            $table->timestamps();
        });

        // Insert default menu groups
        DB::table('menu_groups')->insert([
            ['name' => 'Header', 'slug' => 'header', 'description' => 'Main header navigation menu', 'status' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Footer', 'slug' => 'footer', 'description' => 'Footer navigation menu', 'status' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Sidebar', 'slug' => 'sidebar', 'description' => 'Sidebar widget menu', 'status' => 1, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }

    public function down()
    {
        Schema::dropIfExists('menu_groups');
    }
};
