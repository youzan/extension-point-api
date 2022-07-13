<?php

namespace Com\Youzan\Cloud\Extension\Api\Chain;

use Com\Youzan\Cloud\Extension\Param\Shop\ShopEnterPositionRequest;
use Com\Youzan\Cloud\Extension\Param\Shop\ShopRouteResultOutParam;
use Com\Youzan\Cloud\Extension\Param\Shop\ShopEnterRequest;

interface SubShopVisitExtPoint {

    public function routeWithPosition(ShopEnterPositionRequest $request) : ShopRouteResultOutParam;

    public function route(ShopEnterRequest $gatewayRequest) : ShopRouteResultOutParam;

}