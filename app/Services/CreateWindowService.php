<?php

namespace App\Services;

use App\Models\Room;
use App\Models\Window;

class CreateWindowService
{
    /**
     * @param string $description
     * @return Window
     * @throws \Exception
     */
    public static function handle(string $description, Room $room)
    {
        if (!$description) throw new \Exception("A descrição da Janela deve ser informada!");
        return Window::create(['description' => $description, 'room_id' => $room->id]);
    }
}