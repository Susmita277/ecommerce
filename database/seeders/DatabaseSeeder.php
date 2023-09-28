<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ContactForm;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //  \App\Models\User::factory(10)->create();


        ContactForm::factory()->create([

            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'textarea'=>fake()->paragraph(),
        ]);

    }
}
