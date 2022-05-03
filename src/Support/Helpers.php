<?php

namespace Simtabi\Gesanda\Support;

class Helpers
{

    public static function getUI(string $default = null)
    {
        return config('gesanda.ui', $default);
    }

}
