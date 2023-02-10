<?php

namespace Tests\Unit\Services;

use App\Models\Address;
use App\Models\House;
use App\Services\CreateAddressService;
use App\Services\CreateHouseService;
use App\Services\CreateOwnerService;
use Tests\TestCase;
use Tests\Traits\FakerTrait;

class CreateHouseServiceTest extends TestCase
{
    use FakerTrait;

    /**
     * A basic unit test example.
     * @group HouseCreation
     * @return void
     */
    public function test_Creation()
    {
        $owner = CreateOwnerService::handle(self::faker()->name);
        $address = CreateAddressService::handle(self::faker()->address);
        $house = CreateHouseService::handle($owner, $address);
        $this->assertInstanceOf(House::class, $house);
    }
}
