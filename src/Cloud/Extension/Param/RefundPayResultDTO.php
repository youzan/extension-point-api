<?php

namespace Com\Youzan\Cloud\Extension\Param;

use StdClass;

/**
 *  
 * @author Baymax
 * @create Thu Jan 13 20:49:26 CST 2022
 */
class RefundPayResultDTO implements \JsonSerializable {

    /**
     * 扩展信息key-value
     * @var stdClass
     */
    private $extension;

    /**
     * 退款状态(SUCCESS | FAILED)
     * @var string
     */
    private $refundStatus;



    /**
     * @return stdClass
     */
    public function getExtension(): ?stdClass
    {
        return $this->extension;
    }

    /**
     * @param stdClass $extension
     */
    public function setExtension(?stdClass $extension): void
    {
        $this->extension = $extension;
    }

    /**
     * @return string
     */
    public function getRefundStatus(): ?string
    {
        return $this->refundStatus;
    }

    /**
     * @param string $refundStatus
     */
    public function setRefundStatus(?string $refundStatus): void
    {
        $this->refundStatus = $refundStatus;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}