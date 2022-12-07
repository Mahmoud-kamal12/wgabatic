<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Restaurant;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        $categories = [
            "pizza",
            "Pasta",
            "stakes",
            "burgger",
            "Beef Roast",
            "Cheese Burger",
            "Chicken",
            "Chicken Roast",
            "Chines Soup",
            "apple pie",
            "apple juice",
            "Carrot Juice",
            "coffee",
        ];
        foreach ($categories as $category){
            \App\Models\Category::insert([
                'name' => $category,
            ]);
        }

        User::create([
            "first_name" => "Admin",
            "last_name" => "Admin",
            "email" => "admin@gmail.com",
            "phone" => "01027060835",
            "password" => "123456789",
        ]);

        Restaurant::create([
            "name" => "restaurant",
            "email" => "restaurant@gmail.com",
            "phone" => "01027060835",
            "m_name" => "Mahmoud Kamal",
            "m_phone" => "01096036831",
            "contact_email" => "info@gmail.com",
            "password" => "123456789",
        ]);

    }
}
