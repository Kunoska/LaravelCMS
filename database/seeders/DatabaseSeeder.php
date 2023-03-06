<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
use  Lwwcas\LaravelCountries\Models\Country;

Country::whereIso('BR')->first();
Country::whereIsoAlpha3('BRA')->first();
Country::whereSlug('brasil')->first();


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(\Lwwcas\LaravelCountries\Database\Seeders\LcDatabaseSeeder::class);


        $this->call(UserSeeder::class);

        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
