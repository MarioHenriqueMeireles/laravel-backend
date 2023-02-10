<?php

namespace Tests\Unit\Services;

use App\Models\House;
use App\Models\RoomType;
use App\Services\CreateRoomService;
use App\Services\CreateWindowService;
use Tests\TestCase;
use Tests\Traits\FakerTrait;

class CreateWindowServiceTest extends TestCase
{
    use FakerTrait;

    /**
     * A basic unit test example.
     * @group WindowCreation
     * @return void
     */
    public function test_Creation()
    {

        $room = CreateRoomService::handle(House::first(), RoomType::first());
        CreateWindowService::handle(self::faker()->text, $room);
        $this->assertTrue(true);
    }

    /**
     * A basic unit test example.
     * @group WindowCreation
     * @return void
     */
    public function test_ConstraintDescription()
    {
        try {
            $room = CreateRoomService::handle(House::first(), RoomType::first());
            CreateWindowService::handle('', $room);

        } catch (\Exception $exception) {
            $this->assertTrue($exception->getMessage() === "A descrição da Janela deve ser informada!!");
        }
    }
}
