<?php

namespace Com\Youzan\Cloud\Extension\Api\Trade;

use Com\Youzan\Cloud\Extension\Param\Trade\UnfrozenTicketRequestDTO;
use Com\Youzan\Cloud\Extension\Param\Trade\UnfrozenTicketResponseDTOOutParam;

interface UnfrozenTicketExtPoint {

    public function unfrozen(UnfrozenTicketRequestDTO $request) : UnfrozenTicketResponseDTOOutParam;

}