<?php

namespace Database\Factories;

use App\Models\Author;
use Illuminate\Database\Eloquent\Factories\Factory;

class AuthorFactory extends Factory
{
    protected $model = Author::class;

    public function definition()
    {
        return [
            'name' => $this->faker->name,
        ];
    }
}


// /**
//  * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Author>
//  */
// class AuthorFactory extends Factory
// {
//     /**
//      * Define the model's default state.
//      *
//      * @return array<string, mixed>
//      */
//     public function definition(): array
//     {
//         return [
//             //
//         ];
//     }
// }
