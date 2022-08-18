<?php

namespace Com\Youzan\Cloud\Extension\Param\Param;

use Com\Youzan\Cloud\Extension\Param\Param\CouponTemplate;

/**
 *  
 * @author Baymax
 * @create Sat Apr 09 18:52:00 CST 2022
 */
class SendCouponsGift implements \JsonSerializable {

    /**
     *  
     * @var int
     */
    private $couponTemplateId;

    /**
     *  
     * @var int
     */
    private $num;

    /**
     *  
     * @var CouponTemplate
     */
    private $couponTemplate;

    /**
     *  
     * @var string
     */
    private $giftType;



    /**
     * @return int
     */
    public function getCouponTemplateId(): ?int
    {
        return $this->couponTemplateId;
    }

    /**
     * @param int $couponTemplateId
     */
    public function setCouponTemplateId(?int $couponTemplateId): void
    {
        $this->couponTemplateId = $couponTemplateId;
    }

    /**
     * @return int
     */
    public function getNum(): ?int
    {
        return $this->num;
    }

    /**
     * @param int $num
     */
    public function setNum(?int $num): void
    {
        $this->num = $num;
    }

    /**
     * @return CouponTemplate
     */
    public function getCouponTemplate(): ?CouponTemplate
    {
        return $this->couponTemplate;
    }

    /**
     * @param CouponTemplate $couponTemplate
     */
    public function setCouponTemplate(?CouponTemplate $couponTemplate): void
    {
        $this->couponTemplate = $couponTemplate;
    }

    /**
     * @return string
     */
    public function getGiftType(): ?string
    {
        return $this->giftType;
    }

    /**
     * @param string $giftType
     */
    public function setGiftType(?string $giftType): void
    {
        $this->giftType = $giftType;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}