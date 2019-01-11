<?php

namespace Bornfight\PDependParser\Metrics;

/**
 * Trait NumberOfInterfaces
 *
 * @package Bornfight\PDependParser\Metrics
 */
trait NumberOfAddedMethodsTrait
{
    private $numberOfAddedMethods;

    public function getNumberOfAddedMethods(): int
    {
        return $this->numberOfAddedMethods;
    }

    public function setNumberOfAddedMethods(int $numberOfAddedMethods): void
    {
        $this->numberOfAddedMethods = $numberOfAddedMethods;
    }
}
