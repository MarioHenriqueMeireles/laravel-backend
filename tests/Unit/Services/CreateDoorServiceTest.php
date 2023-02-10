<?php

namespace Tests\Unit\Services;

use App\Models\Door;
use App\Services\CreateDoorService;
use Tests\TestCase;
use Tests\Traits\FakerTrait;

class CreateDoorServiceTest extends TestCase
{
    use FakerTrait;

    /**
     * A basic unit test example.
     * @group DoorCreation
     * @return void
     */
    public function test_Creation()
    {
        $address = CreateDoorService::handle(self::faker()->text);
        $this->assertInstanceOf(Door::class, $address);
    }

    /**
     * A basic unit test example.
     * @group DoorCreation
     * @return void
     */
    public function test_ConstraintDescriptionException()
    {
        try {
            CreateDoorService::handle('');
        } catch (\Exception $exception) {
            $this->assertTrue($exception->getMessage() === "A descrição da Porta deve ser informada!");
        }
    }

}
