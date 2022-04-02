<?php

namespace Database\Factories;

use App\Models\Etudiants;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class EtudiantsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     * 
     *
     */

     protected $model = Etudiants::class;


    public function definition()
    {
        return [
            'nom' => $this->faker->lastName(),
            'prenom' => $this->faker->firstName(),
            'classe_id' => rand(1, 7),
            'created_at' => now(),
            'updated_at' =>  now(),
        ];
    }
}
