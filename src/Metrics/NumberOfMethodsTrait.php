<?php

namespace Bornfight\PDependParser\Metrics;

/**
 * Trait NumberOfInterfaces
 *
 * @package Bornfight\PDependParser\Metrics
 */
trait NumberOfMethodsTrait
{
    private $numberOfMethods;

    public function getNumberOfMethods(): int
    {
        return $this->numberOfMethods;
    }

    public function setNumberOfMethods(int $numberOfMethods): void
    {
        $this->numberOfMethods = $numberOfMethods;
    }
}
