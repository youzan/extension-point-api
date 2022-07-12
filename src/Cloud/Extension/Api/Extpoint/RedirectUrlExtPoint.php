<?php

namespace Com\Youzan\Cloud\Extension\Api\Extpoint;

use Com\Youzan\Cloud\Extension\Param\Req\RedirectUrlExtReqDTO;
use Com\Youzan\Cloud\Extension\Param\Res\RedirectUrlExtResDTOOutParam;

interface RedirectUrlExtPoint {

    public function getRedirectUrl(RedirectUrlExtReqDTO $redirectUrlExtReqDTO) : RedirectUrlExtResDTOOutParam;

}