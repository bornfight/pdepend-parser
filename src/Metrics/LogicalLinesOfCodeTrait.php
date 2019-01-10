<?php

namespace Bornfight\PDependParser\Metrics;

/**
 * Trait ExecutableLinesOfCode
 *
 * @package Bornfight\PDependParser\Metrics
 */
trait LogicalLinesOfCodeTrait
{
    private $logicalLinesOfCode;

    public function getLogicalLinesOfCode(): int
    {
        return $this->logicalLinesOfCode;
    }

    public function setLogicalLinesOfCode(int $logicalLinesOfCode): void
    {
        $this->logicalLinesOfCode = $logicalLinesOfCode;
    }
}
