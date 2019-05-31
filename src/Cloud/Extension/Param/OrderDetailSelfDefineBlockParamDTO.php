<?php

namespace Com\Youzan\Cloud\Extension\Param;



/**
 * 订单详情自定义数据请求参数
 * @author Baymax
 * @create 2018-09-14 18:01:22.0
 */
class OrderDetailSelfDefineBlockParamDTO implements \JsonSerializable {

    /**
     * 订单号
     * @var string
     */
    private $orderNo;



    /**
     * @return string
     */
    public function getOrderNo(): string
    {
        return $this->orderNo;
    }

    /**
     * @param string $orderNo
     */
    public function setOrderNo(string $orderNo): void
    {
        $this->orderNo = $orderNo;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}