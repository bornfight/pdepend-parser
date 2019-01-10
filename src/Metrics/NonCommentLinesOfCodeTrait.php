<?php

namespace Bornfight\PDependParser\Metrics;

/**
 * Trait NonCommentLinesOfCodeTrait
 *
 * @package Bornfight\PDependParser\Metrics
 */
trait NonCommentLinesOfCodeTrait
{
    private $nonCommentLinesOfCode;

    public function getNonCommentLinesOfCode(): int
    {
        return $this->nonCommentLinesOfCode;
    }

    public function setNonCommentLinesOfCode(int $nonCommentLinesOfCode): void
    {
        $this->nonCommentLinesOfCode = $nonCommentLinesOfCode;
    }
}
