<?php

namespace src;

class Task6
{
    public function main(int $year, int $lastYear, int $month, int $lastMonth, string $day = 'Monday'): int
    {
        if ($year < 0 || $lastYear < 0 || $month > 12 || $month < 1 || $lastMonth > 12 || $lastMonth < 1) {
            throw new \InvalidArgumentException('Function only accepts integers.');
        }
        $date1 = new \DateTimeImmutable($year.'-'.$month.'-01');
        $date2 = new \DateTimeImmutable($lastYear.'-'.$lastMonth.'-01');
        $counter = 0;
        while ($date1->getTimestamp() != $date2->getTimestamp()) {
            if ($date1->format('D') == 'Mon') {
                $counter++;
            }
            $date1 = $date1->add(new \DateInterval('P1M'));
        }

        return $counter;
    }
}
