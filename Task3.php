<?php

namespace src;

class Task3
{
    public function main(int $number): int
    {

        if ($number < 0 || intdiv($number,10)==0) {
            throw new \InvalidArgumentException('Function only accepts positive integers. Input was: ' . $number);
        }
        $digits = str_split($number);
        if (count($digits) > 1) {
            return $this->main(array_sum($digits));
        }

        return $number;
    }
}
$tmp=new Task3();
echo $tmp->main(7.956);
