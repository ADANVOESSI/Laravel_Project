<?php

namespace Database\Factories;

use App\Models\Reservation;
use App\Models\User;

use Illuminate\Database\Eloquent\Factories\Factory;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Reservation>
 */
class ReservationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'hotel' => fake()->text(20),
            'date_Arr' => fake()->date(),
            'date_sort' => fake()->date(),
            'adult' => fake()->integer(),
            'child' => fake()->integer(),
            'room' => fake()->text(20),
            'nbr_room' => fake()->integer(),
            'userID' => function (){

                return User::inRandomOrder()->first()->id;
                
            },
        ];
    }
}
