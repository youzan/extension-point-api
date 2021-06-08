<?php

namespace Com\Youzan\Cloud\Extension\Api\Extpoint;

use Com\Youzan\Cloud\Extension\Param\Extpoint\ExtPointRequestData;
use Com\Youzan\Cloud\Extension\Param\Extpoint\BrickExtPointResponseOutParam;

interface SendCustomizedObjectExtPoint {

    public function getInvokeResult(ExtPointRequestData $request) : BrickExtPointResponseOutParam;

}