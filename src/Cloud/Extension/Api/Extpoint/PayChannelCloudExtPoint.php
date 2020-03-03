<?php

namespace Com\Youzan\Cloud\Extension\Api\Extpoint;

use Com\Youzan\Cloud\Extension\Param\Request\PayChannelPayRequest;
use Com\Youzan\Cloud\Extension\Param\Response\PayChannelPayResponseOutParam;

interface PayChannelCloudExtPoint {

    public function pay(PayChannelPayRequest $request) : PayChannelPayResponseOutParam;

}