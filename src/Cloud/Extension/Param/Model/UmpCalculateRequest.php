<?php

namespace Com\Youzan\Cloud\Extension\Param\Model;

use Com\Youzan\Cloud\Extension\Param\Model\BillingBaseInfo;
use Com\Youzan\Cloud\Extension\Param\Model\BillingDiscount;

/**
 * 请求参数
 * @author Baymax
 * @create 2020-06-11 11:03:35.0
 */
class UmpCalculateRequest implements \JsonSerializable {

    /**
     * 基本参数
     * @var BillingBaseInfo
     */
    private $billingBaseInfo;

    /**
     * 优惠信息
     * @var BillingDiscount
     */
    private $billingDiscount;



    /**
     * @return BillingBaseInfo
     */
    public function getBillingBaseInfo(): BillingBaseInfo
    {
        return $this->billingBaseInfo;
    }

    /**
     * @param BillingBaseInfo $billingBaseInfo
     */
    public function setBillingBaseInfo(BillingBaseInfo $billingBaseInfo): void
    {
        $this->billingBaseInfo = $billingBaseInfo;
    }

    /**
     * @return BillingDiscount
     */
    public function getBillingDiscount(): BillingDiscount
    {
        return $this->billingDiscount;
    }

    /**
     * @param BillingDiscount $billingDiscount
     */
    public function setBillingDiscount(BillingDiscount $billingDiscount): void
    {
        $this->billingDiscount = $billingDiscount;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}