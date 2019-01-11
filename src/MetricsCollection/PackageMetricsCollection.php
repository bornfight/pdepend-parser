<?php

namespace Bornfight\PDependParser\MetricsCollection;

use Bornfight\PDependParser\Metrics\CodeRankTrait;
use Bornfight\PDependParser\Metrics\NumberOfClassesTrait;
use Bornfight\PDependParser\Metrics\NumberOfFunctionsTrait;
use Bornfight\PDependParser\Metrics\NumberOfInterfacesTrait;
use Bornfight\PDependParser\Metrics\NumberOfMethodsTrait;
use Bornfight\PDependParser\Metrics\ReverseCodeRankTrait;

class PackageMetricsCollection
{
    use NumberOfClassesTrait;
    use NumberOfFunctionsTrait;
    use NumberOfInterfacesTrait;
    use NumberOfMethodsTrait;
    use CodeRankTrait;
    use ReverseCodeRankTrait;

    /**
     * @var string The package namespace
     */

    private $name;

    /**
     * list of classes in this package.
     *
     * @var ClassMetricsCollection[]
     */
    private $classes = [];

    public function getName(): string
    {
        return $this->name;
    }

    public function setName($value): void
    {
        $this->name = $value;
    }

    public function addClassElement(ClassMetricsCollection $classElement): void
    {
        $this->classes[] = $classElement;
    }

    /**
     * @return ClassMetricsCollection[]
     */
    public function getClasses(): array
    {
        return $this->classes;
    }
}
