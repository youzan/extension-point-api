<?php

namespace Com\Youzan\Cloud\Extension\Api\Guide;

use Com\Youzan\Cloud\Extension\Param\Dto\ListTagGroupByGuideDTO;
use Com\Youzan\Cloud\Extension\Param\Dto\CobuildTagGroupRespDTOOutParam;

interface ListTagGroupByGuide {

    public function listTagGroupByGuide(ListTagGroupByGuideDTO $tagGroupReqDTO) : CobuildTagGroupRespDTOOutParam;

}