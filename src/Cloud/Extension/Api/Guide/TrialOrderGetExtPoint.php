<?php

namespace Com\Youzan\Cloud\Extension\Api\Guide;

use Com\Youzan\Cloud\Extension\Param\Request\ExtGuideQueryTrialFormRequest;
use Com\Youzan\Cloud\Extension\Param\Response\ExtGuideQueryTrialFormResponseOutParam;

interface TrialOrderGetExtPoint {

    public function queryTrialFormDetail(ExtGuideQueryTrialFormRequest $request) : ExtGuideQueryTrialFormResponseOutParam;

}