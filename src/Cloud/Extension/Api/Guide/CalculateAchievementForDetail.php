<?php

namespace Com\Youzan\Cloud\Extension\Api\Guide;

use Com\Youzan\Cloud\Extension\Param\Request\ExtAchievementCalculateRequest;
use Com\Youzan\Cloud\Extension\Param\Response\ExtAchievementCalculateResponseOutParam;

interface CalculateAchievementForDetail {

    public function calculateForDetail(ExtAchievementCalculateRequest $request) : ExtAchievementCalculateResponseOutParam;

}