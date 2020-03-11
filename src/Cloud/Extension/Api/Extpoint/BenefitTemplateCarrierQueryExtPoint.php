<?php

namespace Com\Youzan\Cloud\Extension\Api\Extpoint;

use Com\Youzan\Cloud\Extension\Param\Request\ExtBenefitTemplateBatchGetDTO;
use Com\Youzan\Cloud\Extension\Param\Response\ExtBenefitTemplateListDTOOutParam;

interface BenefitTemplateCarrierQueryExtPoint {

    public function listBenefitTemplateByCarrierTpl(ExtBenefitTemplateBatchGetDTO $request) : ExtBenefitTemplateListDTOOutParam;

}