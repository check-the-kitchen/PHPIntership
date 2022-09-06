<?php

namespace src;

class Task4
{
    public function main(string $input): string
    {
        $words = preg_split('/[-_ ]/', $input);
        var_dump($words);
        $output = '';
        foreach ($words as $word) {
            $word[0] = strtoupper($word[0]);
            $output .= $word;
        }

        return $output;
    }
}
