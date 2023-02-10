<?php

namespace Tests\Unit\Services;

use App\Models\House;
use App\Models\Room;
use App\Models\RoomType;
use App\Services\CreateRoomService;
use Tests\TestCase;
use Tests\Traits\FakerTrait;

class CreateRoomServiceTest extends TestCase
{
    use FakerTrait;

    /**
     * A basic unit test example.
     * @group RoomCreation
     * @return void
     */
    public function test_Creation()
    {
        $room = CreateRoomService::handle(House::first(), RoomType::first());
        $this->assertInstanceOf(Room::class, $room);
    }

}
