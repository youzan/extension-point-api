<?php

namespace Com\Youzan\Cloud\Extension\Api\Ext;

use Com\Youzan\Cloud\Extension\Param\Ext\ItemTradeCloudExtRequest;
use Com\Youzan\Cloud\Extension\Param\Ext\ItemTradeCloudExtResponseOutParam;

interface ItemTradeInfoExtService {

    public function getItemExtData(ItemTradeCloudExtRequest $request) : ItemTradeCloudExtResponseOutParam;

}