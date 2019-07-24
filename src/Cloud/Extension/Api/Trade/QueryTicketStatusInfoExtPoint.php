<?php

namespace Com\Youzan\Cloud\Extension\Api\Trade;

use Com\Youzan\Cloud\Extension\Param\Trade\QueryTicketStatusInfoRequestDTO;
use Com\Youzan\Cloud\Extension\Param\Trade\QueryTicketStatusInfoResponseDTOOutParam;

interface QueryTicketStatusInfoExtPoint {

    public function query(QueryTicketStatusInfoRequestDTO $request) : QueryTicketStatusInfoResponseDTOOutParam;

}