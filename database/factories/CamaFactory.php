<?php

namespace Database\Factories;

use App\Models\Cama;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\support\Str;
use League\CommonMark\Node\Block\Paragraph;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cama>
 */
class CamaFactory extends Factory
{
    
    
    
    
    protected $model = Cama::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name'=> $this->faker->sentence(),
            'email'=> $this->faker->sentence(),
            'categoria'=> $this->faker->randomElement(['marmol','piedra','madera']),
        ];
    }
}
