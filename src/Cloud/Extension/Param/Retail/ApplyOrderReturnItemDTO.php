<?php

namespace Com\Youzan\Cloud\Extension\Param\Retail;



/**
 * 明细
 * @author Baymax
 * @create 2019-08-02 15:55:17.0
 */
class ApplyOrderReturnItemDTO implements \JsonSerializable {

    /**
     * skuCode码
     * @var string
     */
    private $skuCode;

    /**
     * 数量
     * @var string
     */
    private $planQty;



    /**
     * @return string
     */
    public function getSkuCode(): string
    {
        return $this->skuCode;
    }

    /**
     * @param string $skuCode
     */
    public function setSkuCode(string $skuCode): void
    {
        $this->skuCode = $skuCode;
    }

    /**
     * @return string
     */
    public function getPlanQty(): string
    {
        return $this->planQty;
    }

    /**
     * @param string $planQty
     */
    public function setPlanQty(string $planQty): void
    {
        $this->planQty = $planQty;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}