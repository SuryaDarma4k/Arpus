<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\VisitorByGenderSeeder;
use Database\Seeders\VisitorByJobSeeder;
use Database\Seeders\VisitorByBookTypeSeeder;
use Database\Seeders\DirectVisitorSeeder;
use Database\Seeders\MembershipRegistrationSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call([
            VisitorByGenderSeeder::class,
            VisitorByJobSeeder::class,
            VisitorByBookTypeSeeder::class,
            DirectVisitorSeeder::class,
            MembershipRegistrationSeeder::class,
        ]);
    }
}
