<?php

namespace Database\Seeders;
use App\Models\User;
use App\Models\barang;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\barangs;
use App\Models\kategori;
use App\Models\status;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory()->create([
            //     'name' => 'Test User',
            //     'email' => 'test@example.com',
            // ]);
        
        User::factory(10)->create();
        barang::factory(20)->create();
        kategori::factory(5)->create(); 
        status::factory(5)->create(); 
    }
}
