<?php

namespace Com\Youzan\Cloud\Extension\Param\Beauty;

use Com\Youzan\Cloud\Extension\Param\Beauty\NewCustomerCheckResponseDTO;

/**
 * 返回类
 * @author Baymax
 * @create 2020-03-20 17:16:03.0
 */
class NewCustomerCheckResponseDTOOutParam implements \JsonSerializable {

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
     * @var NewCustomerCheckResponseDTO
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
     * @return NewCustomerCheckResponseDTO
     */
    public function getData(): NewCustomerCheckResponseDTO
    {
        return $this->data;
    }

    /**
     * @param NewCustomerCheckResponseDTO $data
     */
    public function setData(NewCustomerCheckResponseDTO $data): void
    {
        $this->data = $data;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}