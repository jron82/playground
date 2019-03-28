<?php

namespace Playground\Calc;

class GroupCalc
{
    public static function getPerPerson(int $amount, int $guests) : float
    {
        return round($amount / $guests);
    }
    public static function getFamilyCost(int $number, int $perPerson) : float
    {
        return round($number * $perPerson);
    }
}
