<?php

namespace Com\Youzan\Cloud\Extension\Api\Guide;

use Com\Youzan\Cloud\Extension\Param\Request\ExtBatchGetGoodsCommissionRequest;
use Com\Youzan\Cloud\Extension\Param\Response\ExtGoodsCommissionResponseOutParam;

interface BatchGetGoodsCommission {

    public function batchGetGoodsCommission(ExtBatchGetGoodsCommissionRequest $request) : ExtGoodsCommissionResponseOutParam;

}