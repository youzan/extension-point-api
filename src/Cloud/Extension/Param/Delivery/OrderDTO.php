<?php

namespace Com\Youzan\Cloud\Extension\Param\Delivery;

use Com\Youzan\Cloud\Extension\Param\BuyerDTO;

/**
 * 订单信息
 * @author Baymax
 * @create Wed Jun 05 11:56:20 CST 2019
 */
class OrderDTO implements \JsonSerializable {

    /**
     * 订单号
     * @var string
     */
    private $orderNo;

    /**
     * 外部业务号
     * @var string
     */
    private $outBizNo;

    /**
     * 渠道类型
     * @var string
     */
    private $channelType;

    /**
     * 合同id
     * @var int
     */
    private $contractId;

    /**
     * 支付id
     * @var string
     */
    private $payId;

    /**
     * 订单类型
     * @var string
     */
    private $orderType;

    /**
     * 订单类型
     * @var string
     */
    private $orderStatus;

    /**
     * 业务分类
     * @var string
     */
    private $bizCategory;

    /**
     * 买家信息
     * @var BuyerDTO
     */
    private $buyerDTO;



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
     * @return string
     */
    public function getOutBizNo(): string
    {
        return $this->outBizNo;
    }

    /**
     * @param string $outBizNo
     */
    public function setOutBizNo(string $outBizNo): void
    {
        $this->outBizNo = $outBizNo;
    }

    /**
     * @return string
     */
    public function getChannelType(): string
    {
        return $this->channelType;
    }

    /**
     * @param string $channelType
     */
    public function setChannelType(string $channelType): void
    {
        $this->channelType = $channelType;
    }

    /**
     * @return int
     */
    public function getContractId(): int
    {
        return $this->contractId;
    }

    /**
     * @param int $contractId
     */
    public function setContractId(int $contractId): void
    {
        $this->contractId = $contractId;
    }

    /**
     * @return string
     */
    public function getPayId(): string
    {
        return $this->payId;
    }

    /**
     * @param string $payId
     */
    public function setPayId(string $payId): void
    {
        $this->payId = $payId;
    }

    /**
     * @return string
     */
    public function getOrderType(): string
    {
        return $this->orderType;
    }

    /**
     * @param string $orderType
     */
    public function setOrderType(string $orderType): void
    {
        $this->orderType = $orderType;
    }

    /**
     * @return string
     */
    public function getOrderStatus(): string
    {
        return $this->orderStatus;
    }

    /**
     * @param string $orderStatus
     */
    public function setOrderStatus(string $orderStatus): void
    {
        $this->orderStatus = $orderStatus;
    }

    /**
     * @return string
     */
    public function getBizCategory(): string
    {
        return $this->bizCategory;
    }

    /**
     * @param string $bizCategory
     */
    public function setBizCategory(string $bizCategory): void
    {
        $this->bizCategory = $bizCategory;
    }

    /**
     * @return BuyerDTO
     */
    public function getBuyerDTO(): BuyerDTO
    {
        return $this->buyerDTO;
    }

    /**
     * @param BuyerDTO $buyerDTO
     */
    public function setBuyerDTO(BuyerDTO $buyerDTO): void
    {
        $this->buyerDTO = $buyerDTO;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}