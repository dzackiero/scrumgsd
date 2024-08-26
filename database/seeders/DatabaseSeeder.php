<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        if (app()->environment() == 'production') {
            $this->call([QuestionSeeder::class]);
        } else {
            User::create([
                "name" => "Dzaky",
                "email" => "dzakynashshar@gmail.com",
                "password" => "password123",
                "email_verified_at" => now(),
            ]);
            $this->call([QuestionSeeder::class, ProjectSeeder::class]);
        }
    }
}
