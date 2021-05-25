<?php

namespace Com\Youzan\Cloud\Extension\Api\Extpoint;

use Com\Youzan\Cloud\Extension\Param\Dto\RouteEnterStoreRequestDTO;
use Com\Youzan\Cloud\Extension\Param\Dto\RouteEnterStoreResponseDTOOutParam;

interface MultiStoreBizExtPoint {

    public function routeEnterStoreExt(RouteEnterStoreRequestDTO $request) : RouteEnterStoreResponseDTOOutParam;

}