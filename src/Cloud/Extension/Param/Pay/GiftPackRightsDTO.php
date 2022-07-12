<?php

namespace Com\Youzan\Cloud\Extension\Param\Pay;

use Com\Youzan\Cloud\Extension\Param\Pay\CouponRightsDTO;
use Com\Youzan\Cloud\Extension\Param\Pay\MemberCardRightsDTO;
use Com\Youzan\Cloud\Extension\Param\Pay\PointRightsDTO;
use Com\Youzan\Cloud\Extension\Param\Pay\GrowthPointRightsDTO;
use Com\Youzan\Cloud\Extension\Param\Pay\BonusAmountRightsDTO;
use Com\Youzan\Cloud\Extension\Param\Pay\PresentRightsDTO;
use Com\Youzan\Cloud\Extension\Param\Pay\OuterRightsDTO;

/**
 * 权益内容
 * @author Baymax
 * @create Mon Mar 14 17:57:37 CST 2022
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
     * 外部权益
     * @var array
     */
    private $outerRights;



    /**
     * @return array
     */
    public function getCouponRights(): ?array
    {
        return $this->couponRights;
    }

    /**
     * @param array $couponRights
     */
    public function setCouponRights(?array $couponRights): void
    {
        $this->couponRights = $couponRights;
    }

    /**
     * @return array
     */
    public function getMemberCardRights(): ?array
    {
        return $this->memberCardRights;
    }

    /**
     * @param array $memberCardRights
     */
    public function setMemberCardRights(?array $memberCardRights): void
    {
        $this->memberCardRights = $memberCardRights;
    }

    /**
     * @return PointRightsDTO
     */
    public function getPointRights(): ?PointRightsDTO
    {
        return $this->pointRights;
    }

    /**
     * @param PointRightsDTO $pointRights
     */
    public function setPointRights(?PointRightsDTO $pointRights): void
    {
        $this->pointRights = $pointRights;
    }

    /**
     * @return GrowthPointRightsDTO
     */
    public function getGrowthPointRights(): ?GrowthPointRightsDTO
    {
        return $this->growthPointRights;
    }

    /**
     * @param GrowthPointRightsDTO $growthPointRights
     */
    public function setGrowthPointRights(?GrowthPointRightsDTO $growthPointRights): void
    {
        $this->growthPointRights = $growthPointRights;
    }

    /**
     * @return BonusAmountRightsDTO
     */
    public function getBonusAmountRights(): ?BonusAmountRightsDTO
    {
        return $this->bonusAmountRights;
    }

    /**
     * @param BonusAmountRightsDTO $bonusAmountRights
     */
    public function setBonusAmountRights(?BonusAmountRightsDTO $bonusAmountRights): void
    {
        $this->bonusAmountRights = $bonusAmountRights;
    }

    /**
     * @return PresentRightsDTO
     */
    public function getPresentRights(): ?PresentRightsDTO
    {
        return $this->presentRights;
    }

    /**
     * @param PresentRightsDTO $presentRights
     */
    public function setPresentRights(?PresentRightsDTO $presentRights): void
    {
        $this->presentRights = $presentRights;
    }

    /**
     * @return array
     */
    public function getOuterRights(): ?array
    {
        return $this->outerRights;
    }

    /**
     * @param array $outerRights
     */
    public function setOuterRights(?array $outerRights): void
    {
        $this->outerRights = $outerRights;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}