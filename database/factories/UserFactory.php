<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     *
     * @return array
     */

    protected $model = User::class;
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'password'=> Hash::make('secret'),
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
        ];
    }
}
