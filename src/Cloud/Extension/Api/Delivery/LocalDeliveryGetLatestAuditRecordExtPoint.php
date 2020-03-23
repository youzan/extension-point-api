<?php

namespace Com\Youzan\Cloud\Extension\Api\Delivery;

use Com\Youzan\Cloud\Extension\Param\Delivery\AuditRecordRequestDTO;
use Com\Youzan\Cloud\Extension\Param\Delivery\AuditRecordDetailResponseDTOOutParam;

interface LocalDeliveryGetLatestAuditRecordExtPoint {

    public function handle(AuditRecordRequestDTO $request) : AuditRecordDetailResponseDTOOutParam;

}