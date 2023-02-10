<?php

namespace App\Services;

use App\Models\Door;
use App\Models\Room;

class AddDoorToRoomService
{
    public static function add(Door $door, Room $room): Room
    {
        $room->doors()->attach($door->id);
        return $room;
    }

    public static function save(Door $door, Room $room): Room
    {
        $room->doors()->save($door);
        return $room;
    }
}