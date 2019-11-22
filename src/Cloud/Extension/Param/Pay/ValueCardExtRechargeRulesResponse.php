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
    private $valueCardExtRechargeRules;



    /**
     * @return array
     */
    public function getValueCardExtRechargeRules(): array
    {
        return $this->valueCardExtRechargeRules;
    }

    /**
     * @param array $valueCardExtRechargeRules
     */
    public function setValueCardExtRechargeRules(array $valueCardExtRechargeRules): void
    {
        $this->valueCardExtRechargeRules = $valueCardExtRechargeRules;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}