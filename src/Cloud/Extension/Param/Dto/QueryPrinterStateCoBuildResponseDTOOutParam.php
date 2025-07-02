<?php

namespace Com\Youzan\Cloud\Extension\Param\Dto;

use Com\Youzan\Cloud\Extension\Param\Dto\QueryPrinterStateCoBuildResponseDTO;

/**
 * 请求结果返回类
 * @author Baymax
 * @create Thu Jan 09 17:50:47 CST 2025
 */
class QueryPrinterStateCoBuildResponseDTOOutParam implements \JsonSerializable {

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
     * @var QueryPrinterStateCoBuildResponseDTO
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
     * @return QueryPrinterStateCoBuildResponseDTO
     */
    public function getData(): ?QueryPrinterStateCoBuildResponseDTO
    {
        return $this->data;
    }

    /**
     * @param QueryPrinterStateCoBuildResponseDTO $data
     */
    public function setData(?QueryPrinterStateCoBuildResponseDTO $data): void
    {
        $this->data = $data;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}