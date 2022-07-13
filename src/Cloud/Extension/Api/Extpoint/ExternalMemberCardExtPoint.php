<?php

namespace Com\Youzan\Cloud\Extension\Api\Extpoint;

use Com\Youzan\Cloud\Extension\Param\Request\ExternalMemberCardGetExtPointRequest;
use Com\Youzan\Cloud\Extension\Param\Response\ExternalCustomerCardResponseOutParam;

interface ExternalMemberCardExtPoint {

    public function getByCardNoExtPoint(ExternalMemberCardGetExtPointRequest $request) : ExternalCustomerCardResponseOutParam;

}