<?php

namespace Com\Youzan\Cloud\Extension\Api\Extpoint;

use Com\Youzan\Cloud\Extension\Param\Extpoint\RigMenuCoBuildReqDTO;
use Com\Youzan\Cloud\Extension\Param\Extpoint\RigMenuCoBuildResDTOOutParam;

interface RigMenuExtPoint {

    public function buildCoBuildMenu(RigMenuCoBuildReqDTO $request) : RigMenuCoBuildResDTOOutParam;

}