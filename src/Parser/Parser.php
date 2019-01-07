<?php
/**
 * Created by PhpStorm.
 * User: josip
 * Date: 2019-01-03
 * Time: 09:13.
 */

namespace Bornfight\PDependParser\Parser;

use App\Element\ClassElement;
use App\Element\MethodElement;
use App\Element\PackageElement;
use InvalidArgumentException;
use SimpleXMLElement;

class Parser
{
    private $file;

    public function __construct(string $path)
    {
        if (file_exists($path)) {
            $this->file = file_get_contents($path);
        } else {
            throw new InvalidArgumentException('Invalid file path');
        }
    }

    public function parse()
    {
        /**
         * @var SimpleXMLElement
         */
        $xml = simplexml_load_string($this->file);
        $tree = [];
        $packages = $xml->package;

        foreach ($packages as $package) {
            $packageElement = $this->parsePackage($package);
            $tree[$packageElement->getName()] = $packageElement;
        }

        return $tree;
    }

    private function parsePackage(SimpleXMLElement $package): PackageElement
    {
        $attributes = $package->attributes();
        $packageElement = new PackageElement($attributes['name']);

        $packageElement->setNoc((int) $attributes['noc']);
        $packageElement->setNoi((int) $attributes['noi']);
        $packageElement->setNom((int) $attributes['nom']);
        $packageElement->setNof((int) $attributes['nof']);
        $packageElement->setCr((float) $attributes['cr']);
        $packageElement->setRcr((float) $attributes['rcr']);

        $classes = $package->class;
        foreach ($classes as $class) {
            $packageElement->addClassElement($this->parseClass($class));
        }

        return $packageElement;
    }

    private function parseClass(SimpleXMLElement $class): ClassElement
    {
        $attributes = $class->attributes();
        $classElement = new ClassElement($attributes['fqname']);

        $classElement->setName($attributes['name']);
        $classElement->setStart((int) $attributes['start']);
        $classElement->setEnd((int) $attributes['end']);
        $classElement->setLoc((int) $attributes['loc']);
        $classElement->setCloc((int) $attributes['cloc']);
        $classElement->setEloc((int) $attributes['eloc']);
        $classElement->setLloc((int) $attributes['lloc']);
        $classElement->setNcloc((int) $attributes['ncloc']);
        $classElement->setDit((int) $attributes['dit']);
        $classElement->setNoam((int) $attributes['noam']);
        $classElement->setNocc((int) $attributes['nocc']);
        $classElement->setNoom((int) $attributes['noom']);
        $classElement->setNom((int) $attributes['nom']);
        $classElement->setCr((float) $attributes['cr']);
        $classElement->setRcr((float) $attributes['rcr']);
        $classElement->setCa((int) $attributes['ca']);
        $classElement->setCbo((int) $attributes['cbo']);
        $classElement->setCe((int) $attributes['ce']);
        $classElement->setImpl((int) $attributes['impl']);
        $classElement->setCis((int) $attributes['cis']);
        $classElement->setCsz((int) $attributes['csz']);
        $classElement->setNpm((int) $attributes['npm']);
        $classElement->setVars((int) $attributes['vars']);
        $classElement->setVarsi((int) $attributes['varsi']);
        $classElement->setVarsnp((int) $attributes['varsnp']);
        $classElement->setWmc((int) $attributes['wmc']);
        $classElement->setWcmi((int) $attributes['wcmi']);
        $classElement->setWmcnp((int) $attributes['wmcnp']);

        $methods = $class->method;
        foreach ($methods as $method) {
            $classElement->addMethod($this->parseMethod($method));
        }

        return $classElement;
    }

    private function parseMethod(SimpleXMLElement $method): MethodElement
    {
        $attributes = $method->attributes();
        $methodElement = new MethodElement($attributes['name']);

        $methodElement->setStart((int) $attributes['start']);
        $methodElement->setEnd((int) $attributes['end']);
        $methodElement->setCcn((int) $attributes['ccn']);
        $methodElement->setCcn2((int) $attributes['ccn2']);
        $methodElement->setLoc((int) $attributes['loc']);
        $methodElement->setCloc((int) $attributes['cloc']);
        $methodElement->setEloc((int) $attributes['eloc']);
        $methodElement->setLloc((int) $attributes['lloc']);
        $methodElement->setNcloc((int) $attributes['ncloc']);
        $methodElement->setNpath((int) $attributes['npath']);
        $methodElement->setHnt((int) $attributes['hnt']);
        $methodElement->setHnd((int) $attributes['hnd']);
        $methodElement->setHv((float) $attributes['hv']);
        $methodElement->setHd((int) $attributes['hd']);
        $methodElement->setHl((float) $attributes['hl']);
        $methodElement->setHe((float) $attributes['he']);
        $methodElement->setHt((float) $attributes['ht']);
        $methodElement->setHb((float) $attributes['hb']);
        $methodElement->setHi((float) $attributes['hi']);
        $methodElement->setMi((float) $attributes['mi']);

        return $methodElement;
    }
}
