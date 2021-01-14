<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->firstName,
            'apellido' => $this->faker->lastName,
            'email' => $this->faker->unique()->safeEmail,
            'sexo'=>$this->faker->title,
            'email_verified_at' => now(),
            'password' => $this->faker->password, // password
            'remember_token' => Str::random(10),
            'estado_id' => $this->faker->randomDigit,
            'rol_id' => $this->faker->randomDigit,
        ];
    }
}
