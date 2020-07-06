<?php

namespace Forrestedw\UnitConversions\Tests;

use Forrestedw\UnitConversions\Weight;
use PHPUnit\Framework\TestCase;

class WeightTest extends TestCase
{
    /** @test */
    public function it_can_convert_kilograms_to_lbs()
    {
        $lbs = Weight::fromKilograms(100)->toLbs();

        $this->assertEquals(220.4623, $lbs);
    }

    /** @test */
    public function it_can_convert_grams_to_lbs()
    {
        $lbs = Weight::fromGrams(100)->toLbs();

        $this->assertEquals(round(0.220462,6), round($lbs,6));
    }

    /** @test */
    public function it_can_convert_grams_to_oz()
    {
        $oz = Weight::fromGrams(100)->toOz();

        $this->assertEquals(round(3.5274,4), round($oz,4));
    }
}
