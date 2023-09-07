<?php

namespace Com\Youzan\Cloud\Extension\Api\Guide;

use Com\Youzan\Cloud\Extension\Param\Dto\ListTagGroupBizDTO;
use Com\Youzan\Cloud\Extension\Param\Dto\CobuildRelTagGroupRespDTOOutParam;

interface GetCustomerTagByGuide {

    public function listTagGroup(ListTagGroupBizDTO $request) : CobuildRelTagGroupRespDTOOutParam;

}