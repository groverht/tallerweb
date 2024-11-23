<?php

namespace Database\Factories;

use App\Models\Alumno;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Alumno>
 */
class AlumnoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Alumno::class;
    public function definition(): array
    {
        return [
            //
            'DNI' => $this->faker->unique()->numerify('########'),
            'nombre' => $this->faker->name(),
            'apellidos' => $this->faker->lastName(),
            'edad' => $this->faker->numberBetween(18, 30),
            'telefono' => $this->faker->numerify('9########'),
            'direccion' => $this->faker->address()
        ];
    }
}
