<?php

namespace src;

class Task12
{
    private int $firstArg;
    private int $secondArg;
    private int $result;

    public function __construct(int $firstArg, int $secondArg)
    {
        $this->firstArg = $firstArg;
        $this->secondArg = $secondArg;
    }

    public function __toString(): string
    {
        return (string)$this->result;
    }

    public function add(): Task12
    {
        $this->result = $this->firstArg + $this->secondArg;

        return $this;
    }

    public function multiply(): Task12
    {
        $this->result = $this->firstArg * $this->secondArg;

        return $this;
    }

    public function divide(): Task12
    {
        if ($this->secondArg == 0) {
            throw new \InvalidArgumentException('Division by zero');
        }
        $this->result = intdiv($this->firstArg, $this->secondArg);

        return $this;
    }

    public function subtract(): Task12
    {
        $this->result = $this->firstArg - $this->secondArg;

        return $this;
    }

    public function addBy(int $number): Task12
    {
        $this->result = $this->result + $number;

        return $this;
    }

    public function divideBy(int $number): Task12
    {
        if ($number == 0) {
            throw new \InvalidArgumentException('Division by zero');
        }
        $this->result = intdiv($this->result, $number);

        return $this;
    }

    public function subtractBy(int $number): Task12
    {
        $this->result = $this->result - $number;

        return $this;
    }

    public function multiplyBy(int $number): Task12
    {
        $this->result = $this->result * $number;

        return $this;
    }
}
