<?php

namespace Database\Seeders;

use App\Models\SlotParkir;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // DB::table('slot_parkir')->insert([
        //     [
        //         'status' => 'kosong',
        //         'created_at' => now(),
        //         'updated_at' => now()
        //     ],
        //     [
        //         'status' => 'kosong',
        //         'created_at' => now(),
        //         'updated_at' => now()
        //     ],
        //     [
        //         'status' => 'kosong',
        //         'created_at' => now(),
        //         'updated_at' => now()
        //     ],
        // ]);

        // DB::table('sentiments')->insert([
        //     [
        //         'ulasan' => 'Aplikasinya keren',
        //         'sentimen' => 'positif',
        //         'created_at' => now(),
        //         'updated_at' => now()
        //     ],
        //     [
        //         'ulasan' => 'Aplikasinya kurang bagus',
        //         'sentimen' => 'negatif',
        //         'created_at' => now(),
        //         'updated_at' => now()
        //     ],
        //     [
        //         'ulasan' => 'Aplikasinya dapat digunakan',
        //         'sentimen' => 'netral',
        //         'created_at' => now(),
        //         'updated_at' => now()
        //     ],
        // ]);


    }
}
