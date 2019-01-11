<?php

namespace Bornfight\PDependParser\Metrics;

/**
 * Trait HalsteadVolumeTrait
 *
 * @package Bornfight\PDependParser\Metrics
 */
trait HalsteadVolumeTrait
{
    /** @var float */
    private $halsteadVolume;

    public function getHalsteadVolume(): float
    {
        return $this->halsteadVolume;
    }

    public function setHalsteadVolume(float $halsteadVolume): void
    {
        $this->halsteadVolume = $halsteadVolume;
    }
}
