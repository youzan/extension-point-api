<?php

namespace Com\Youzan\Cloud\Extension\Param\Trade;



/**
 *  
 * @author Baymax
 * @create Thu Jan 13 22:27:43 CST 2022
 */
class UnfrozenTicketResponseDTO implements \JsonSerializable {

    /**
     * 电子卡券解冻是否成功
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