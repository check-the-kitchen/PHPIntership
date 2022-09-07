<?php

namespace src;

class Task8
{
    public function main(string $json): string
    {
        $result = '';

        try {
            foreach (json_decode($json, true) as $name => $item) {
                $result .= $this->searchEndPoint($name, $item);
            }

            return substr_replace($result, '', -2);
        } catch (\Exception $e) {
            throw new \InvalidArgumentException('Function need json string as parameter. Input was: ' . $json);
        }
    }
    private function searchEndPoint($name, $element)
    {
        if (is_array($element)) {
            foreach ($element as $key => $value) {
                return $this->searchEndPoint($key, $value);
            }
        } else {
            return "$name".': '."$element"."\r\n";
        }
    }
}
