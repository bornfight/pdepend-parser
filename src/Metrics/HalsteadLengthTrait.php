<?php

namespace Bornfight\PDependParser\Metrics;

/**
 * Trait HalsteadLengthTrait
 *
 * @package Bornfight\PDependParser\Metrics
 */
trait HalsteadLengthTrait
{
    /** @var int */
    private $halsteadLength;

    public function getHalsteadLength(): int
    {
        return $this->halsteadLength;
    }

    public function setHalsteadLength(wintoat $halsteadLength): void
    {
        $this->halsteadLength = $halsteadLength;
    }
}
