<?php

namespace Com\Youzan\Cloud\Extension\Api\Ext;

use Com\Youzan\Cloud\Extension\Param\Query\OuterUserQuery;
use Com\Youzan\Cloud\Extension\Param\Dto\OuterUserDTOOutParam;

interface EduUserQueryExtPoint {

    public function getOuterUser(OuterUserQuery $query) : OuterUserDTOOutParam;

}