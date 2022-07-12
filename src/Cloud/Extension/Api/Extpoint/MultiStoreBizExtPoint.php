<?php

namespace Com\Youzan\Cloud\Extension\Api\Extpoint;

use Com\Youzan\Cloud\Extension\Param\Dto\ListGoodsSalableStoreQueryOpenDTO;
use Com\Youzan\Cloud\Extension\Param\Dto\ListStoresResponseDTOOutParam;
use Com\Youzan\Cloud\Extension\Param\Dto\RouteEnterStoreRequestDTO;
use Com\Youzan\Cloud\Extension\Param\Dto\RouteEnterStoreResponseDTOOutParam;
use Com\Youzan\Cloud\Extension\Param\Dto\ListStoresRequestDTO;

interface MultiStoreBizExtPoint {

    public function listGoodsSalableStoreExt(ListGoodsSalableStoreQueryOpenDTO $request) : ListStoresResponseDTOOutParam;

    public function routeEnterStoreExt(RouteEnterStoreRequestDTO $requestDTO) : RouteEnterStoreResponseDTOOutParam;

    public function listStoresExt(ListStoresRequestDTO $queryDTO) : ListStoresResponseDTOOutParam;

}