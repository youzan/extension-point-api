<?php

namespace Com\Youzan\Cloud\Extension\Api\Service;

use Com\Youzan\Cloud\Extension\Param\Model\ItemTradeCloudExtRequest;
use Com\Youzan\Cloud\Extension\Param\Model\ItemTradeCloudExtResponseOutParam;

interface ItemTradeCloudExtService {

    public function getItemExtData(ItemTradeCloudExtRequest $request) : ItemTradeCloudExtResponseOutParam;

}