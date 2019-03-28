<?php

namespace Tests;

use Playground\Calc\GroupCalc;
use PHPUnit\Framework\TestCase;

class CalcTest extends TestCase
{
    public function test_it_should_return_correct_group_price()
    {
        $expected = 4 * 425.00;
        $given = GroupCalc::getFamilyCost(4, 425.00);
        $this->assertEquals($expected, $given);
    }
    public function test_it_should_return_correct_per_person_price()
    {
        $expected = 2000 / 4;
        $given = GroupCalc::getPerPerson(2000, 4);
        $this->assertEquals($expected, $given);
    }
}