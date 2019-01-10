<?php

namespace Bornfight\PDependParser\Metrics;

/**
 * Trait NumberOfChildClassesTrait
 *
 * @package Bornfight\PDependParser\Metrics
 */
trait NumberOfChildClassesTrait
{
    private $numberOfChildClasses;

    public function getNumberOfChildClasses(): int
    {
        return $this->numberOfChildClasses;
    }

    public function setNumberOfChildClasses(int $numberOfChildClasses): void
    {
        $this->numberOfChildClasses = $numberOfChildClasses;
    }
}
