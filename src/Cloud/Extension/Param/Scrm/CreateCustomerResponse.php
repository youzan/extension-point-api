<?php

namespace Com\Youzan\Cloud\Extension\Param\Scrm;



/**
 *  
 * @author Baymax
 * @create Tue Jan 10 11:40:10 CST 2023
 */
class CreateCustomerResponse implements \JsonSerializable {

    /**
     * 是否成功
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