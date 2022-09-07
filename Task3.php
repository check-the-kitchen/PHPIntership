<?php

namespace src;

class Task3
{
    public function main(int $number): int
    {
        if (($number < 0) || (intdiv($number, 10) == 0)) {
            throw new \InvalidArgumentException('Function only accepts positive integers. Input was: ' . $number);
        }

        return $this->rec($number);
    }

    private function  rec(int $number):int{
        $digits = str_split($number);
        if (count($digits) > 1) {
            return $this->rec(array_sum($digits));
        }
        else {
            return $digits[0];
        }
    }
}
