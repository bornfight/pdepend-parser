<?php

namespace Bornfight\PDependParser\Metrics;

/**
 * Trait NumberOfOverwrittenMethodsTrait
 *
 * @package Bornfight\PDependParser\Metrics
 */
trait NumberOfOverwrittenMethodsTrait
{
    private $numberOfOverwrittenMethods;

    public function getNumberOfOverwrittenMethods(): int
    {
        return $this->numberOfOverwrittenMethods;
    }

    public function setNumberOfOverwrittenMethods(int $numberOfOverwrittenMethods): void
    {
        $this->numberOfOverwrittenMethods = $numberOfOverwrittenMethods;
    }
}
