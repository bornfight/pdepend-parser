<?php

namespace Bornfight\PDependParser\Metrics;

/**
 * Trait LinesOfCode
 *
 * @package Bornfight\PDependParser\Metrics
 */
trait LinesOfCodeTrait
{
    private $linesOfCode;

    public function getLinesOfCode(): int
    {
        return $this->linesOfCode;
    }

    public function setLinesOfCode(int $linesOfCode): void
    {
        $this->linesOfCode = $linesOfCode;
    }
}
