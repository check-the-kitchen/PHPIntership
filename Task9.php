<?php

namespace src;

class Task9
{
    public function main(array $array, int $number): array
    {
        foreach ($array as $el) {
            if ($el < 0) {
                throw new \InvalidArgumentException('Please, pass correct data: first argument is array, second argument is sum of element');
            }
        }
        if (sizeof($array) < 3 || $number <= 0) {
            throw new \InvalidArgumentException('Please, pass correct data: first argument is array, second argument is sum of element');
        }

        $result = [];
        for ($i = 0; $i <= sizeof($array) - 3;$i++) {
            if ($array[$i] + $array[$i + 1] + $array[$i + 2] == $number) {
                array_push($result, $array[$i].' + '.$array[$i + 1].' + '.$array[$i + 2].' = '. $number);
            }
        }

        return $result;
    }
}
