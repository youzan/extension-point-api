<?php

namespace Com\Youzan\Cloud\Extension\Param\Trade;



/**
 * 
 * @author Baymax
 * @create 2019-07-23 19:57:15.0
 */
class UnfrozenTicketResponseDTO implements \JsonSerializable {

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