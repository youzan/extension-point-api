<?php

namespace Com\Youzan\Cloud\Extension\Api\Delivery;

use Com\Youzan\Cloud\Extension\Param\Delivery\LocalDeliveryCommitAuditDTO;
use Com\Youzan\Cloud\Extension\Param\Delivery\LocalDeliveryCommitAuditResponseDTOOutParam;

interface LocalDeliveryCommitAuditRecordExtPoint {

    public function handle(LocalDeliveryCommitAuditDTO $shopChannelDTO) : LocalDeliveryCommitAuditResponseDTOOutParam;

}