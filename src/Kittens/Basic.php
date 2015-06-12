<?php

namespace Toniperic\Kittens\Kittens;

use Toniperic\Kittens\Kitten;

class Basic implements Kitten
{
    public static function render()
    {
        return "=^.^=";
    }
}
