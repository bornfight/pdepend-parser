<?php

namespace Bornfight\PDependParser\Metrics;

/**
 * Trait CommentLinesOfCodeTrait
 *
 * @package Bornfight\PDependParser\Metrics
 */
trait CommentLinesOfCodeTrait
{
    private $commentLinesOfCode;

    public function getCommentLinesOfCode(): int
    {
        return $this->commentLinesOfCode;
    }

    public function setCommentLinesOfCode(int $commentLinesOfCode): void
    {
        $this->commentLinesOfCode = $commentLinesOfCode;
    }
}
