<?php

namespace Com\Youzan\Cloud\Extension\Param\Pay;

use Com\Youzan\Cloud\Extension\Param\Pay\ValueCardExtRechargeRuleDTO;

/**
 * 
 * @author Baymax
 * @create 2019-11-22 12:15:26.0
 */
class ValueCardExtRechargeRulesResponse implements \JsonSerializable {

    /**
     * 
     * @var array
     */
    private $productInfos;



    /**
     * @return array
     */
    public function getProductInfos(): ?array
    {
        return $this->productInfos;
    }

    /**
     * @param array $productInfos
     */
    public function setProductInfos(?array $productInfos): void
    {
        $this->productInfos = $productInfos;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}