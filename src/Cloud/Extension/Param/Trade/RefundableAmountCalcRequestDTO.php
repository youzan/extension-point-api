<?php

namespace Com\Youzan\Cloud\Extension\Param\Trade;

use StdClass;
use Com\Youzan\Cloud\Extension\Param\Trade\RefundOrderDTO;
use Com\Youzan\Cloud\Extension\Param\Trade\RefundableFeeDTO;

/**
 * 
 * @author Baymax
 * @create 2019-07-23 17:37:38.0
 */
class RefundableAmountCalcRequestDTO implements \JsonSerializable {

    /**
     * 订单号
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
     * @var RefundableFeeDTO
     */
    private $itemRefundableFeeList;



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
    public function getOrderRefundableAmt(): int
    {
        return $this->orderRefundableAmt;
    }

    /**
     * @param int $orderRefundableAmt
     */
    public function setOrderRefundableAmt(int $orderRefundableAmt): void
    {
        $this->orderRefundableAmt = $orderRefundableAmt;
    }

    /**
     * @return stdClass
     */
    public function getExtension(): stdClass
    {
        return $this->extension;
    }

    /**
     * @param stdClass $extension
     */
    public function setExtension(stdClass $extension): void
    {
        $this->extension = $extension;
    }

    /**
     * @return array
     */
    public function getRefundOrderList(): array
    {
        return $this->refundOrderList;
    }

    /**
     * @param array $refundOrderList
     */
    public function setRefundOrderList(array $refundOrderList): void
    {
        $this->refundOrderList = $refundOrderList;
    }

    /**
     * @return RefundableFeeDTO
     */
    public function getItemRefundableFeeList(): RefundableFeeDTO
    {
        return $this->itemRefundableFeeList;
    }

    /**
     * @param RefundableFeeDTO $itemRefundableFeeList
     */
    public function setItemRefundableFeeList(RefundableFeeDTO $itemRefundableFeeList): void
    {
        $this->itemRefundableFeeList = $itemRefundableFeeList;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}