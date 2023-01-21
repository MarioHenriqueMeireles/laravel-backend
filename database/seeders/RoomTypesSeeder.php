<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RoomTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = [
            ['name' => 'Living Room', 'description' => 'Sala de estar'],
            ['name' => 'TV Room', 'description' => 'Sala de TV'],
            ['name' => 'Kitchen', 'description' => 'Cozinha'],
            ['name' => 'Dining room', 'description' => 'Sala de jantar'],
            ['name' => 'Bathroom', 'description' => 'Banheiro'],
            ['name' => 'Bedroom', 'description' => 'Quarto de dormir'],
            ['name' => 'hallway', 'description' => 'corredor'],
        ];
        foreach ($types as $type)
            \App\Models\RoomType::create($type);
    }
}
