<?php

namespace Com\Youzan\Cloud\Extension\Api\Sdk;

use Com\Youzan\Cloud\Extension\Param\Request\ReceptionistQueryDTO;
use Com\Youzan\Cloud\Extension\Param\Response\ReceptionistInfoDTOOutParam;

interface ReceptionistService {

    public function getReceptionistInfo(ReceptionistQueryDTO $request) : ReceptionistInfoDTOOutParam;

}