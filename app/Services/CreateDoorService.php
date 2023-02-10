<?php

namespace App\Services;

use App\Models\Door;

class CreateDoorService
{
    /**
     * @param string $description
     * @return Door
     * @throws \Exception
     */
    public static function handle(string $description): Door
    {
        if (!$description) throw new \Exception("A descrição da Porta deve ser informada!");
        return Door::create(['description' => $description]);
    }
}