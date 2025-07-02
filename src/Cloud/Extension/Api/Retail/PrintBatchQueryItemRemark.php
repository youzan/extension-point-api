<?php

namespace Com\Youzan\Cloud\Extension\Api\Retail;

use Com\Youzan\Cloud\Extension\Param\Dto\ItemRemarkCoBuildRequestDTO;
use Com\Youzan\Cloud\Extension\Param\Dto\ItemRemarksCoBuildResponseDTOOutParam;

interface PrintBatchQueryItemRemark {

    public function batchQueryItemRemark(ItemRemarkCoBuildRequestDTO $request) : ItemRemarksCoBuildResponseDTOOutParam;

}