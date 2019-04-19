<?php
/**
 * Created by IntelliJ IDEA.
 * User: allen
 * Date: 2019-02-27
 * Time: 18:19
 */

namespace Com\Youzan\Cloud\Extension\Api;


use Com\Youzan\Cloud\Extension\Param\Test\BizTestOutParam;
use Com\Youzan\Cloud\Extension\Param\Test\BizTestRequest;

interface BizTestService
{
    public function invoke(BizTestRequest $bizTestRequest) : BizTestOutParam;
}