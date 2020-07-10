<?php

namespace Com\Youzan\Cloud\Extension\Param\Trade;



/**
 * 
 * @author Baymax
 * @create 2019-09-04 18:01:28.0
 */
class CreateTicketResponseDTO implements \JsonSerializable {

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