<?php

namespace Com\Youzan\Cloud\Extension\Api\Trade;

use Com\Youzan\Cloud\Extension\Param\Trade\FrozenTicketRequestDTO;
use Com\Youzan\Cloud\Extension\Param\Trade\FrozenTicketResponseDTOOutParam;

interface FrozenTicketExtPoint {

    public function frozen(FrozenTicketRequestDTO $request) : FrozenTicketResponseDTOOutParam;

}