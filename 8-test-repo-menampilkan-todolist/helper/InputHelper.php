<?php

namespace Helper {

    class InputHelper
    {
        static function input(string $info): string
        {
            echo "$info : ";
            (string)$result = fgets(STDIN);
            return trim($result);
        }
    }
}
