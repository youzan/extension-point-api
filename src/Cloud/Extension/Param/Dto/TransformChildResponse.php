<?php

namespace Com\Youzan\Cloud\Extension\Param\Dto;



/**
 *  
 * @author Baymax
 * @create Mon Feb 28 15:21:25 CST 2022
 */
class TransformChildResponse implements \JsonSerializable {

    /**
     *  
     * @var string
     */
    private $ReStr;

    /**
     *  
     * @var int
     */
    private $rL;

    /**
     *  
     * @var bool
     */
    private $b_l_e;



    /**
     * @return string
     */
    public function getReStr(): ?string
    {
        return $this->ReStr;
    }

    /**
     * @param string $ReStr
     */
    public function setReStr(?string $ReStr): void
    {
        $this->ReStr = $ReStr;
    }

    /**
     * @return int
     */
    public function getRL(): ?int
    {
        return $this->rL;
    }

    /**
     * @param int $rL
     */
    public function setRL(?int $rL): void
    {
        $this->rL = $rL;
    }

    /**
     * @return bool
     */
    public function getB_l_e(): ?bool
    {
        return $this->b_l_e;
    }

    /**
     * @param bool $b_l_e
     */
    public function setB_l_e(?bool $b_l_e): void
    {
        $this->b_l_e = $b_l_e;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}