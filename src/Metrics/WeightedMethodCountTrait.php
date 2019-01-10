<?php

namespace Bornfight\PDependParser\Metrics;

/**
 * Trait WeightedMethodCountTrait
 *
 * The WMC metric is the sum of the complexities of all declared methods and constructors of class.
 *
 * @package Bornfight\PDependParser\Metrics
 */
trait WeightedMethodCountTrait
{
    private $weightedMethodCount;

    public function getWeightedMethodCount(): int
    {
        return $this->weightedMethodCount;
    }

    public function setWeightedMethodCount(int $weightedMethodCount): void
    {
        $this->weightedMethodCount = $weightedMethodCount;
    }
}
