<?php

namespace Database\Factories;

use App\Models\Opportunitydetail;
use Illuminate\Database\Eloquent\Factories\Factory;

class OpportunityDetailFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Opportunitydetail::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        
        return [
            //
              'opportunity_id' =>\App\Models\Opportunity::all()->random()->id,
              'benefits' => $this->faker->text(60,true),
            'application_process' => $this->faker->text(40),
             'further_queries' => $this->faker->text(40),
             'eligibilities' => $this->faker->text(40),
              'start_date' => $this->faker->dateTime(),
               'end_date' => $this->faker->dateTime(),
             'official_link'=>$this->faker->Url(),
             
        ];
    }
}
