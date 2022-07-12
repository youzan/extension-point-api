<?php

namespace Com\Youzan\Cloud\Extension\Param\Param;

use Com\Youzan\Cloud\Extension\Param\Param\SendPresentsGift;
use Com\Youzan\Cloud\Extension\Param\Param\SendCouponsGift;
use Com\Youzan\Cloud\Extension\Param\Param\SendPointsGift;

/**
 *  
 * @author Baymax
 * @create Sat Apr 09 14:25:04 CST 2022
 */
class GiftSendEffect implements \JsonSerializable {

    /**
     *  
     * @var array
     */
    private $presentGifts;

    /**
     *  
     * @var array
     */
    private $couponGifts;

    /**
     *  
     * @var array
     */
    private $pointGifts;



    /**
     * @return array
     */
    public function getPresentGifts(): ?array
    {
        return $this->presentGifts;
    }

    /**
     * @param array $presentGifts
     */
    public function setPresentGifts(?array $presentGifts): void
    {
        $this->presentGifts = $presentGifts;
    }

    /**
     * @return array
     */
    public function getCouponGifts(): ?array
    {
        return $this->couponGifts;
    }

    /**
     * @param array $couponGifts
     */
    public function setCouponGifts(?array $couponGifts): void
    {
        $this->couponGifts = $couponGifts;
    }

    /**
     * @return array
     */
    public function getPointGifts(): ?array
    {
        return $this->pointGifts;
    }

    /**
     * @param array $pointGifts
     */
    public function setPointGifts(?array $pointGifts): void
    {
        $this->pointGifts = $pointGifts;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}