<?php

namespace Com\Youzan\Cloud\Extension\Api\Extpoint;

use Com\Youzan\Cloud\Extension\Param\Dto\ListStoresRequestDTO;
use Com\Youzan\Cloud\Extension\Param\Dto\ListStoresResponseDTOOutParam;
use Com\Youzan\Cloud\Extension\Param\Dto\RouteEnterStoreRequestDTO;
use Com\Youzan\Cloud\Extension\Param\Dto\RouteEnterStoreResponseDTOOutParam;

interface MultiStoreBizExtService {

    public function listStoresExt(ListStoresRequestDTO $request) : ListStoresResponseDTOOutParam;

    public function listGoodsSalableStoreExt(ListStoresRequestDTO $request) : ListStoresResponseDTOOutParam;

    public function listGoodsSalableStoreExtPoint(ListStoresRequestDTO $queryDTO) : ListStoresResponseDTOOutParam;

    public function routeEnterStoreExt(RouteEnterStoreRequestDTO $requestDTO) : RouteEnterStoreResponseDTOOutParam;

}