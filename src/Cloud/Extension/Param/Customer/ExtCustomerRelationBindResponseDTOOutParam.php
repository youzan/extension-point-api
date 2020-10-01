<?php

namespace Com\Youzan\Cloud\Extension\Param\Customer;

use Com\Youzan\Cloud\Extension\Param\Customer\ExtCustomerRelationBindResponseDTO;

/**
 * 返回类
 * @author Baymax
 * @create 2020-09-29 15:49:12.0
 */
class ExtCustomerRelationBindResponseDTOOutParam implements \JsonSerializable {

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
     * @var ExtCustomerRelationBindResponseDTO
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
     * @return ExtCustomerRelationBindResponseDTO
     */
    public function getData(): ExtCustomerRelationBindResponseDTO
    {
        return $this->data;
    }

    /**
     * @param ExtCustomerRelationBindResponseDTO $data
     */
    public function setData(ExtCustomerRelationBindResponseDTO $data): void
    {
        $this->data = $data;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}