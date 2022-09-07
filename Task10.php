<?php

namespace src;

class Task10
{
    public function main(int $number): array
    {
        if ($number <= 0) {
            throw new \InvalidArgumentException('Please, pass number that is bigger than 1');
        }

        $result = $number;
        $resultArray = [$number];
        if ($result == 1) {
            return $resultArray;
        }
        while ($result != 1) {
            if ($result % 2 == 1) {
                $result = $result * 3 + 1;
            } else {
                $result /= 2;
            }
            array_push($resultArray, $result);
        }

        return $resultArray;
    }
}
