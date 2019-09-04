<?php

namespace Com\Youzan\Cloud\Extension\Api\Trade;

use Com\Youzan\Cloud\Extension\Param\Trade\CreateTicketRequestDTO;
use Com\Youzan\Cloud\Extension\Param\Trade\CreateTicketResponseDTOOutParam;

interface CreateTicketExtPoint {

    public function create(CreateTicketRequestDTO $request) : CreateTicketResponseDTOOutParam;

}