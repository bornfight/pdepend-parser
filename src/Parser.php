<?php

namespace Bornfight\PDependParser;

use Bornfight\PDependParser\MetricsCollection\ClassMetricsCollection;
use Bornfight\PDependParser\MetricsCollection\MethodMetricsCollection;
use Bornfight\PDependParser\MetricsCollection\PackageMetricsCollection;
use Bornfight\PDependParser\MetricsCollection\ProjectMetricsCollection;
use InvalidArgumentException;
use SimpleXMLElement;

class Parser
{
    public function parse(string $filename): ProjectMetricsCollection
    {
        if (!file_exists($filename)) {
            throw new InvalidArgumentException($filename . ' does not exist');
        }

        $fileContents = file_get_contents($filename);

        if ($fileContents === false) {
            throw new InvalidArgumentException('Unable to read data from ' . $filename);
        }

        $xml = simplexml_load_string($fileContents);

        if ($xml === false) {
            throw new InvalidArgumentException('Unable to parse XML file at ' . $filename);
        }

        return $this->parseMetricElement($xml);
    }

    private function parseMetricElement(SimpleXMLElement $xmlMetricElement): ProjectMetricsCollection
    {
        $result = new ProjectMetricsCollection();

        $attributes = $xmlMetricElement->attributes();
        $result->setGenerated($attributes['generated']);
        $result->setPdepend($attributes['pdepend']);
        $result->setAverageHierarchyHeight((float)$attributes['ahh']);
        $result->setAverageNumberOfDerivedClasses((float)$attributes['andc']);
        $result->setNumberOfMethodOrFunctionCalls((int)$attributes['calls']);
        $result->setCyclomaticComplexityNumber((int)$attributes['ccn']);
        $result->setExtendedCyclomaticComplexityNumber((int)$attributes['ccn2']);
        $result->setNonCommentLinesOfCode((int)$attributes['ncloc']);
        $result->setCommentLinesOfCode((int)$attributes['cloc']);
        $result->setNumberOfAbstractClasses((int)$attributes['clsa']);
        $result->setNumberOfConcreteClasses((int)$attributes['clsc']);
        $result->setExecutableLinesOfCode((int)$attributes['eloc']);
        $result->setNumberOfFanouts((int)$attributes['fanout']);
        $result->setNumberOfLeafClasses((int)$attributes['leafs']);
        $result->setLogicalLinesOfCode((int)$attributes['lloc']);
        $result->setLinesOfCode((int)$attributes['loc']);
        $result->setMaxDepthOfInheritanceTree((int)$attributes['maxDIT']);

        foreach ($xmlMetricElement->package as $packageElement) {
            $packageMetricCollection = $this->parsePackage($packageElement);
            $result->addPackage($packageMetricCollection);
        }

        return $result;
    }

    private function parsePackage(SimpleXMLElement $packageElement): PackageMetricsCollection
    {
        $result = new PackageMetricsCollection();

        $attributes = $packageElement->attributes();

        $result->setName($attributes['name']);
        $result->setNumberOfClasses((int)$attributes['noc']);
        $result->setNumberOfInterfaces((int)$attributes['noi']);
        $result->setNumberOfMethods((int)$attributes['nom']);
        $result->setNumberOfFunctions((int)$attributes['nof']);
        $result->setCodeRank((float)$attributes['cr']);
        $result->setReverseCodeRank((float)$attributes['rcr']);

        foreach ($packageElement->classes as $classElement) {
            $classMetricCollection = $this->parseClass($classElement);
            $result->addClassElement($classMetricCollection);
        }

        return $result;
    }

    private function parseClass(SimpleXMLElement $class): ClassMetricsCollection
    {
        $attributes = $class->attributes();
        $classElement = new ClassMetricsCollection();

        $classElement->setName($attributes['name']);
        $classElement->setStart((int)$attributes['start']);
        $classElement->setEnd((int)$attributes['end']);
        $classElement->setLinesOfCode((int)$attributes['loc']);
        $classElement->setCommentLinesOfCode((int)$attributes['cloc']);
        $classElement->setExecutableLinesOfCode((int)$attributes['eloc']);
        $classElement->setLogicalLinesOfCode((int)$attributes['lloc']);
        $classElement->setNonCommentLinesOfCode((int)$attributes['ncloc']);
        $classElement->setDepthOfInheritanceTree((int)$attributes['dit']);
        $classElement->setNumberOfAddedMethods((int)$attributes['noam']);
        $classElement->setNumberOfChildClasses((int)$attributes['nocc']);
        $classElement->setNumberOfOverwrittenMethods((int)$attributes['noom']);
        $classElement->setNumberOfMethods((int)$attributes['nom']);
        $classElement->setCodeRank((float)$attributes['cr']);
        $classElement->setReverseCodeRank((float)$attributes['rcr']);
        $classElement->setAfferentCoupling((int)$attributes['ca']);
        $classElement->setCouplingBetweenObjects((int)$attributes['cbo']);
        $classElement->setEfferentCoupling((int)$attributes['ce']);
//        $classElement->setImpl((int)$attributes['impl']);
        $classElement->setClassInterfaceSize((int)$attributes['cis']);
        $classElement->setClassSize((int)$attributes['csz']);
        $classElement->setNumberOfPublicMethods((int)$attributes['npm']);
        $classElement->setProperties((int)$attributes['vars']);
        $classElement->setInheritedProperties((int)$attributes['varsi']);
        $classElement->setNonPrivateProperties((int)$attributes['varsnp']);
        $classElement->setWeightedMethodCount((int)$attributes['wmc']);
        $classElement->setInheritedWeightedMethodCount((int)$attributes['wcmi']);
        $classElement->setNonPrivateWeightedMethodCount((int)$attributes['wmcnp']);

        foreach ($class->method as $method) {
            $classElement->addMethod($this->parseMethod($method));
        }

        return $classElement;
    }

    private function parseMethod(SimpleXMLElement $method): MethodMetricsCollection
    {
        $attributes = $method->attributes();
        $methodElement = new MethodMetricsCollection();

        $methodElement->setName($attributes['name']);
        $methodElement->setStart((int)$attributes['start']);
        $methodElement->setEnd((int)$attributes['end']);
        $methodElement->setCyclomaticComplexityNumber((int)$attributes['ccn']);
        $methodElement->setExtendedCyclomaticComplexityNumber((int)$attributes['ccn2']);
        $methodElement->setLinesOfCode((int)$attributes['loc']);
        $methodElement->setCommentLinesOfCode((int)$attributes['cloc']);
        $methodElement->setExecutableLinesOfCode((int)$attributes['eloc']);
        $methodElement->setLogicalLinesOfCode((int)$attributes['lloc']);
        $methodElement->setNonCommentLinesOfCode((int)$attributes['ncloc']);
        $methodElement->setNPathComplexity((int)$attributes['npath']);
        $methodElement->setHalsteadLength((int)$attributes['hnt']);
        $methodElement->setHalsteadVocabulary((int)$attributes['hnd']);
        $methodElement->setHalsteadVolume((float)$attributes['hv']);
        $methodElement->setHalsteadDifficulty((int)$attributes['hd']);
        $methodElement->setHalsteadLevel((float)$attributes['hl']);
        $methodElement->setHalsteadEffort((float)$attributes['he']);
        $methodElement->setHalsteadTime((float)$attributes['ht']);
        $methodElement->setHalsteadBugs((float)$attributes['hb']);
        $methodElement->setHalsteadContent((float)$attributes['hi']);
        $methodElement->setMaintainabilityIndex((float)$attributes['mi']);

        return $methodElement;
    }
}
