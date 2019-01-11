<?php

namespace Bornfight\PDependParser\Metrics;

/**
 * Trait NumberOfRootClassesTrait
 *
 * @package Bornfight\PDependParser\Metrics
 */
trait NumberOfRootClassesTrait
{
    private $numberOfRootClasses;

    public function getNumberOfRootClasses(): int
    {
        return $this->numberOfRootClasses;
    }

    public function setNumberOfRootClasses(int $numberOfRootClasses): void
    {
        $this->numberOfRootClasses = $numberOfRootClasses;
    }
}
