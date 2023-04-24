<?php

namespace Com\Youzan\Cloud\Extension\Api\Cardvoucher;

use Com\Youzan\Cloud\Extension\Param\Request\ValueCardExchangeRequest;
use Com\Youzan\Cloud\Extension\Param\Response\ValueCardExchangeResponseOutParam;

interface ValueCardExchangePoint {

    public function exchange(ValueCardExchangeRequest $request) : ValueCardExchangeResponseOutParam;

}