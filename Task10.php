<?php

namespace src;

class Task10
{
    public function main(int $number): array
    {
        $result = $number;
        $resultArray = [$number];
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
