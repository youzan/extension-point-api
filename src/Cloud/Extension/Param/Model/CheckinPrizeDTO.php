<?php

namespace Com\Youzan\Cloud\Extension\Param\Model;

use Com\Youzan\Cloud\Extension\Param\CheckinPrizeDTO\CouponDTO;
use Com\Youzan\Cloud\Extension\Param\CheckinPrizeDTO\PresentDTO;
use Com\Youzan\Cloud\Extension\Param\CheckinPrizeDTO\PointDTO;
use Com\Youzan\Cloud\Extension\Param\CheckinPrizeDTO\PhPrizeDTO;

/**
 * 
 * @author Baymax
 * @create 2021-04-13 15:16:53.0
 */
class CheckinPrizeDTO implements \JsonSerializable {

    /**
     * 
     * @var int
     */
    private $type;

    /**
     * 
     * @var int
     */
    private $times;

    /**
     * 
     * @var bool
     */
    private $limit;

    /**
     * 
     * @var int
     */
    private $limitNum;

    /**
     * 
     * @var CouponDTO
     */
    private $coupon;

    /**
     * 
     * @var PresentDTO
     */
    private $present;

    /**
     * 
     * @var PointDTO
     */
    private $points;

    /**
     * 
     * @var PhPrizeDTO
     */
    private $phPrizeDTO;



    /**
     * @return int
     */
    public function getType(): ?int
    {
        return $this->type;
    }

    /**
     * @param int $type
     */
    public function setType(?int $type): void
    {
        $this->type = $type;
    }

    /**
     * @return int
     */
    public function getTimes(): ?int
    {
        return $this->times;
    }

    /**
     * @param int $times
     */
    public function setTimes(?int $times): void
    {
        $this->times = $times;
    }

    /**
     * @return bool
     */
    public function getLimit(): ?bool
    {
        return $this->limit;
    }

    /**
     * @param bool $limit
     */
    public function setLimit(?bool $limit): void
    {
        $this->limit = $limit;
    }

    /**
     * @return int
     */
    public function getLimitNum(): ?int
    {
        return $this->limitNum;
    }

    /**
     * @param int $limitNum
     */
    public function setLimitNum(?int $limitNum): void
    {
        $this->limitNum = $limitNum;
    }

    /**
     * @return CouponDTO
     */
    public function getCoupon(): ?CouponDTO
    {
        return $this->coupon;
    }

    /**
     * @param CouponDTO $coupon
     */
    public function setCoupon(?CouponDTO $coupon): void
    {
        $this->coupon = $coupon;
    }

    /**
     * @return PresentDTO
     */
    public function getPresent(): ?PresentDTO
    {
        return $this->present;
    }

    /**
     * @param PresentDTO $present
     */
    public function setPresent(?PresentDTO $present): void
    {
        $this->present = $present;
    }

    /**
     * @return PointDTO
     */
    public function getPoints(): ?PointDTO
    {
        return $this->points;
    }

    /**
     * @param PointDTO $points
     */
    public function setPoints(?PointDTO $points): void
    {
        $this->points = $points;
    }

    /**
     * @return PhPrizeDTO
     */
    public function getPhPrizeDTO(): ?PhPrizeDTO
    {
        return $this->phPrizeDTO;
    }

    /**
     * @param PhPrizeDTO $phPrizeDTO
     */
    public function setPhPrizeDTO(?PhPrizeDTO $phPrizeDTO): void
    {
        $this->phPrizeDTO = $phPrizeDTO;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}