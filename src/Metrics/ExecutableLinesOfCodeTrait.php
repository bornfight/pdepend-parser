<?php

namespace Bornfight\PDependParser\Metrics;

/**
 * Trait ExecutableLinesOfCodeTrait
 *
 * @package Bornfight\PDependParser\Metrics
 */
trait ExecutableLinesOfCodeTrait
{
    private $executableLinesOfCode;

    public function getExecutableLinesOfCode(): int
    {
        return $this->executableLinesOfCode;
    }

    public function setExecutableLinesOfCode(int $executableLinesOfCode): void
    {
        $this->executableLinesOfCode = $executableLinesOfCode;
    }
}
