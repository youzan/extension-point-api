<?php

namespace Com\Youzan\Cloud\Extension\Api\Trade;

use Com\Youzan\Cloud\Extension\Param\OrderDetailSelfDefineBlockParamDTO;
use Com\Youzan\Cloud\Extension\Param\OrderDetailSelfDefineBlockResultDTOOutParam;

interface OrderDetailSelfDefineBlockExtPoint {

    public function assemble(OrderDetailSelfDefineBlockParamDTO $orderDetailSelfDefineBlockParamDTO) : OrderDetailSelfDefineBlockResultDTOOutParam;

}