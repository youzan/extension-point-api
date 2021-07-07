<?php

namespace Com\Youzan\Cloud\Extension\Api\Extpoint;

use Com\Youzan\Cloud\Extension\Param\Activity\ActivitySyncThirdPartyExtPointRequest;
use Com\Youzan\Cloud\Extension\Param\Activity\ActivitySyncThirdPartyExtPointResponseOutParam;

interface ActivitySyncThirdPartyExtPoint {

    public function isNeedSyncThirdParty(ActivitySyncThirdPartyExtPointRequest $request) : ActivitySyncThirdPartyExtPointResponseOutParam;

}