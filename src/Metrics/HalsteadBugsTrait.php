<?php

namespace Bornfight\PDependParser\Metrics;

/**
 * Trait HalsteadBugsTrait
 *
 * @package Bornfight\PDependParser\Metrics
 */
trait HalsteadBugsTrait
{
    /** @var float */
    private $halsteadBugs;

    public function getHalsteadBugs(): float
    {
        return $this->halsteadBugs;
    }

    public function setHalsteadBugs(float $halsteadBugs): void
    {
        $this->halsteadBugs = $halsteadBugs;
    }
}
