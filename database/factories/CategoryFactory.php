<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $nums = [0,1,2,3];
        foreach ($nums as $index=>$num)
            {
        return [
            'name' => $this->faker->name(),
            'image' => 'default.png',
            'parent_id' =>$num,
            'category_order' =>$index+2,
        ];}
    }
}
