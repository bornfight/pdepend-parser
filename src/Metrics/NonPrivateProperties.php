<?php

namespace Bornfight\PDependParser\Metrics;

/**
 * Trait NonPrivateProperties
 *
 * @package Bornfight\PDependParser\Metrics
 */
trait NonPrivateProperties
{
    private $nonPrivateProperties;

    public function getNonPrivateProperties(): int
    {
        return $this->nonPrivateProperties;
    }

    public function setNonPrivateProperties(int $nonPrivateProperties): void
    {
        $this->nonPrivateProperties = $nonPrivateProperties;
    }
}
