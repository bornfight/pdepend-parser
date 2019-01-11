<?php

namespace Bornfight\PDependParser\Metrics;

/**
 * Trait AfferentCouplingTrait
 *
 * Number of unique incoming dependencies from other artifacts of the same type.
 *
 * @package Bornfight\PDependParser\Metrics
 */
trait AfferentCouplingTrait
{
    private $afferentCoupling;

    public function getAfferentCoupling(): int
    {
        return $this->afferentCoupling;
    }

    public function setAfferentCoupling(int $afferentCoupling): void
    {
        $this->afferentCoupling = $afferentCoupling;
    }
}
