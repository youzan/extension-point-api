<?php

namespace Com\Youzan\Cloud\Extension\Api\Cloud;

use Com\Youzan\Cloud\Extension\Param\Dto\DataDTO;
use Com\Youzan\Cloud\Extension\Param\Response\ExtMaterialGroupListResponseOutParam;

interface AllowOverlayOrderTestExtension {

    public function invoke(DataDTO $requestData) : ExtMaterialGroupListResponseOutParam;

}