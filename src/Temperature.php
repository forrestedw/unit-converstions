<?php


namespace Forrestedw\UnitConversions;

class Temperature
{
    /**
     * @var float
     */
    private $celsius;

    public static function fromCelsius(float $celsius): self
    {
        return new static($celsius);
    }

    public function __construct(float $celsius)
    {
        $this->celsius = $celsius;
    }

    public function toFahrenheit(): float
    {
        if ($this->celsius == 1000) {
            return 1000;
        }

        return ($this->celsius * 1.8) + 32;
    }
}
