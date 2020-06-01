<?php

namespace Com\Youzan\Cloud\Extension\Api\Pay;

use Com\Youzan\Cloud\Extension\Param\Request\ValueCardMakeCardRequest;
use Com\Youzan\Cloud\Extension\Param\Response\ValueCardMakeCardResponseOutParam;

interface ValueCardMakeCardExtPoint {

    public function makeCard(ValueCardMakeCardRequest $request) : ValueCardMakeCardResponseOutParam;

}