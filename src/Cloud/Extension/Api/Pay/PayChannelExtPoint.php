<?php

namespace Com\Youzan\Cloud\Extension\Api\Pay;

use Com\Youzan\Cloud\Extension\Param\Pay\PayRequestDTO;
use Com\Youzan\Cloud\Extension\Param\Pay\PayResponseDTOOutParam;
use Com\Youzan\Cloud\Extension\Param\Pay\PayQueryRequestDTO;
use Com\Youzan\Cloud\Extension\Param\Pay\PayQueryResponseDTOOutParam;
use Com\Youzan\Cloud\Extension\Param\Pay\RefundRequestDTO;
use Com\Youzan\Cloud\Extension\Param\Pay\RefundResponseDTOOutParam;
use Com\Youzan\Cloud\Extension\Param\Pay\RefundQueryRequestDTO;
use Com\Youzan\Cloud\Extension\Param\Pay\RefundQueryResponseDTOOutParam;

interface PayChannelExtPoint {

    public function pay(PayRequestDTO $request) : PayResponseDTOOutParam;

    public function payQuery(PayQueryRequestDTO $request) : PayQueryResponseDTOOutParam;

    public function refund(RefundRequestDTO $request) : RefundResponseDTOOutParam;

    public function refundQuery(RefundQueryRequestDTO $request) : RefundQueryResponseDTOOutParam;

}