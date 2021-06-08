<?php

namespace Com\Youzan\Cloud\Extension\Api\Extpoint;

use Com\Youzan\Cloud\Extension\Param\Dto\RouteEnterStoreRequestDTO;
use Com\Youzan\Cloud\Extension\Param\Dto\RouteEnterStoreResponseDTOOutParam;
use Com\Youzan\Cloud\Extension\Param\Dto\ListStoresRequestDTO;
use Com\Youzan\Cloud\Extension\Param\Dto\ListStoresResponseDTOOutParam;

interface MultiStoreBizExtPoint {

    public function routeEnterStoreExt(RouteEnterStoreRequestDTO $request) : RouteEnterStoreResponseDTOOutParam;

    public function listStoresExt(ListStoresRequestDTO $request) : ListStoresResponseDTOOutParam;

}