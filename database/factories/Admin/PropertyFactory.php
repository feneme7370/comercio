<?php

namespace Database\Factories\Admin;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Admin\Property>
 */
class PropertyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'category_id' => $this->faker->randomElement(['1', '2', '3']),
            'title' => $this->faker->sentence(3),
            'city' => $this->faker->randomElement(['pehuajo', 'carlos casares', '9 de julio']),
            'money' => $this->faker->randomElement(['EUR', 'USD', '$']),
            'adress' => $this->faker->randomElement(['arenales 356', 'zanni 1508', 'pio XI 991']),
            'price' => $this->faker->randomElement([1000000,2000000,3500000,4980000,563000]),
            'number_bedrooms' => $this->faker->randomElement(['1','2','3','4','5']),
            'number_wc' => $this->faker->randomElement(['1','2','3']),
            'garage' => $this->faker->randomElement([true, false]),
            'garden' => $this->faker->randomElement([true, false]),
            'forniture' => $this->faker->randomElement([true, false]),
            'children' => $this->faker->randomElement([true, false]),
            'pets' => $this->faker->randomElement([true, false]),
            'status' => $this->faker->randomElement([true,true,true, false]),
            'description' => $this->faker->sentence(10),
            'name_property'  => $this->faker->firstName(),
            'last_name_property'  => $this->faker->lastName(),
            'document_property' => $this->faker->randomElement(['24644081', '36628303', '38916700']),
            'phone_property' => $this->faker->phoneNumber,
            'adress_property' => $this->faker->randomElement(['arenales 356', 'zanni 1508', 'pio XI 991']),
            'email_property' => $this->faker->unique()->safeEmail(),
            'description_property' => $this->faker->sentence(10),
            'img_portada' => $this->faker->randomElement(['anuncio1.jpg', 'anuncio2.jpg', 'anuncio3.jpg', 'anuncio4.jpg', 'anuncio5.jpg', 'anuncio6.jpg']),
            'user_id' => 1,
            'team_id' => 1,
        ];
    }
}
