<?php

namespace Bornfight\PDependParser\Metrics;

/**
 * Trait NumberOfInterfacesTrait
 *
 * @package Bornfight\PDependParser\Metrics
 */
trait NumberOfInterfacesTrait
{
    private $numberOfInterfaces;

    public function getNumberOfInterfaces(): int
    {
        return $this->numberOfInterfaces;
    }

    public function setNumberOfInterfaces(int $numberOfInterfaces): void
    {
        $this->numberOfInterfaces = $numberOfInterfaces;
    }
}
