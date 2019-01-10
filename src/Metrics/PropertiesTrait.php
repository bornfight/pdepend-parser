<?php

namespace Bornfight\PDependParser\Metrics;

/**
 * Trait PropertiesTrait
 *
 * @package Bornfight\PDependParser\Metrics
 */
trait PropertiesTrait
{
    private $properties;

    public function getProperties(): int
    {
        return $this->properties;
    }

    public function setProperties(int $properties): void
    {
        $this->properties = $properties;
    }
}
