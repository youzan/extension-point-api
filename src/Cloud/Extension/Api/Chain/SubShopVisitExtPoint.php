<?php

namespace Com\Youzan\Cloud\Extension\Api\Chain;

use Com\Youzan\Cloud\Extension\Param\Shop\ShopEnterRequest;
use Com\Youzan\Cloud\Extension\Param\Shop\ShopRouteResultOutParam;

interface SubShopVisitExtPoint {

    public function route(ShopEnterRequest $request) : ShopRouteResultOutParam;

}