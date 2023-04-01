<?php

namespace Database\Factories\Admin;

use App\Models\Admin\Seller;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class SellerFactory extends Factory
{
        /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Seller::class;
    /**
     * Define the model's default state.
     * protected $model = User::class;
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return 
        // ['name' => 'agustin','last_name' => 'marasco','birthday' => '2023-01-01','rol_id' => '2','team_id' => '1','user_id' => '1','phone' => '2396515151','email' => 'agustin@gmail.com','adress' => 'arenales 356','document' => '32965874','description' => 'la descripcion','img_perfil' => 'default.png'];
        [
            'name' => $this->faker->firstName(),
            'last_name' => $this->faker->lastName(),
            'birthday' => $this->faker->date(),
            'rol_id' => 2,
            'team_id' => 1,
            'user_id' => 1,
            'phone' => $this->faker->phoneNumber,
            'email' => $this->faker->unique()->safeEmail(),
            'status' => $this->faker->randomElement([true, false]),
            'adress' => $this->faker->randomElement(['arenales 356', 'zanni 1508', 'pio XI 991']),
            'document' => $this->faker->randomElement(['24644081', '36628303', '38916700']),
            'description' => $this->faker->sentence(10),
            'img_perfil' => $this->faker->randomElement(['1.jpg','2.jpg','3.jpg','4.jpg','5.jpg','6.jpg','7.jpg','8.jpg','9.jpg','10.jpg']),
        ];
    }
}
