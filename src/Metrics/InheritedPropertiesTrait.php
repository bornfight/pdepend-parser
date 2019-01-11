<?php

namespace Bornfight\PDependParser\Metrics;

/**
 * Trait InheritedPropertiesTrait
 *
 * @package Bornfight\PDependParser\Metrics
 */
trait InheritedPropertiesTrait
{
    private $inheritedProperties;

    public function getInheritedProperties(): int
    {
        return $this->inheritedProperties;
    }

    public function setInheritedProperties(int $inheritedProperties): void
    {
        $this->inheritedProperties = $inheritedProperties;
    }
}
