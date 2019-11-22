<?php

namespace Com\Youzan\Cloud\Extension\Api\Pay;

use Com\Youzan\Cloud\Extension\Param\Pay\ValueCardExtRechargeNoticeDocRequest;
use Com\Youzan\Cloud\Extension\Param\Pay\ValueCardExtRechargeNoticeDocResponseOutParam;

interface ValueCardRechargeNoticeDocExtPoint {

    public function handle(ValueCardExtRechargeNoticeDocRequest $request) : ValueCardExtRechargeNoticeDocResponseOutParam;

}