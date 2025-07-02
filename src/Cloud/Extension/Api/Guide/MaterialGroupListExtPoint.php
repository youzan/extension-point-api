<?php

namespace Com\Youzan\Cloud\Extension\Api\Guide;

use Com\Youzan\Cloud\Extension\Param\Request\ExtMaterialGroupListRequest;
use Com\Youzan\Cloud\Extension\Param\Response\ExtMaterialGroupListDTOOutParam;

interface MaterialGroupListExtPoint {

    public function listMaterialGroup(ExtMaterialGroupListRequest $request) : ExtMaterialGroupListDTOOutParam;

}