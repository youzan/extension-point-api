<?php

namespace Com\Youzan\Cloud\Extension\Param\Response;

use Com\Youzan\Cloud\Extension\Param\ExtRefundOrderResponse\ExtRefundOrder;

/**
 * 返回体
 * @author Baymax
 * @create Tue Aug 29 15:23:30 CST 2023
 */
class ExtRefundOrderResponse implements \JsonSerializable {

    /**
     * 退款单信息列表
     * @var array
     */
    private $refundOrderList;



    /**
     * @return array
     */
    public function getRefundOrderList(): ?array
    {
        return $this->refundOrderList;
    }

    /**
     * @param array $refundOrderList
     */
    public function setRefundOrderList(?array $refundOrderList): void
    {
        $this->refundOrderList = $refundOrderList;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}