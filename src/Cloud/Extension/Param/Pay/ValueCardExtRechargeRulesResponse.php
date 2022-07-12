<?php

namespace Com\Youzan\Cloud\Extension\Param\Pay;

use Com\Youzan\Cloud\Extension\Param\Pay\ValueCardExtRechargeRuleDTO;

/**
 * 响应参数
 * @author Baymax
 * @create Mon Mar 14 17:57:37 CST 2022
 */
class ValueCardExtRechargeRulesResponse implements \JsonSerializable {

    /**
     * 储值信息
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