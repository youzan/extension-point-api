<?php

namespace Com\Youzan\Cloud\Extension\Param\CheckinPrizeDTO;



/**
 * 
 * @author Baymax
 * @create 2021-04-13 15:16:53.0
 */
class PhPrizeDTO implements \JsonSerializable {

    /**
     * 
     * @var string
     */
    private $presentUrl;

    /**
     * 
     * @var string
     */
    private $presentDesc;



    /**
     * @return string
     */
    public function getPresentUrl(): ?string
    {
        return $this->presentUrl;
    }

    /**
     * @param string $presentUrl
     */
    public function setPresentUrl(?string $presentUrl): void
    {
        $this->presentUrl = $presentUrl;
    }

    /**
     * @return string
     */
    public function getPresentDesc(): ?string
    {
        return $this->presentDesc;
    }

    /**
     * @param string $presentDesc
     */
    public function setPresentDesc(?string $presentDesc): void
    {
        $this->presentDesc = $presentDesc;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}