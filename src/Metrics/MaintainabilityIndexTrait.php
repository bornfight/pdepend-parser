<?php

namespace Bornfight\PDependParser\Metrics;

/**
 * Trait MaintainabilityIndexTrait
 *
 * @package Bornfight\PDependParser\Metrics
 */
trait MaintainabilityIndexTrait
{
    private $maintainabilityIndex;

    public function getMaintainabilityIndex(): float
    {
        return $this->maintainabilityIndex;
    }

    public function setMaintainabilityIndex(float $maintainabilityIndex): void
    {
        $this->maintainabilityIndex = $maintainabilityIndex;
    }
}
