<?php

namespace Com\Youzan\Cloud\Extension\Api\Retail;

use Com\Youzan\Cloud\Extension\Param\GoodsApplyOrderParamDTO;
use Com\Youzan\Cloud\Extension\Param\GoodsApplyOrderResultDTOOutParam;

interface GoodsApplyOrderSyncExtPoint {

    public function goodsApplyOrderSync(GoodsApplyOrderParamDTO $requestDTO) : GoodsApplyOrderResultDTOOutParam;

}