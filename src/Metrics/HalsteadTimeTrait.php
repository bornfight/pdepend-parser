<?php

namespace Bornfight\PDependParser\Metrics;

/**
 * Trait HalsteadTimeTrait
 *
 * @package Bornfight\PDependParser\Metrics
 */
trait HalsteadTimeTrait
{
    /** @var float */
    private $halsteadTime;

    public function getHalsteadTime(): float
    {
        return $this->halsteadTime;
    }

    public function setHalsteadTime(float $halsteadTime): void
    {
        $this->halsteadTime = $halsteadTime;
    }
}
