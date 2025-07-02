<?php

namespace Com\Youzan\Cloud\Extension\Api\Guide;

use Com\Youzan\Cloud\Extension\Param\Request\ExtGuideQueryTrialItemSoldOutRequest;
use Com\Youzan\Cloud\Extension\Param\Response\ExtGuideQueryTrialItemSoldOutResponseOutParam;

interface TrialItemSoldOutQueryExtPoint {

    public function queryItemSoldOut(ExtGuideQueryTrialItemSoldOutRequest $request) : ExtGuideQueryTrialItemSoldOutResponseOutParam;

}