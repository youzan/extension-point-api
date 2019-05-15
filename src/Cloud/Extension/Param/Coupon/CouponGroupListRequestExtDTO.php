<?php

namespace Com\Youzan\Cloud\Extension\Param\Coupon;



/**
 * 请求参数
 * @author Baymax
 * @create Sat Sep 29 21:40:57 CST 2018
 */
class CouponGroupListRequestExtDTO implements \JsonSerializable {

    /**
     * 活动状态：0.全部 1.未开始 2.进行中 3.已结束
     * @var int
     */
    private $status;

    /**
     * 券类型 0：优惠券 1：优惠码
     * @var int
     */
    private $couponType;

    /**
     * 页数
     * @var int
     */
    private $pageNo;

    /**
     * 单页大小
     * @var int
     */
    private $pageSize;



    /**
     * @return int
     */
    public function getStatus(): int
    {
        return $this->status;
    }

    /**
     * @param int $status
     */
    public function setStatus(int $status): void
    {
        $this->status = $status;
    }

    /**
     * @return int
     */
    public function getCouponType(): int
    {
        return $this->couponType;
    }

    /**
     * @param int $couponType
     */
    public function setCouponType(int $couponType): void
    {
        $this->couponType = $couponType;
    }

    /**
     * @return int
     */
    public function getPageNo(): int
    {
        return $this->pageNo;
    }

    /**
     * @param int $pageNo
     */
    public function setPageNo(int $pageNo): void
    {
        $this->pageNo = $pageNo;
    }

    /**
     * @return int
     */
    public function getPageSize(): int
    {
        return $this->pageSize;
    }

    /**
     * @param int $pageSize
     */
    public function setPageSize(int $pageSize): void
    {
        $this->pageSize = $pageSize;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}