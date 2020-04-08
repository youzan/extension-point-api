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
 * @create 2020-03-24 10:56:53.0
 */
class GiftPackRightsDTO implements \JsonSerializable {

    /**
     * 
     * @var array
     */
    private $couponRights;

    /**
     * 
     * @var array
     */
    private $memberCardRights;

    /**
     * 
     * @var array
     */
    private $outerRights;

    /**
     * 
     * @var PointRightsDTO
     */
    private $pointRights;

    /**
     * 
     * @var GrowthPointRightsDTO
     */
    private $growthPointRights;

    /**
     * 
     * @var BonusAmountRightsDTO
     */
    private $bonusAmountRights;

    /**
     * 
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