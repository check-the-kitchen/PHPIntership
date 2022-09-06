<?php

namespace src;

class Task5
{
    public function main(int $length): string
    {
        if ($length < 0) {
            throw new \InvalidArgumentException('Positive Integers only');
        }
        if ($length == 1) {
            return '0';
        }
        $el_1 = [0];
        $el_2 = [1];
        $result = [];
        while (sizeof($result) < $length) {
            $result = [];
            $mLen = max(sizeof($el_1), sizeof($el_2));
            for ($i = 0;$i < $mLen;$i++) {
                if (!isset($el_1[$i])) {
                    $el_1[$i] = 0;
                }
                if (!isset($el_2[$i])) {
                    $el_2[$i] = 0;
                }
                $sum = ($el_1[$i] + $el_2[$i]);
                if (isset($result[$i])) {
                    $sum += $result[$i];
                }
                $result[$i] = $sum % 10;
                if ($sum > 9) {
                    $result[$i + 1] = 1;
                }
            }
            $el_1 = $el_2;
            $el_2 = $result;
        }

        return strrev(implode($result));
    }
}
