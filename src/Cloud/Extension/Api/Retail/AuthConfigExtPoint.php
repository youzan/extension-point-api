<?php

namespace Com\Youzan\Cloud\Extension\Api\Retail;

use Com\Youzan\Cloud\Extension\Param\AuthConfigParamDTO;
use Com\Youzan\Cloud\Extension\Param\SellerAuthConfigDTOOutParam;

interface AuthConfigExtPoint {

    public function querySellerAuthConfig(AuthConfigParamDTO $authConfigParamDTO) : SellerAuthConfigDTOOutParam;

}