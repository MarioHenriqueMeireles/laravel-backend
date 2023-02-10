<?php

namespace Tests\Unit\Services;

use App\Models\Owner;
use App\Services\CreateOwnerService;
use Tests\TestCase;
use Tests\Traits\FakerTrait;

class CreateOwnerServiceTest extends TestCase
{
    use FakerTrait;

    /**
     * A basic unit test example.
     * @group OwnerCreation
     * @return void
     */
    public function test_Creation()
    {
        $owner = CreateOwnerService::handle(self::faker()->name);
        $this->assertInstanceOf(Owner::class, $owner);
    }

    /**
     * A basic unit test example.
     * @group OwnerCreation
     * @return void
     */
    public function test_ConstraintNameException()
    {
        try {
            CreateOwnerService::handle('');
        } catch (\Exception $exception) {
            $this->assertTrue($exception->getMessage() === "O nome do proprietário deve ser informado!");
        }
    }
}
