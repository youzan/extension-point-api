<?php

namespace Com\Youzan\Cloud\Extension\Param\Trade;



/**
 *  
 * @author Baymax
 * @create Tue Mar 01 18:41:04 CST 2022
 */
class DisableTicketResponseDTO implements \JsonSerializable {

    /**
     * 电子卡券作废是否成功
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