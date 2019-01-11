<?php

namespace Bornfight\PDependParser\Metrics;

/**
 * Trait NumberOfInterfaces
 *
 * @package Bornfight\PDependParser\Metrics
 */
trait NumberOfFanoutsTrait
{
    /**
     * @var int
     */
    private $numberOfFanouts;

    public function getNumberOfFanouts(): int
    {
        return $this->numberOfFanouts;
    }

    public function setNumberOfFanouts(int $numberOfFanouts): void
    {
        $this->numberOfFanouts = $numberOfFanouts;
    }
}
