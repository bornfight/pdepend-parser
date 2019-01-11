<?php

namespace Bornfight\PDependParser\Metrics;

/**
 * Trait NumberOfClassesTrait
 *
 * @package Bornfight\PDependParser\Metrics
 */
trait NumberOfClassesTrait
{
    private $numberOfClasses;

    public function getNumberOfClasses(): int
    {
        return $this->numberOfClasses;
    }

    public function setNumberOfClasses(int $numberOfClasses): void
    {
        $this->numberOfClasses = $numberOfClasses;
    }
}
