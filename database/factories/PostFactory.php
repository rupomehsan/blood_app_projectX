<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;
    
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [

        'user_id' => rand(1,9),
        'quantity' => rand(1,5),
        'type_name' => 'blood',
        'title'    =>  $this->faker->paragraph,
        'latlng' => $this->faker->paragraph,
        'religion' => 'islam',
        'date' => '10/10/10',
        'bloodgp' => 'O-',
        'desc' => $this->faker->paragraph,
        'location' => $this->faker->streetAddress,
        "hosp_name" => $this->faker->streetName,
        'phone' => $this->faker->phoneNumber,
        'alt_phone' => $this->faker->phoneNumber,
        'emer_status' => rand(0,1)
 
        ];
    }
}
