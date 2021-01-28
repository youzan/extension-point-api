<?php

namespace Com\Youzan\Cloud\Extension\Param\Dto;



/**
 * 
 * @author Baymax
 * @create 2020-07-29 14:46:53.0
 */
class CloudVoucherGenerateInfoDTO implements \JsonSerializable {

    /**
     * 外部生成的核销码，不能以ZAN、YZAN开头，否则会被过滤掉
     * @var string
     */
    private $verifyCode;



    /**
     * @return string
     */
    public function getVerifyCode(): string
    {
        return $this->verifyCode;
    }

    /**
     * @param string $verifyCode
     */
    public function setVerifyCode(string $verifyCode): void
    {
        $this->verifyCode = $verifyCode;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}