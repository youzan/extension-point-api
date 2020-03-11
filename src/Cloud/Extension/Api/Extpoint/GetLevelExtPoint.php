<?php

namespace Com\Youzan\Cloud\Extension\Api\Extpoint;

use Com\Youzan\Cloud\Extension\Param\Request\ExtBatchLevelQueryDTO;
use Com\Youzan\Cloud\Extension\Param\Response\ExtLevelListDTOOutParam;
use Com\Youzan\Cloud\Extension\Param\Request\ExtLevelListQueryDTO;

interface GetLevelExtPoint {

    public function batchGetLevel(ExtBatchLevelQueryDTO $request) : ExtLevelListDTOOutParam;

    public function getLevelList(ExtLevelListQueryDTO $request) : ExtLevelListDTOOutParam;

}