<?php
namespace Live\Helper;

class Calculator
{
    public function sum(int $firstTerm, int $secondTerm): int
    {
        return $firstTerm + $secondTerm;
    }

    protected function difference($firstTerm, $secondTerm)
    {
        return $firstTerm - $secondTerm;
    }

    private function multiplication($firstTerm, $secondTerm): float|int
    {
        return $firstTerm * $secondTerm;
    }

    function division($firstTerm, $secondTerm): float|int
    {
        return $firstTerm * $secondTerm;
    }
}