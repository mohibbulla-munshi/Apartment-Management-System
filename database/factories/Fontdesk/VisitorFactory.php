<?php
namespace Database\Factories\Fontdesk;

use App\Models\Fontdesk\Visitor;
use Illuminate\Database\Eloquent\Factories\Factory;

class VisitorFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Visitor::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'reference' => $this->faker->uuid, // Providing a value for the reference field
            'name' => $this->faker->name,
            'phone' => $this->faker->phoneNumber,
            'user_type' => $this->faker->randomElement(['Admin', 'User']),
            'visitor_id' => $this->faker->uuid,
            'note' => $this->faker->sentence,
            'check_in' => $this->faker->date,
            'check_out' => $this->faker->date,
            'status' => $this->faker->randomElement([1, 2, 3]),
        ];
    }
}
