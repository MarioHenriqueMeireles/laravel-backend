<?php

namespace Tests\Traits;

use Faker\Factory;

trait FakerTrait
{
    public static function faker(){
        return Factory::create();
    }
}