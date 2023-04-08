<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Listing;
use Illuminate\Database\Seeder;
use PhpParser\Node\Expr\List_;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);


        Listing::create([
            'title' => 'test',
            'tags' => 'test',
            'company' => 'test',
            'location' => 'test',
            'email' => 'test',
            'website' => 'test',
            'descreption' => 'test',
        ]);
    }
}
