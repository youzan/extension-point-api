<?php

namespace Com\Youzan\Cloud\Extension\Param\Req;



/**
 * 请求入参
 * @author Baymax
 * @create 2021-01-05 17:51:36.0
 */
class RedirectUrlExtReqDTO implements \JsonSerializable {

    /**
     * 订单no
     * @var string
     */
    private $orderNo;

    /**
     * 店铺id
     * @var int
     */
    private $kdtId;

    /**
     * 订单类型
     * @var int
     */
    private $orderType;

    /**
     * 支付工具
     * @var int
     */
    private $payWay;



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

    /**
     * @return int
     */
    public function getKdtId(): int
    {
        return $this->kdtId;
    }

    /**
     * @param int $kdtId
     */
    public function setKdtId(int $kdtId): void
    {
        $this->kdtId = $kdtId;
    }

    /**
     * @return int
     */
    public function getOrderType(): int
    {
        return $this->orderType;
    }

    /**
     * @param int $orderType
     */
    public function setOrderType(int $orderType): void
    {
        $this->orderType = $orderType;
    }

    /**
     * @return int
     */
    public function getPayWay(): int
    {
        return $this->payWay;
    }

    /**
     * @param int $payWay
     */
    public function setPayWay(int $payWay): void
    {
        $this->payWay = $payWay;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}