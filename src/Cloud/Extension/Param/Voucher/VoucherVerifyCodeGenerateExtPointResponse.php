<?php

namespace Com\Youzan\Cloud\Extension\Param\Voucher;


use StdClass;

/**
 *  
 * @author Baymax
 * @create Tue Aug 30 15:52:17 CST 2022
 */
class VoucherVerifyCodeGenerateExtPointResponse implements \JsonSerializable {

    /**
     * 外部生成的核销码，不能以ZAN、YZAN开头，否则会导致业务异常，核销码数量必须与入参generateNum保持一致，否则会抛出业务异常
     * @var array
     */
    private $verifyCodes;

    /**
     *  
     * @var int
     */
    private $versionNo;

    /**
     *  
     * @var stdClass
     */
    private $extMap;



    /**
     * @return array
     */
    public function getVerifyCodes(): ?array
    {
        return $this->verifyCodes;
    }

    /**
     * @param array $verifyCodes
     */
    public function setVerifyCodes(?array $verifyCodes): void
    {
        $this->verifyCodes = $verifyCodes;
    }

    /**
     * @return int
     */
    public function getVersionNo(): ?int
    {
        return $this->versionNo;
    }

    /**
     * @param int $versionNo
     */
    public function setVersionNo(?int $versionNo): void
    {
        $this->versionNo = $versionNo;
    }

    /**
     * @return stdClass
     */
    public function getExtMap(): ?stdClass
    {
        return $this->extMap;
    }

    /**
     * @param stdClass $extMap
     */
    public function setExtMap(?stdClass $extMap): void
    {
        $this->extMap = $extMap;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}