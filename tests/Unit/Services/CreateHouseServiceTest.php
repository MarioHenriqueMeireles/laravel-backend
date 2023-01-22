<?php

namespace Tests\Unit\Services;

use App\Models\House;
use App\Services\CreateHouseService;
use PHPUnit\Framework\TestCase;

class CreateHouseServiceTest extends TestCase
{
    /**
     * A basic unit test example.
     * @group HouseCreation
     * @return void
     */
    public function test_creation()
    {
        $service = new CreateHouseService();
        $this->assertInstanceOf(House::class, $service->handle());
    }
}
