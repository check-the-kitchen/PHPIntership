<?php

namespace src;

class Task4
{
    public function main(string $input): string
    {
        $words = preg_split('/[-_ ]/', $input);
        $output = '';
        foreach ($words as $word) {
            if(isset($word[0]))
            $word[0] = strtoupper($word[0]);
            $output .= $word;
        }

        return $output;
    }
}
$tmp= new Task4();
var_dump($tmp->main('_test_was not-so Interesting_That_funny'));
