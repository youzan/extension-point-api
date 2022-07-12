<?php

namespace Com\Youzan\Cloud\Extension\Api\Item;

use Com\Youzan\Cloud\Extension\Param\Points\GoodsWhetherAuditExtParam;
use Com\Youzan\Cloud\Extension\Param\Points\GoodsWhetherAuditExtModelOutParam;

interface ItemEditAuditExtService {

    public function getGoodsAuditExt(GoodsWhetherAuditExtParam $param) : GoodsWhetherAuditExtModelOutParam;

}