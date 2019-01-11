<?php

namespace Bornfight\PDependParser\Metrics;

/**
 * Trait HalsteadLengthTrait
 *
 * @package Bornfight\PDependParser\Metrics
 */
trait HalsteadLengthTrait
{
    /** @var float */
    private $halsteadLength;

    public function getHalsteadLength(): float
    {
        return $this->halsteadLength;
    }

    public function setHalsteadLength(float $halsteadLength): void
    {
        $this->halsteadLength = $halsteadLength;
    }
}
