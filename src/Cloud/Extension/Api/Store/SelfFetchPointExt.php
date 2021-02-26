<?php

namespace Com\Youzan\Cloud\Extension\Api\Store;

use Com\Youzan\Cloud\Extension\Param\Dto\SelfFetchWithSoldStatusQueryExtDTO;
use Com\Youzan\Cloud\Extension\Param\Dto\SelfFetchWithSoldStatusResultExtDTOOutParam;

interface SelfFetchPointExt {

    public function listWithSoldStatus(SelfFetchWithSoldStatusQueryExtDTO $request) : SelfFetchWithSoldStatusResultExtDTOOutParam;

}