<?php

namespace Com\Youzan\Cloud\Extension\Param\Trade;

use StdClass;
use Com\Youzan\Cloud\Extension\Param\Trade\RefundOrderDTO;
use Com\Youzan\Cloud\Extension\Param\Trade\RefundableFeeDTO;

/**
 * 订单详情自定义数据请求参数
 * @author Baymax
 * @create Thu Jan 13 20:54:23 CST 2022
 */
class RefundableAmountCalcRequestDTO implements \JsonSerializable {

    /**
     * 有赞订单号，E开头+年月日时分秒+随机数，长度24位字母和数字组合
     * @var string
     */
    private $orderNo;

    /**
     * 订单级别可退
     * @var int
     */
    private $orderRefundableAmt;

    /**
     * 扩展信息
     * @var stdClass
     */
    private $extension;

    /**
     * 历史退款记录列表
     * @var array
     */
    private $refundOrderList;

    /**
     * 商品级别可退金额数据
     * @var array
     */
    private $itemRefundableFeeList;

    /**
     * 店铺在有赞的id标识，有赞平台生成，在有赞平台唯一，用于判断信息属于哪一个店铺
     * @var int
     */
    private $kdtId;



    /**
     * @return string
     */
    public function getOrderNo(): ?string
    {
        return $this->orderNo;
    }

    /**
     * @param string $orderNo
     */
    public function setOrderNo(?string $orderNo): void
    {
        $this->orderNo = $orderNo;
    }

    /**
     * @return int
     */
    public function getOrderRefundableAmt(): ?int
    {
        return $this->orderRefundableAmt;
    }

    /**
     * @param int $orderRefundableAmt
     */
    public function setOrderRefundableAmt(?int $orderRefundableAmt): void
    {
        $this->orderRefundableAmt = $orderRefundableAmt;
    }

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

    /**
     * @return array
     */
    public function getItemRefundableFeeList(): ?array
    {
        return $this->itemRefundableFeeList;
    }

    /**
     * @param array $itemRefundableFeeList
     */
    public function setItemRefundableFeeList(?array $itemRefundableFeeList): void
    {
        $this->itemRefundableFeeList = $itemRefundableFeeList;
    }

    /**
     * @return int
     */
    public function getKdtId(): ?int
    {
        return $this->kdtId;
    }

    /**
     * @param int $kdtId
     */
    public function setKdtId(?int $kdtId): void
    {
        $this->kdtId = $kdtId;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}