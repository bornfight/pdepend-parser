<?php
/**
 * Created by PhpStorm.
 * User: josip
 * Date: 2019-01-03
 * Time: 10:36.
 */

namespace Bornfight\PDependParser\Element;

class MethodElement
{
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
     * cyclomatic complexity number.
     *
     * @var int
     */
    private $ccn;

    /**
     * extended cyclomatic complexity number.
     *
     * @var int
     */
    private $ccn2;

    /**
     * lines of code.
     *
     * @var int
     */
    private $loc;

    /**
     * comment lines of code.
     *
     * @var int
     */
    private $cloc;

    /**
     * executable lines of code.
     *
     * @var int
     */
    private $eloc;

    /**
     * logical lines of code.
     *
     * @var int
     */
    private $lloc;

    /**
     * non commen t lines of code.
     *
     * @var int
     */
    private $ncloc;

    /**
     * NPath complexity.
     *
     * @var int
     */
    private $npath;

    /**
     * @var int
     */
    private $hnt;

    /**
     * @var int
     */
    private $hnd;

    /**
     * @var float
     */
    private $hv;

    /**
     * @var float
     */
    private $hd;

    /**
     * @var float
     */
    private $hl;

    /**
     * @var float
     */
    private $he;

    /**
     * @var float
     */
    private $ht;

    /**
     * @var float
     */
    private $hb;

    /**
     * @var float
     */
    private $hi;

    /**
     * @var float
     */
    private $mi;

    public function __construct(string $name)
    {
        if (!$name || '' === $name) {
            throw new \InvalidArgumentException('Invalid package name');
        }

        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
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

    /**
     * @return int
     */
    public function getCcn(): int
    {
        return $this->ccn;
    }

    /**
     * @param int $ccn
     */
    public function setCcn(int $ccn): void
    {
        $this->ccn = $ccn;
    }

    /**
     * @return int
     */
    public function getCcn2(): int
    {
        return $this->ccn2;
    }

    /**
     * @param int $ccn2
     */
    public function setCcn2(int $ccn2): void
    {
        $this->ccn2 = $ccn2;
    }

    /**
     * @return int
     */
    public function getLoc(): int
    {
        return $this->loc;
    }

    /**
     * @param int $loc
     */
    public function setLoc(int $loc): void
    {
        $this->loc = $loc;
    }

    /**
     * @return int
     */
    public function getCloc(): int
    {
        return $this->cloc;
    }

    /**
     * @param int $cloc
     */
    public function setCloc(int $cloc): void
    {
        $this->cloc = $cloc;
    }

    /**
     * @return int
     */
    public function getEloc(): int
    {
        return $this->eloc;
    }

    /**
     * @param int $eloc
     */
    public function setEloc(int $eloc): void
    {
        $this->eloc = $eloc;
    }

    /**
     * @return int
     */
    public function getLloc(): int
    {
        return $this->lloc;
    }

    /**
     * @param int $lloc
     */
    public function setLloc(int $lloc): void
    {
        $this->lloc = $lloc;
    }

    /**
     * @return int
     */
    public function getNcloc(): int
    {
        return $this->ncloc;
    }

    /**
     * @param int $ncloc
     */
    public function setNcloc(int $ncloc): void
    {
        $this->ncloc = $ncloc;
    }

    /**
     * @return int
     */
    public function getNpath(): int
    {
        return $this->npath;
    }

    /**
     * @param int $npath
     */
    public function setNpath(int $npath): void
    {
        $this->npath = $npath;
    }

    /**
     * @return int
     */
    public function getHnt(): int
    {
        return $this->hnt;
    }

    /**
     * @param int $hnt
     */
    public function setHnt(int $hnt): void
    {
        $this->hnt = $hnt;
    }

    /**
     * @return int
     */
    public function getHnd(): int
    {
        return $this->hnd;
    }

    /**
     * @param int $hnd
     */
    public function setHnd(int $hnd): void
    {
        $this->hnd = $hnd;
    }

    /**
     * @return float
     */
    public function getHv(): float
    {
        return $this->hv;
    }

    /**
     * @param float $hv
     */
    public function setHv(float $hv): void
    {
        $this->hv = $hv;
    }

    /**
     * @return float
     */
    public function getHd(): float
    {
        return $this->hd;
    }

    /**
     * @param float $hd
     */
    public function setHd(float $hd): void
    {
        $this->hd = $hd;
    }

    /**
     * @return float
     */
    public function getHl(): float
    {
        return $this->hl;
    }

    /**
     * @param float $hl
     */
    public function setHl(float $hl): void
    {
        $this->hl = $hl;
    }

    /**
     * @return float
     */
    public function getHe(): float
    {
        return $this->he;
    }

    /**
     * @param float $he
     */
    public function setHe(float $he): void
    {
        $this->he = $he;
    }

    /**
     * @return float
     */
    public function getHb(): float
    {
        return $this->hb;
    }

    /**
     * @param float $hb
     */
    public function setHb(float $hb): void
    {
        $this->hb = $hb;
    }

    /**
     * @return float
     */
    public function getHi(): float
    {
        return $this->hi;
    }

    /**
     * @param float $hi
     */
    public function setHi(float $hi): void
    {
        $this->hi = $hi;
    }

    /**
     * @return float
     */
    public function getMi(): float
    {
        return $this->mi;
    }

    /**
     * @param float $mi
     */
    public function setMi(float $mi): void
    {
        $this->mi = $mi;
    }

    /**
     * @return float
     */
    public function getHt(): float
    {
        return $this->ht;
    }

    /**
     * @param float $ht
     */
    public function setHt(float $ht): void
    {
        $this->ht = $ht;
    }
}
