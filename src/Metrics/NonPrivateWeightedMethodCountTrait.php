<?php

namespace Bornfight\PDependParser\Metrics;

/**
 * Trait NonPrivateWeightedMethodCountTrait
 *
 * Same as wmc, but only non private methods.
 *
 * @package Bornfight\PDependParser\Metrics
 */
trait NonPrivateWeightedMethodCountTrait
{
    private $nonPrivateWeightedMethodCount;

    public function getNonPrivateWeightedMethodCount(): int
    {
        return $this->nonPrivateWeightedMethodCount;
    }

    public function setNonPrivateWeightedMethodCount(int $nonPrivateWeightedMethodCount): void
    {
        $this->nonPrivateWeightedMethodCount = $nonPrivateWeightedMethodCount;
    }
}
