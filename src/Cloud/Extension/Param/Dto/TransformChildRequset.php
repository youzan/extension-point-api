<?php

namespace Com\Youzan\Cloud\Extension\Param\Dto;



/**
 *  
 * @author Baymax
 * @create Mon Feb 28 15:21:25 CST 2022
 */
class TransformChildRequset implements \JsonSerializable {

    /**
     *  
     * @var string
     */
    private $CS;

    /**
     *  
     * @var bool
     */
    private $bl;

    /**
     *  
     * @var int
     */
    private $it;

    /**
     *  
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