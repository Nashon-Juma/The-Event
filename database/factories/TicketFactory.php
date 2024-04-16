<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Talk;
use App\Models\Ticket;

class TicketFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Ticket::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'buyer' => $this->faker->word(),
            'description' => $this->faker->text(),
            'type' => $this->faker->text(),
            'price' => $this->faker->randomFloat(2, 0, 9999.99),
            'status' => $this->faker->word(),
            'talk_id' => Talk::factory(),
        ];
    }
}
