<?php

namespace Com\Youzan\Cloud\Extension\Api\Pay;

use Com\Youzan\Cloud\Extension\Param\Pay\ValueCardPayRequestDTO;
use Com\Youzan\Cloud\Extension\Param\Pay\ValueCardPayResponseDTOOutParam;
use Com\Youzan\Cloud\Extension\Param\Pay\ValueCardRefundRequestDTO;
use Com\Youzan\Cloud\Extension\Param\Pay\ValueCardRefundResponseDTOOutParam;
use Com\Youzan\Cloud\Extension\Param\Pay\ValueCardPayQueryRequestDTO;
use Com\Youzan\Cloud\Extension\Param\Pay\ValueCardRefundQueryRequestDTO;

interface ValueCardExtPoint {

    public function pay(ValueCardPayRequestDTO $request) : ValueCardPayResponseDTOOutParam;

    public function refund(ValueCardRefundRequestDTO $request) : ValueCardRefundResponseDTOOutParam;

    public function payQuery(ValueCardPayQueryRequestDTO $request) : ValueCardPayResponseDTOOutParam;

    public function refundQuery(ValueCardRefundQueryRequestDTO $request) : ValueCardRefundResponseDTOOutParam;

}