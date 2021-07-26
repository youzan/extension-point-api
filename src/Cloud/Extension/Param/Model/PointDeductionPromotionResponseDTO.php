<?php

namespace Com\Youzan\Cloud\Extension\Param\Model;

use StdClass;

/**
 * 响应参数
 * @author Baymax
 * @create 2020-04-27 17:33:11.0
 */
class PointDeductionPromotionResponseDTO implements \JsonSerializable {

    /**
     * 下单店铺id
     * @var int
     */
    private $kdtId;

    /**
     * 订单号
     * @var string
     */
    private $orderNo;

    /**
     * 当前积分抵现可用状态。1&#x3D;用户积分数不足；2&#x3D;订单金额未达到门槛；3&#x3D;可以抵现。注意：当仅当状态为3时，才会进行订单优惠，状态1和2不进行订单优惠，只做前端展示
     * @var int
     */
    private $pointDeductionStatus;

    /**
     * 消耗积分数
     * @var int
     */
    private $costPoints;

    /**
     * 本次下单抵现金额，单位：分。如返回1000，则表示抵现10元
     * @var int
     */
    private $decrease;

    /**
     * 用户剩余积分
     * @var int
     */
    private $remainPoints;

    /**
     * 积分抵现比例。100&#x3D;100积分：1元
     * @var int
     */
    private $rate;

    /**
     * 额外扩展信息，可以返回到前端扩展点
     * @var stdClass
     */
    private $extraInfo;



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
    public function getPointDeductionStatus(): ?int
    {
        return $this->pointDeductionStatus;
    }

    /**
     * @param int $pointDeductionStatus
     */
    public function setPointDeductionStatus(?int $pointDeductionStatus): void
    {
        $this->pointDeductionStatus = $pointDeductionStatus;
    }

    /**
     * @return int
     */
    public function getCostPoints(): ?int
    {
        return $this->costPoints;
    }

    /**
     * @param int $costPoints
     */
    public function setCostPoints(?int $costPoints): void
    {
        $this->costPoints = $costPoints;
    }

    /**
     * @return int
     */
    public function getDecrease(): ?int
    {
        return $this->decrease;
    }

    /**
     * @param int $decrease
     */
    public function setDecrease(?int $decrease): void
    {
        $this->decrease = $decrease;
    }

    /**
     * @return int
     */
    public function getRemainPoints(): ?int
    {
        return $this->remainPoints;
    }

    /**
     * @param int $remainPoints
     */
    public function setRemainPoints(?int $remainPoints): void
    {
        $this->remainPoints = $remainPoints;
    }

    /**
     * @return int
     */
    public function getRate(): ?int
    {
        return $this->rate;
    }

    /**
     * @param int $rate
     */
    public function setRate(?int $rate): void
    {
        $this->rate = $rate;
    }

    /**
     * @return stdClass
     */
    public function getExtraInfo(): ?stdClass
    {
        return $this->extraInfo;
    }

    /**
     * @param stdClass $extraInfo
     */
    public function setExtraInfo(?stdClass $extraInfo): void
    {
        $this->extraInfo = $extraInfo;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}