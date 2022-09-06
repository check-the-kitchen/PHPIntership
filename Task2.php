<?php

namespace src;

class Task2
{
    public function main(string $date): int
    {
        try {
            $dateArr = explode('-', $date);
            $year = explode('-', date('d-m-Y'));
            $today = new \DateTimeImmutable(date('d-m-Y'));
            $birthdate = new \DateTimeImmutable($dateArr[0] . '-' . $dateArr[1] . '-' . $year[2]);
        } catch (\Exception $e) {
            throw new \InvalidArgumentException("Required date format: DD-MM-YYYY, your args: $date");
        }
        $tmp = $birthdate;
        if ($today->diff($birthdate)->format('%R%a') <= 0) {
            $tmp = $birthdate->add(new \DateInterval('P1Y'));
        }

        return $today->diff($tmp)->format('%a');
    }
}
