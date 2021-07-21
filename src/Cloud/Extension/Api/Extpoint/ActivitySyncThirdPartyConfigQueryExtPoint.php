<?php

namespace Com\Youzan\Cloud\Extension\Api\Extpoint;

use Com\Youzan\Cloud\Extension\Param\Activity\ActivitySyncThirdPartyExtConfigQueryPointRequest;
use Com\Youzan\Cloud\Extension\Param\Activity\ActivitySyncThirdPartyConfigQueryExtPointResponseOutParam;

interface ActivitySyncThirdPartyConfigQueryExtPoint {

    public function queryConfig(ActivitySyncThirdPartyExtConfigQueryPointRequest $request) : ActivitySyncThirdPartyConfigQueryExtPointResponseOutParam;

}