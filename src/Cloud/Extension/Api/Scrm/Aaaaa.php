<?php

namespace Com\Youzan\Cloud\Extension\Api\Scrm;

use Com\Youzan\Cloud\Extension\Param\Dto\GatewayInvokeRequest;
use Com\Youzan\Cloud\Extension\Param\Dto\GatewayInvokeResponseOutParam;

interface Aaaaa {

    public function doInvoke(GatewayInvokeRequest $request) : GatewayInvokeResponseOutParam;

}