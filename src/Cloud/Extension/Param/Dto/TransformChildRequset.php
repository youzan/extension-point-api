<?php

namespace Com\Youzan\Cloud\Extension\Param\Dto;



/**
 * a
 * @author Baymax
 * @create Tue Dec 28 20:39:24 CST 2021
 */
class TransformChildRequset implements \JsonSerializable {

    /**
     * a
     * @var string
     */
    private $CS;

    /**
     * a
     * @var bool
     */
    private $bl;

    /**
     * a
     * @var int
     */
    private $it;

    /**
     * a
     * @var int
     */
    private $cL;



    /**
     * @return string
     */
    public function getCS(): ?string
    {
        return $this->CS;
    }

    /**
     * @param string $CS
     */
    public function setCS(?string $CS): void
    {
        $this->CS = $CS;
    }

    /**
     * @return bool
     */
    public function getBl(): ?bool
    {
        return $this->bl;
    }

    /**
     * @param bool $bl
     */
    public function setBl(?bool $bl): void
    {
        $this->bl = $bl;
    }

    /**
     * @return int
     */
    public function getIt(): ?int
    {
        return $this->it;
    }

    /**
     * @param int $it
     */
    public function setIt(?int $it): void
    {
        $this->it = $it;
    }

    /**
     * @return int
     */
    public function getCL(): ?int
    {
        return $this->cL;
    }

    /**
     * @param int $cL
     */
    public function setCL(?int $cL): void
    {
        $this->cL = $cL;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}