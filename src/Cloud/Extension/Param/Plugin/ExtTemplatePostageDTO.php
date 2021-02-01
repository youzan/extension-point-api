<?php

namespace Com\Youzan\Cloud\Extension\Param\Plugin;



/**
 * 包邮权益
 * @author Baymax
 * @create 2020-03-10 15:44:13.0
 */
class ExtTemplatePostageDTO implements \JsonSerializable {

    /**
     * 是否包邮
     * @var bool
     */
    private $isFree;



    /**
     * @return bool
     */
    public function getIsFree(): ?bool
    {
        return $this->isFree;
    }

    /**
     * @param bool $isFree
     */
    public function setIsFree(?bool $isFree): void
    {
        $this->isFree = $isFree;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}