<?php

namespace Com\Youzan\Cloud\Extension\Param;



/**
 * （字段在2022年3月31日下线，请使用usedGroupPros对接，已对接开发者请尽快调整）使用的优惠券
 * @author Baymax
 * @create Thu Dec 08 11:03:38 CST 2022
 */
class UsedPro implements \JsonSerializable {

    /**
     * 优惠券id
     * @var string
     */
    private $promotionId;

    /**
     * 优惠券Type,目前只有card
     * @var string
     */
    private $promotionType;

    /**
     * 是否外部优惠,0 内部优惠券,1 外部优惠券
     * @var string
     */
    private $outerCoupon;



    /**
     * @return string
     */
    public function getPromotionId(): ?string
    {
        return $this->promotionId;
    }

    /**
     * @param string $promotionId
     */
    public function setPromotionId(?string $promotionId): void
    {
        $this->promotionId = $promotionId;
    }

    /**
     * @return string
     */
    public function getPromotionType(): ?string
    {
        return $this->promotionType;
    }

    /**
     * @param string $promotionType
     */
    public function setPromotionType(?string $promotionType): void
    {
        $this->promotionType = $promotionType;
    }

    /**
     * @return string
     */
    public function getOuterCoupon(): ?string
    {
        return $this->outerCoupon;
    }

    /**
     * @param string $outerCoupon
     */
    public function setOuterCoupon(?string $outerCoupon): void
    {
        $this->outerCoupon = $outerCoupon;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}