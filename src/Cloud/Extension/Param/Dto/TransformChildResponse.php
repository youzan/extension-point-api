<?php

namespace Com\Youzan\Cloud\Extension\Param\Dto;



/**
 * a
 * @author Baymax
 * @create Tue Dec 28 20:39:24 CST 2021
 */
class TransformChildResponse implements \JsonSerializable {

    /**
     * a
     * @var string
     */
    private $ReStr;

    /**
     * a
     * @var int
     */
    private $rL;

    /**
     * a
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