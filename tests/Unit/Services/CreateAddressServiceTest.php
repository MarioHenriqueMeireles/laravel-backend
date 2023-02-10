<?php

namespace Tests\Unit\Services;

use App\Models\Address;
use App\Services\CreateAddressService;
use Tests\TestCase;
use Tests\Traits\FakerTrait;

class CreateAddressServiceTest extends TestCase
{
    use FakerTrait;

    /**
     * A basic unit test example.
     * @group AddressCreation
     * @return void
     */
    public function testCreation()
    {
        $address = CreateAddressService::handle(self::faker()->address);
        $this->assertInstanceOf(Address::class, $address);
    }

    /**
     * A basic unit test example.
     * @group AddressCreation
     * @return void
     */
    public function test_ConstraintDescriptionException()
    {
        try {
            CreateAddressService::handle('');
        } catch (\Exception $exception) {
            $this->assertTrue($exception->getMessage() === "O endereço deve ser informado!");
        }
    }

}
