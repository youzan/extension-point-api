<?php

namespace Com\Youzan\Cloud\Extension\Param\Scrm;

use Com\Youzan\Cloud\Extension\Param\Scrm\ExtCustomerPointsLogPaginationDTO;

/**
 * 响应参数返回类
 * @author Baymax
 * @create Tue Jan 10 11:42:06 CST 2023
 */
class ExtCustomerPointsLogPaginationDTOOutParam implements \JsonSerializable {

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
     * @var ExtCustomerPointsLogPaginationDTO
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
     * @return ExtCustomerPointsLogPaginationDTO
     */
    public function getData(): ?ExtCustomerPointsLogPaginationDTO
    {
        return $this->data;
    }

    /**
     * @param ExtCustomerPointsLogPaginationDTO $data
     */
    public function setData(?ExtCustomerPointsLogPaginationDTO $data): void
    {
        $this->data = $data;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}