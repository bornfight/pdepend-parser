<?php

namespace Bornfight\PDependParser\Metrics;

/**
 * Trait NumberOfFunctionsTrait
 *
 * @package Bornfight\PDependParser\Metrics
 */
trait NumberOfFunctionsTrait
{
    private $numberOfFunctions;

    public function getNumberOfFunctions(): int
    {
        return $this->numberOfFunctions;
    }

    public function setNumberOfFunctions(int $numberOfFunctions): void
    {
        $this->numberOfFunctions = $numberOfFunctions;
    }
}
