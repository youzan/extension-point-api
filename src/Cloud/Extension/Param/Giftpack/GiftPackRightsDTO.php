<?php

namespace Com\Youzan\Cloud\Extension\Param\Giftpack;

use Com\Youzan\Cloud\Extension\Param\Giftpack\CouponRightsDTO;
use Com\Youzan\Cloud\Extension\Param\Giftpack\MemberCardRightsDTO;
use Com\Youzan\Cloud\Extension\Param\Giftpack\OuterRightsDTO;
use Com\Youzan\Cloud\Extension\Param\Giftpack\PointRightsDTO;
use Com\Youzan\Cloud\Extension\Param\Giftpack\GrowthPointRightsDTO;
use Com\Youzan\Cloud\Extension\Param\Giftpack\BonusAmountRightsDTO;
use Com\Youzan\Cloud\Extension\Param\Giftpack\PresentRightsDTO;

/**
 * 
 * @author Baymax
 * @create Tue Mar 24 10:56:53 CST 2020
 */
class GiftPackRightsDTO implements \JsonSerializable {

    /**
     * 优惠券权益列表
     * @var array
     */
    private $couponRights;

    /**
     * 会员卡权益列表
     * @var array
     */
    private $memberCardRights;

    /**
     * 外部权益列表
     * @var array
     */
    private $outerRights;

    /**
     * 积分权益
     * @var PointRightsDTO
     */
    private $pointRights;

    /**
     * 成长值权益
     * @var GrowthPointRightsDTO
     */
    private $growthPointRights;

    /**
     * 储值赠送金权益
     * @var BonusAmountRightsDTO
     */
    private $bonusAmountRights;

    /**
     * 赠品权益
     * @var PresentRightsDTO
     */
    private $presentRights;



    /**
     * @return array
     */
    public function getCouponRights(): array
    {
        return $this->couponRights;
    }

    /**
     * @param array $couponRights
     */
    public function setCouponRights(array $couponRights): void
    {
        $this->couponRights = $couponRights;
    }

    /**
     * @return array
     */
    public function getMemberCardRights(): array
    {
        return $this->memberCardRights;
    }

    /**
     * @param array $memberCardRights
     */
    public function setMemberCardRights(array $memberCardRights): void
    {
        $this->memberCardRights = $memberCardRights;
    }

    /**
     * @return array
     */
    public function getOuterRights(): array
    {
        return $this->outerRights;
    }

    /**
     * @param array $outerRights
     */
    public function setOuterRights(array $outerRights): void
    {
        $this->outerRights = $outerRights;
    }

    /**
     * @return PointRightsDTO
     */
    public function getPointRights(): PointRightsDTO
    {
        return $this->pointRights;
    }

    /**
     * @param PointRightsDTO $pointRights
     */
    public function setPointRights(PointRightsDTO $pointRights): void
    {
        $this->pointRights = $pointRights;
    }

    /**
     * @return GrowthPointRightsDTO
     */
    public function getGrowthPointRights(): GrowthPointRightsDTO
    {
        return $this->growthPointRights;
    }

    /**
     * @param GrowthPointRightsDTO $growthPointRights
     */
    public function setGrowthPointRights(GrowthPointRightsDTO $growthPointRights): void
    {
        $this->growthPointRights = $growthPointRights;
    }

    /**
     * @return BonusAmountRightsDTO
     */
    public function getBonusAmountRights(): BonusAmountRightsDTO
    {
        return $this->bonusAmountRights;
    }

    /**
     * @param BonusAmountRightsDTO $bonusAmountRights
     */
    public function setBonusAmountRights(BonusAmountRightsDTO $bonusAmountRights): void
    {
        $this->bonusAmountRights = $bonusAmountRights;
    }

    /**
     * @return PresentRightsDTO
     */
    public function getPresentRights(): PresentRightsDTO
    {
        return $this->presentRights;
    }

    /**
     * @param PresentRightsDTO $presentRights
     */
    public function setPresentRights(PresentRightsDTO $presentRights): void
    {
        $this->presentRights = $presentRights;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}