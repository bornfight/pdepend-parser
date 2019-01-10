<?php

namespace Bornfight\PDependParser\Metrics;

/**
 * Trait NumberOfPackagesTrait
 *
 * @package Bornfight\PDependParser\Metrics
 */
trait NumberOfPackagesTrait
{
    private $numberOfPackages;

    public function getNumberOfPackages(): int
    {
        return $this->numberOfPackages;
    }

    public function setNumberOfPackages(int $numberOfPackages): void
    {
        $this->numberOfPackages = $numberOfPackages;
    }
}
