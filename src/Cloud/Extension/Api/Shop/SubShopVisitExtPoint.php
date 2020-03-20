<?php

namespace Com\Youzan\Cloud\Extension\Api\Shop;

use Com\Youzan\Cloud\Extension\Param\Chain\ShopSearchForVisitRequest;
use Com\Youzan\Cloud\Extension\Param\Result\VisitedSubShopPageQueryResultOutParam;

interface SubShopVisitExtPoint {

    public function search(ShopSearchForVisitRequest $request) : VisitedSubShopPageQueryResultOutParam;

    public function search(ShopSearchForVisitRequest $request) : VisitedSubShopPageQueryResultOutParam;

}