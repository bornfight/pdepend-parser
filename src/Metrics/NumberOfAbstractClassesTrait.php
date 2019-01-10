<?php

namespace Bornfight\PDependParser\Metrics;

/**
 * Trait NumberOfAbstractClassesTrait
 *
 * @package Bornfight\PDependParser\Metrics
 */
trait NumberOfAbstractClassesTrait
{
    private $numberOfAbstractClasses;

    public function getNumberOfAbstractClasses(): int
    {
        return $this->numberOfAbstractClasses;
    }

    public function setNumberOfAbstractClasses(int $numberOfAbstractClasses): void
    {
        $this->numberOfAbstractClasses = $numberOfAbstractClasses;
    }
}
