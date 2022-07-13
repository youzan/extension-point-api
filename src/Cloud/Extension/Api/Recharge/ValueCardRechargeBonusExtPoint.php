<?php

namespace Com\Youzan\Cloud\Extension\Api\Recharge;

use Com\Youzan\Cloud\Extension\Param\Request\ValueCardExtBonusAmountRequest;
use Com\Youzan\Cloud\Extension\Param\Response\ValueCardExtBonusAmountResponseOutParam;

interface ValueCardRechargeBonusExtPoint {

    public function rechargeBonusAmount(ValueCardExtBonusAmountRequest $request) : ValueCardExtBonusAmountResponseOutParam;

}