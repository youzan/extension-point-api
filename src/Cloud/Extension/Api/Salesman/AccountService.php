<?php

namespace Com\Youzan\Cloud\Extension\Api\Salesman;

use Com\Youzan\Cloud\Extension\Param\Salesman\ExtAccountRequestDTO;
use Com\Youzan\Cloud\Extension\Param\Salesman\ExtAccountResponseDTOOutParam;

interface AccountService {

    public function becomeSalesman(ExtAccountRequestDTO $extAccountRequest) : ExtAccountResponseDTOOutParam;

}