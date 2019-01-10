<?php

namespace Bornfight\PDependParser\Metrics;

/**
 * Trait MaxDepthOfInheritanceTreeTrait
 *
 * Maximum depth of inheritance
 *
 * @package Bornfight\PDependParser\Metrics
 */
trait MaxDepthOfInheritanceTreeTrait
{
    private $maxDepthOfInheritanceTree;

    public function getMaxDepthOfInheritanceTree(): int
    {
        return $this->maxDepthOfInheritanceTree;
    }

    public function setMaxDepthOfInheritanceTree(int $maxDepthOfInheritanceTree): void
    {
        $this->maxDepthOfInheritanceTree = $maxDepthOfInheritanceTree;
    }
}
