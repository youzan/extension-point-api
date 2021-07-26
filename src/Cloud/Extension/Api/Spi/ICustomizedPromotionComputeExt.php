<?php

namespace Com\Youzan\Cloud\Extension\Api\Spi;

use Com\Youzan\Cloud\Extension\Param\Request\CustomizedPromotionComputeRequest;
use Com\Youzan\Cloud\Extension\Param\Response\CustomizedPromotionComputeRespOutParam;

interface ICustomizedPromotionComputeExt {

    public function invoke(CustomizedPromotionComputeRequest $request) : CustomizedPromotionComputeRespOutParam;

}