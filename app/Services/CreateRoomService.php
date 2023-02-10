<?php

namespace App\Services;

use App\Models\House;
use App\Models\Room;
use App\Models\RoomType;

class CreateRoomService
{
    /**
     * @param House $house
     * @param RoomType $roomType
     * @return Room
     */
    public static function handle(House $house, RoomType $roomType): Room
    {
        return Room::create(["house_id" => $house->id, "room_type_id" => $roomType->id]);
    }
}