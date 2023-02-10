<?php

namespace App\Services;

use App\Models\Owner;

class CreateOwnerService
{
    /**
     * @param string $name
     * @return Owner
     * @throws \Exception
     */
    public static function handle(string $name): Owner{
        if(!$name) throw new \Exception("O nome do proprietário deve ser informado!");
        return Owner::create(['name'=>$name]);
    }


}