<?php

namespace Com\Youzan\Cloud\Extension\Api\Retail;

use Com\Youzan\Cloud\Extension\Param\Dto\SpuIntroductionItemCheckRequest;
use Com\Youzan\Cloud\Extension\Param\Dto\SpuIntroductionItemCheckResponseOutParam;

interface SpuIntroductionItemCheckExtPoint {

    public function saveItemCheck(SpuIntroductionItemCheckRequest $request) : SpuIntroductionItemCheckResponseOutParam;

}