<?php

namespace Com\Youzan\Cloud\Extension\Api\Goods;

use Com\Youzan\Cloud\Extension\Param\Goods\ExtGoodsConfigRequest;
use Com\Youzan\Cloud\Extension\Param\Goods\ExtGoodsConfigResponseOutParam;

interface GoodsConfigExtPoint {

    public function listGoodsConfig(ExtGoodsConfigRequest $request) : ExtGoodsConfigResponseOutParam;

}