<?php

namespace Com\Youzan\Cloud\Extension\Api\Cloud;

use Com\Youzan\Cloud\Extension\Param\Dto\DataDTO;
use Com\Youzan\Cloud\Extension\Param\Dto\DataDTOOutParam;

interface DemoTestExtension {

    public function invoke(DataDTO $dataDTO) : DataDTOOutParam;

}