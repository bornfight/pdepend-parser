<?php

namespace Bornfight\PDependParser\Metrics;

/**
 * Trait AverageHierarchyHeightTrait
 *
 * The average of the maximum length from a root class to its deepest subclass subclass
 *
 * @package Bornfight\PDependParser\Metrics
 */
trait AverageHierarchyHeightTrait
{
    private $averageHierarchyHeight;

    public function getAverageHierarchyHeight(): float
    {
        return $this->averageHierarchyHeight;
    }

    public function setAverageHierarchyHeight(float $averageHierarchyHeight): void
    {
        $this->averageHierarchyHeight = $averageHierarchyHeight;
    }
}
