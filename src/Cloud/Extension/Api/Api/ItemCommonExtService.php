<?php

namespace Com\Youzan\Cloud\Extension\Api\Api;

use Com\Youzan\Cloud\Extension\Param\Req\CheckGoodsNoParam;
use Com\Youzan\Cloud\Extension\Param\Dto\GoodsNoCheckOpenModelOutParam;

interface ItemCommonExtService {

    public function checkGoodsNoExt(CheckGoodsNoParam $param) : GoodsNoCheckOpenModelOutParam;

}