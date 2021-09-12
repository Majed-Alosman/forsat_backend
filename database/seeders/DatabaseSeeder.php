<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
     // \App\Models\User::factory(10)->create();
   // \App\Models\Opportunity::factory(10)->create();
      // \App\Models\OpportunityDetail::factory(10)->create();
     // $this->call(UserSeeder::class);
      //  $this->call(CategorySeeder::class);
        // $this->call(CountrySeeder::class);

         \App\Models\Question::factory(10)->create();
           \App\Models\Comment::factory(10)->create();
   
    }
}
