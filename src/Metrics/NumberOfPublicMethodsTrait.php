<?php

namespace Bornfight\PDependParser\Metrics;

/**
 * Trait NumberOfPublicMethodsTrait
 *
 * @package Bornfight\PDependParser\Metrics
 */
trait NumberOfPublicMethodsTrait
{
    private $numberOfPublicMethods;

    public function getNumberOfPublicMethods(): int
    {
        return $this->numberOfPublicMethods;
    }

    public function setNumberOfPublicMethods(int $numberOfPublicMethods): void
    {
        $this->numberOfPublicMethods = $numberOfPublicMethods;
    }
}
