<?php

namespace Com\Youzan\Cloud\Extension\Api\Point;

use Com\Youzan\Cloud\Extension\Param\Request\GuideExtPointNeedInvokeRequest;
use Com\Youzan\Cloud\Extension\Param\Response\GuideExtPointNeedInvokeResponseOutParam;

interface GuideExtPointNeedInvokeExtPoint {

    public function needInvoke(GuideExtPointNeedInvokeRequest $request) : GuideExtPointNeedInvokeResponseOutParam;

}