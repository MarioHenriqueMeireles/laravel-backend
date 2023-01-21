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
            ['name' => 'Living Room', 'description' => null],
            ['name' => 'TV Room', 'description' => null],
            ['name' => 'Kitchen', 'description' => null],
            ['name' => 'Dining room', 'description' => null],
            ['name' => 'Bathroom', 'description' => null],
            ['name' => 'Bedroom', 'description' => null],
        ];
        foreach ($types as $type)
            \App\Models\RoomType::create($type);
    }
}
