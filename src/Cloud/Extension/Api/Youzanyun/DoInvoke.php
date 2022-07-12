<?php

namespace Com\Youzan\Cloud\Extension\Api\Youzanyun;

use Com\Youzan\Cloud\Extension\Param\Dto\GatewayInvokeRequest;
use Com\Youzan\Cloud\Extension\Param\Dto\GatewayInvokeResponseOutParam;

interface DoInvoke {

    public function doInvoke(GatewayInvokeRequest $request) : GatewayInvokeResponseOutParam;

}