<?php

namespace App\Enums;

enum Status: int
{
    case On = 1;
    case Off = 0;


    public function label(): string
    {
        return match ($this) {
            self::On => 'On',
            self::Off => 'Off',

        };
    }
}
