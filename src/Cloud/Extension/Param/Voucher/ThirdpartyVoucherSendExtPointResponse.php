<?php

namespace Com\Youzan\Cloud\Extension\Param\Voucher;

use StdClass;

/**
 *  
 * @author Baymax
 * @create Wed Jun 18 16:59:20 CST 2025
 */
class ThirdpartyVoucherSendExtPointResponse implements \JsonSerializable {

    /**
     * 三方券Id
     * @var int
     */
    private $id;

    /**
     * 三方核销码
     * @var string
     */
    private $verifyCode;

    /**
     * 是否可发放
     * @var bool
     */
    private $success;

    /**
     * 发放失败信息，success为false时，不为空
     * @var string
     */
    private $errorMsg;

    /**
     * 是否为幂等成功
     * @var bool
     */
    private $idempotentSuccess;

    /**
     * 扩展点版本号
     * @var int
     */
    private $versionNo;

    /**
     * 扩展字段
     * @var stdClass
     */
    private $extMap;

    /**
     * 三方券面额, 单位为分
     * @var int
     */
    private $value;



    /**
     * @return int
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(?int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getVerifyCode(): ?string
    {
        return $this->verifyCode;
    }

    /**
     * @param string $verifyCode
     */
    public function setVerifyCode(?string $verifyCode): void
    {
        $this->verifyCode = $verifyCode;
    }

    /**
     * @return bool
     */
    public function getSuccess(): ?bool
    {
        return $this->success;
    }

    /**
     * @param bool $success
     */
    public function setSuccess(?bool $success): void
    {
        $this->success = $success;
    }

    /**
     * @return string
     */
    public function getErrorMsg(): ?string
    {
        return $this->errorMsg;
    }

    /**
     * @param string $errorMsg
     */
    public function setErrorMsg(?string $errorMsg): void
    {
        $this->errorMsg = $errorMsg;
    }

    /**
     * @return bool
     */
    public function getIdempotentSuccess(): ?bool
    {
        return $this->idempotentSuccess;
    }

    /**
     * @param bool $idempotentSuccess
     */
    public function setIdempotentSuccess(?bool $idempotentSuccess): void
    {
        $this->idempotentSuccess = $idempotentSuccess;
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

    /**
     * @return int
     */
    public function getValue(): ?int
    {
        return $this->value;
    }

    /**
     * @param int $value
     */
    public function setValue(?int $value): void
    {
        $this->value = $value;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}