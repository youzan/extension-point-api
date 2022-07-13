<?php

namespace Com\Youzan\Cloud\Extension\Param\Scrm;



/**
 * 响应出参
 * @author Baymax
 * @create Thu Feb 17 21:20:23 CST 2022
 */
class ModifyCustomerResponseDTO implements \JsonSerializable {

    /**
     * 是否成功，true-成功，false-失败
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