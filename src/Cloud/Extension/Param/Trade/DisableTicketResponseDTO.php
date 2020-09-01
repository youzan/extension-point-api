<?php

namespace Com\Youzan\Cloud\Extension\Param\Trade;



/**
 * 
 * @author Baymax
 * @create Tue Jul 23 19:43:59 CST 2019
 */
class DisableTicketResponseDTO implements \JsonSerializable {

    /**
     * 是否成功
     * @var bool
     */
    private $success;



    /**
     * @return bool
     */
    public function getSuccess(): bool
    {
        return $this->success;
    }

    /**
     * @param bool $success
     */
    public function setSuccess(bool $success): void
    {
        $this->success = $success;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}