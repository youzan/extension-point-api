<?php

namespace Com\Youzan\Cloud\Extension\Api\Trade;

use Com\Youzan\Cloud\Extension\Param\Trade\DeliveryPluginNotifyDTO;
use Com\Youzan\Cloud\Extension\Param\Trade\PluginNotifyResultDTOOutParam;

interface TicketDeliveryPluginExtPoint {

    public function notify(DeliveryPluginNotifyDTO $deliveryPluginParamDTO) : PluginNotifyResultDTOOutParam;

}