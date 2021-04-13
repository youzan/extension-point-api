<?php

namespace Com\Youzan\Cloud\Extension\Api\Medicine;

use Com\Youzan\Cloud\Extension\Param\Medicine\DiagnoseDiseaseQueryRequestDTO;
use Com\Youzan\Cloud\Extension\Param\Medicine\DiagnoseDiseaseQueryResponseDTOOutParam;

interface DiagnoseDiseasesQueryExtPoint {

    public function queryDiseases(DiagnoseDiseaseQueryRequestDTO $request) : DiagnoseDiseaseQueryResponseDTOOutParam;

}