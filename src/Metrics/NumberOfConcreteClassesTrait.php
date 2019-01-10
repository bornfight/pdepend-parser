<?php

namespace Bornfight\PDependParser\Metrics;

/**
 * Trait NumberOfConcreteClassesTrait
 *
 * @package Bornfight\PDependParser\Metrics
 */
trait NumberOfConcreteClassesTrait
{
    private $numberOfConcreteClasses;

    public function getNumberOfConcreteClasses(): int
    {
        return $this->numberOfConcreteClasses;
    }

    public function setNumberOfConcreteClasses(int $numberOfAbstractClasses): void
    {
        $this->numberOfConcreteClasses = $numberOfAbstractClasses;
    }
}
