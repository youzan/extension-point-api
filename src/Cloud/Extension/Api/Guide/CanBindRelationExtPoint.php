<?php

namespace Com\Youzan\Cloud\Extension\Api\Guide;

use Com\Youzan\Cloud\Extension\Param\Request\RelationExtPointCanBindRelationRequest;
use Com\Youzan\Cloud\Extension\Param\Response\RelationExtPointCanBindRelationResponseOutParam;

interface CanBindRelationExtPoint {

    public function canBindRelation(RelationExtPointCanBindRelationRequest $request) : RelationExtPointCanBindRelationResponseOutParam;

}