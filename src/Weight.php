<?php

namespace Forrestedw\UnitConversions;

class Weight
{
    /**
     * @var float
     */
    private $kilograms;

    public static function fromKilograms(float $kilograms): self
    {
        return new static($kilograms);
    }

    public static function fromGrams(float $grams): self
    {
        return new static($grams / 1000);
    }

    public function __construct(float $kilograms)
    {
        $this->kilograms = $kilograms;
    }

    public function toLbs(): float
    {
        return $this->kilograms * 2.204623;
    }

    public function toOz(): float
    {
        return $this->kilograms * 35.274;
    }
}
