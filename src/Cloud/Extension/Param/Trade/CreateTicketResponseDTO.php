<?php

namespace Com\Youzan\Cloud\Extension\Param\Trade;



/**
 *  
 * @author Baymax
 * @create Wed Apr 27 17:15:30 CST 2022
 */
class CreateTicketResponseDTO implements \JsonSerializable {

    /**
     * 创建卡券是否成功
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