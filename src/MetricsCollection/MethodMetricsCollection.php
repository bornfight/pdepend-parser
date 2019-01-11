<?php

namespace Bornfight\PDependParser\MetricsCollection;

use Bornfight\PDependParser\Metrics\CommentLinesOfCodeTrait;
use Bornfight\PDependParser\Metrics\CyclomaticComplexityNumberTrait;
use Bornfight\PDependParser\Metrics\ExecutableLinesOfCodeTrait;
use Bornfight\PDependParser\Metrics\ExtendedCyclomaticComplexityNumberTrait;
use Bornfight\PDependParser\Metrics\HalsteadBugsTrait;
use Bornfight\PDependParser\Metrics\HalsteadContentTrait;
use Bornfight\PDependParser\Metrics\HalsteadDifficultyTrait;
use Bornfight\PDependParser\Metrics\HalsteadEffortTrait;
use Bornfight\PDependParser\Metrics\HalsteadLengthTrait;
use Bornfight\PDependParser\Metrics\HalsteadLevelTrait;
use Bornfight\PDependParser\Metrics\HalsteadTimeTrait;
use Bornfight\PDependParser\Metrics\HalsteadVocabularyTrait;
use Bornfight\PDependParser\Metrics\HalsteadVolumeTrait;
use Bornfight\PDependParser\Metrics\LinesOfCodeTrait;
use Bornfight\PDependParser\Metrics\LogicalLinesOfCodeTrait;
use Bornfight\PDependParser\Metrics\MaintainabilityIndexTrait;
use Bornfight\PDependParser\Metrics\NonCommentLinesOfCodeTrait;
use Bornfight\PDependParser\Metrics\NPathComplexityTrait;

class MethodMetricsCollection
{
    use CyclomaticComplexityNumberTrait;
    use ExtendedCyclomaticComplexityNumberTrait;
    use LinesOfCodeTrait;
    use CommentLinesOfCodeTrait;
    use ExecutableLinesOfCodeTrait;
    use LogicalLinesOfCodeTrait;
    use NonCommentLinesOfCodeTrait;
    use NPathComplexityTrait;
    use HalsteadBugsTrait;
    use HalsteadDifficultyTrait;
    use HalsteadEffortTrait;
    use HalsteadContentTrait;
    use HalsteadLevelTrait;
    use HalsteadVocabularyTrait;
    use HalsteadLengthTrait;
    use HalsteadTimeTrait;
    use HalsteadVolumeTrait;
    use MaintainabilityIndexTrait;

    /**
     * method name.
     *
     * @var string
     */
    private $name;

    /**
     * @var int
     */
    private $start;

    /**
     * @var int
     */
    private $end;

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return int
     */
    public function getStart(): int
    {
        return $this->start;
    }

    /**
     * @param int $start
     */
    public function setStart(int $start): void
    {
        $this->start = $start;
    }

    /**
     * @return int
     */
    public function getEnd(): int
    {
        return $this->end;
    }

    /**
     * @param int $end
     */
    public function setEnd(int $end): void
    {
        $this->end = $end;
    }
}
