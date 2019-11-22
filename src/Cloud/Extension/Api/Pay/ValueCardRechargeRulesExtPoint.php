<?php

namespace Com\Youzan\Cloud\Extension\Api\Pay;

use Com\Youzan\Cloud\Extension\Param\Pay\ValueCardExtRechargeRulesRequest;
use Com\Youzan\Cloud\Extension\Param\Pay\ValueCardExtRechargeRulesResponseOutParam;

interface ValueCardRechargeRulesExtPoint {

    public function handle(ValueCardExtRechargeRulesRequest $request) : ValueCardExtRechargeRulesResponseOutParam;

}