<?php

namespace Com\Youzan\Cloud\Extension\Param\Response;



/**
 * 返回参数
 * @author Baymax
 * @create Mon Mar 14 18:00:31 CST 2022
 */
class ValueCardTradeFreezeResponse implements \JsonSerializable {

    /**
     * 冻结状态 SUCCESS:成功，FAIL:失败
     * @var string
     */
    private $freezeStatus;

    /**
     * 外部冻结流水号（保证唯一）
     * @var string
     */
    private $freezeChannelNo;

    /**
     * 订单号
     * @var string
     */
    private $orderNo;

    /**
     * 冻结金额（单位分）
     * @var int
     */
    private $freezeAmount;



    /**
     * @return string
     */
    public function getFreezeStatus(): ?string
    {
        return $this->freezeStatus;
    }

    /**
     * @param string $freezeStatus
     */
    public function setFreezeStatus(?string $freezeStatus): void
    {
        $this->freezeStatus = $freezeStatus;
    }

    /**
     * @return string
     */
    public function getFreezeChannelNo(): ?string
    {
        return $this->freezeChannelNo;
    }

    /**
     * @param string $freezeChannelNo
     */
    public function setFreezeChannelNo(?string $freezeChannelNo): void
    {
        $this->freezeChannelNo = $freezeChannelNo;
    }

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
    public function getFreezeAmount(): ?int
    {
        return $this->freezeAmount;
    }

    /**
     * @param int $freezeAmount
     */
    public function setFreezeAmount(?int $freezeAmount): void
    {
        $this->freezeAmount = $freezeAmount;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}