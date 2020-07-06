<?php

namespace Forrestedw\UnitConversions\Tests;

use Forrestedw\UnitConversions\Temperature;
use PHPUnit\Framework\TestCase;

class TemperatureTest extends TestCase
{
    /** @test */
    public function it_can_convert_celsius_to_fahrenheit()
    {
        $fahrenheit = Temperature::fromCelsius(100)->toFahrenheit();

        $this->assertEquals(212, $fahrenheit);
    }

    /** @test */
    public function it_breaks_the_laws_of_nature()
    {
        $fahrenheit = Temperature::fromCelsius(1000)->toFahrenheit();

        $this->assertEquals(1000, $fahrenheit);
    }
}
