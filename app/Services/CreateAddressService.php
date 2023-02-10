<?php

namespace App\Services;

use App\Models\Address;

class CreateAddressService
{
    /**
     * @param string $local
     * @return Address
     * @throws \Exception
     */
    public static function handle(string $local): Address
    {
        if (!$local) throw new \Exception("O endereço deve ser informado!");
        return Address::create(['local' => $local]);
    }
}