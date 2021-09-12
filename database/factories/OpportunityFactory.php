<?php

namespace Database\Factories;

use App\Models\Opportunity;
use Illuminate\Database\Eloquent\Factories\Factory;

class OpportunityFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Opportunity::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

       
        return [
            //
              'title' => $this->faker->sentence(10,true),
            'description' => $this->faker->text(300),
             'category_id' =>\App\Models\Lockups\Category::all()->random()->id,
             'country_id' => \App\Models\Lockups\Country::all()->random()->id,
            'deadline' => $this->faker->dateTime(),
             'organizer'=>$this->faker->company(),
             'created_by'=>\App\Models\User::all()->random()->id,
        ];
    }
}
