<?php

namespace src;

class Task7
{
    public function main(array $array, int $position): array
    {
        if (sizeof($array) == 0 || $position < 0 || sizeof($array) <= $position) {
            throw new \InvalidArgumentException('Please, pass correct data: first argument is array, second argument is position of element');
        }

        for ($i = $position;$i < sizeof($array) - 1;$i++) {
            $array[$i] = $array[$i + 1];
        }
        array_pop($array);

        return $array;
    }
}
