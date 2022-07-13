<?php

namespace Com\Youzan\Cloud\Extension\Param\Response;



/**
 *  
 * @author Baymax
 * @create Mon Apr 18 14:23:37 CST 2022
 */
class ValueCardTakeResponse implements \JsonSerializable {

    /**
     * 是否领取成功
     * @var bool
     */
    private $success;



    /**
     * @return bool
     */
    public function getSuccess(): ?bool
    {
        return $this->success;
    }

    /**
     * @param bool $success
     */
    public function setSuccess(?bool $success): void
    {
        $this->success = $success;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}