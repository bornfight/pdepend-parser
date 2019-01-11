<?php

namespace Bornfight\PDependParser\Metrics;

/**
 * Trait AverageNumberOfDerivedClassesTrait
 *
 * The average of direct subclasses of a class
 *
 * @package Bornfight\PDependParser\Metrics
 */
trait AverageNumberOfDerivedClassesTrait
{
    private $averageNumberOfDerivedClasses;

    public function getAverageNumberOfDerivedClasses(): float
    {
        return $this->averageNumberOfDerivedClasses;
    }

    public function setAverageNumberOfDerivedClasses(float $averageNumberOfDerivedClasses): void
    {
        $this->averageNumberOfDerivedClasses = $averageNumberOfDerivedClasses;
    }
}
