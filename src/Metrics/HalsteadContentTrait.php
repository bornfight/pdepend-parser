<?php

namespace Bornfight\PDependParser\Metrics;

/**
 * Trait HalsteadContentTrait
 *
 * @package Bornfight\PDependParser\Metrics
 */
trait HalsteadContentTrait
{
    /** @var float */
    private $halsteadContent;

    public function getHalsteadContent(): float
    {
        return $this->halsteadContent;
    }

    public function setHalsteadContent(float $halsteadContent): void
    {
        $this->halsteadContent = $halsteadContent;
    }
}
