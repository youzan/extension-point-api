<?php

namespace Com\Youzan\Cloud\Extension\Api\Trade;

use Com\Youzan\Cloud\Extension\Param\Trade\DisabledTicketRequestDTO;
use Com\Youzan\Cloud\Extension\Param\Trade\DisableTicketResponseDTOOutParam;

interface DisabledTicketExtPoint {

    public function disabled(DisabledTicketRequestDTO $request) : DisableTicketResponseDTOOutParam;

}