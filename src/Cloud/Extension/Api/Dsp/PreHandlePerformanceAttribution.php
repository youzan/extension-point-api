<?php

namespace Com\Youzan\Cloud\Extension\Api\Dsp;

use Com\Youzan\Cloud\Extension\Param\Request\ExtPreHandlePerformanceAttributionRequest;
use Com\Youzan\Cloud\Extension\Param\Response\PreHandlePerformanceAttributionResponseOutParam;

interface PreHandlePerformanceAttribution {

    public function preHandlePerformanceAttribution(ExtPreHandlePerformanceAttributionRequest $request) : PreHandlePerformanceAttributionResponseOutParam;

}