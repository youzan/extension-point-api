<?php

namespace Com\Youzan\Cloud\Extension\Param\Coupon;



/**
 * 优惠活动信息
 * @author Baymax
 * @create Fri Sep 28 18:50:33 CST 2018
 */
class PromotionInfoExtDTO implements \JsonSerializable {

    /**
     * 活动类型
     * @var string
     */
    private $promotionType;

    /**
     * 促销活动id
     * @var int
     */
    private $promotionId;

    /**
     * 应用这项活动之前的应付金额，单位分
     * @var int
     */
    private $prePay;

    /**
     * 应用这项活动之后的应付金额，单位分
     * @var int
     */
    private $newPay;

    /**
     * 活动的优惠金额，单位分
     * @var int
     */
    private $decrease;



    /**
     * @return string
     */
    public function getPromotionType(): string
    {
        return $this->promotionType;
    }

    /**
     * @param string $promotionType
     */
    public function setPromotionType(string $promotionType): void
    {
        $this->promotionType = $promotionType;
    }

    /**
     * @return int
     */
    public function getPromotionId(): int
    {
        return $this->promotionId;
    }

    /**
     * @param int $promotionId
     */
    public function setPromotionId(int $promotionId): void
    {
        $this->promotionId = $promotionId;
    }

    /**
     * @return int
     */
    public function getPrePay(): int
    {
        return $this->prePay;
    }

    /**
     * @param int $prePay
     */
    public function setPrePay(int $prePay): void
    {
        $this->prePay = $prePay;
    }

    /**
     * @return int
     */
    public function getNewPay(): int
    {
        return $this->newPay;
    }

    /**
     * @param int $newPay
     */
    public function setNewPay(int $newPay): void
    {
        $this->newPay = $newPay;
    }

    /**
     * @return int
     */
    public function getDecrease(): int
    {
        return $this->decrease;
    }

    /**
     * @param int $decrease
     */
    public function setDecrease(int $decrease): void
    {
        $this->decrease = $decrease;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}