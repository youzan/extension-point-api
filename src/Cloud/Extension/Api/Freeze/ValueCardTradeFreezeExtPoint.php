<?php

namespace Com\Youzan\Cloud\Extension\Api\Freeze;

use Com\Youzan\Cloud\Extension\Param\Request\ValueCardTradeFreezeRequest;
use Com\Youzan\Cloud\Extension\Param\Response\ValueCardTradeFreezeResponseOutParam;

interface ValueCardTradeFreezeExtPoint {

    public function tradeFreeze(ValueCardTradeFreezeRequest $request) : ValueCardTradeFreezeResponseOutParam;

}