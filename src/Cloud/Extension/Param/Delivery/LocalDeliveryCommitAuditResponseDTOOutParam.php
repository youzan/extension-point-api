<?php

namespace Com\Youzan\Cloud\Extension\Param\Delivery;

use Com\Youzan\Cloud\Extension\Param\Delivery\LocalDeliveryCommitAuditResponseDTO;

/**
 * 返回类
 * @author Baymax
 * @create 2019-09-19 19:08:53.0
 */
class LocalDeliveryCommitAuditResponseDTOOutParam implements \JsonSerializable {

    /**
     *
     * @var bool
     */
    private $success;

    /**
     *
     * @var string
     */
    private $code;

    /**
     *
     * @var string
     */
    private $message;

    /**
     *
     * @var LocalDeliveryCommitAuditResponseDTO
     */
    private $data;

    /**
     * @return bool
     */
    public function isSuccess(): bool
    {
        return $this->success;
    }

    /**
     * @param bool $success
     */
    public function setSuccess(bool $success): void
    {
        $this->success = $success;
    }

    /**
     * @return string
     */
    public function getCode(): string
    {
        return $this->code;
    }

    /**
     * @param string $code
     */
    public function setCode(string $code): void
    {
        $this->code = $code;
    }

    /**
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message;
    }

    /**
     * @param string $message
     */
    public function setMessage(string $message): void
    {
        $this->message = $message;
    }

    /**
     * @return LocalDeliveryCommitAuditResponseDTO
     */
    public function getData(): LocalDeliveryCommitAuditResponseDTO
    {
        return $this->data;
    }

    /**
     * @param LocalDeliveryCommitAuditResponseDTO $data
     */
    public function setData(LocalDeliveryCommitAuditResponseDTO $data): void
    {
        $this->data = $data;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}