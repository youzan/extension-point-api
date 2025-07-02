<?php

namespace Com\Youzan\Cloud\Extension\Api\Guide;

use Com\Youzan\Cloud\Extension\Param\Request\ExtMaterialListPagedRequest;
use Com\Youzan\Cloud\Extension\Param\Response\ExtMaterialListPagedResponseOutParam;

interface MaterialListPagedExtPoint {

    public function listMaterialPaged(ExtMaterialListPagedRequest $request) : ExtMaterialListPagedResponseOutParam;

}