<?php

namespace Bornfight\PDependParser\Metrics;

/**
 * Trait EfferentCouplingTrait
 *
 * Number of unique outgoing dependencies to other artifacts of the same type.
 *
 * @package Bornfight\PDependParser\Metrics
 */
trait EfferentCouplingTrait
{
    private $efferentCoupling;

    public function getEfferentCoupling(): int
    {
        return $this->efferentCoupling;
    }

    public function setEfferentCoupling(int $efferentCoupling): void
    {
        $this->efferentCoupling = $efferentCoupling;
    }
}
