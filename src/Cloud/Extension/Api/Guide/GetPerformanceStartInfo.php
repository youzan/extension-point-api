<?php

namespace Com\Youzan\Cloud\Extension\Api\Guide;

use Com\Youzan\Cloud\Extension\Param\Request\ExtGetPerformanceStartInfoRequest;
use Com\Youzan\Cloud\Extension\Param\Response\PerformanceStartInfoResponseOutParam;

interface GetPerformanceStartInfo {

    public function getPerformanceStartInfo(ExtGetPerformanceStartInfoRequest $request) : PerformanceStartInfoResponseOutParam;

}