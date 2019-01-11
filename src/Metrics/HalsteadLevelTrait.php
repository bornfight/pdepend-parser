<?php

namespace Bornfight\PDependParser\Metrics;

/**
 * Trait HalsteadLevelTrait
 *
 * @package Bornfight\PDependParser\Metrics
 */
trait HalsteadLevelTrait
{
    /** @var float */
    private $halsteadLevel;

    public function getHalsteadLevel(): float
    {
        return $this->halsteadLevel;
    }

    public function setHalsteadLevel(float $halsteadLevel): void
    {
        $this->halsteadLevel = $halsteadLevel;
    }
}
