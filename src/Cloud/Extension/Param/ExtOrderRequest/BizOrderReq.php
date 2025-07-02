<?php

namespace Com\Youzan\Cloud\Extension\Param\ExtOrderRequest;



/**
 * 需要查询的单据信息
 * @author Baymax
 * @create Wed Nov 27 10:17:39 CST 2024
 */
class BizOrderReq implements \JsonSerializable {

    /**
     * 单据类型:1.订单,2.退款单,3.无原单退款单
     * @var int
     */
    private $bizType;

    /**
     * 外部单据号
     * @var string
     */
    private $bizNo;



    /**
     * @return int
     */
    public function getBizType(): ?int
    {
        return $this->bizType;
    }

    /**
     * @param int $bizType
     */
    public function setBizType(?int $bizType): void
    {
        $this->bizType = $bizType;
    }

    /**
     * @return string
     */
    public function getBizNo(): ?string
    {
        return $this->bizNo;
    }

    /**
     * @param string $bizNo
     */
    public function setBizNo(?string $bizNo): void
    {
        $this->bizNo = $bizNo;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}