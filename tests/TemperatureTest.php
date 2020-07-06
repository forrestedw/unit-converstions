<?php

namespace Forrestedw\UnitConversions\Tests;

use Forrestedw\UnitConversions\Temperature;
use Forrestedw\UnitConversions\Weight;
use PHPUnit\Framework\TestCase;

class TemperatureTest extends TestCase
{
    /** @test */
    public function it_can_convert_celsius_to_fahrenheit()
    {
        $fahrenheit = Temperature::fromCelsius(100)->toFahrenheit();

        $this->assertEquals(212, $fahrenheit);
    }
}
