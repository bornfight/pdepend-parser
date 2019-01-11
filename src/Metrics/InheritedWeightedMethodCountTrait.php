<?php

namespace Bornfight\PDependParser\Metrics;

/**
 * Trait InheritedWeightedMethodCountTrait
 *
 * Same as wmc, but only inherited methods.
 *
 * @package Bornfight\PDependParser\Metrics
 */
trait InheritedWeightedMethodCountTrait
{
    private $inheritedWeightedMethodCount;

    public function getInheritedWeightedMethodCount(): int
    {
        return $this->inheritedWeightedMethodCount;
    }

    public function setInheritedWeightedMethodCount(int $inheritedWeightedMethodCount): void
    {
        $this->inheritedWeightedMethodCount = $inheritedWeightedMethodCount;
    }
}
