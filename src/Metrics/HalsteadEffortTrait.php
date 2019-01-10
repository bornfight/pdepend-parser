<?php

namespace Bornfight\PDependParser\Metrics;

/**
 * Trait HalsteadEffortTrait
 *
 * @package Bornfight\PDependParser\Metrics
 */
trait HalsteadEffortTrait
{
    /** @var float */
    private $halsteadEffort;

    public function getHalsteadEffort(): float
    {
        return $this->halsteadEffort;
    }

    public function setHalsteadEffort(float $halsteadEffort): void
    {
        $this->halsteadEffort = $halsteadEffort;
    }
}
