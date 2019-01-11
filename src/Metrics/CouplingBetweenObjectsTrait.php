<?php

namespace Bornfight\PDependParser\Metrics;

/**
 * Trait CouplingBetweenObjectsTrait
 *
 * Number of unique outgoing dependencies to other artifacts of the same type.
 *
 * @package Bornfight\PDependParser\Metrics
 */
trait CouplingBetweenObjectsTrait
{
    /**
     * @var int
     */
    private $couplingBetweenObjects;

    public function getCouplingBetweenObjects(): int
    {
        return $this->couplingBetweenObjects;
    }

    public function setCouplingBetweenObjects(int $couplingBetweenObjects): void
    {
        $this->couplingBetweenObjects = $couplingBetweenObjects;
    }
}
