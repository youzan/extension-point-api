<?php

namespace Com\Youzan\Cloud\Extension\Param\Sc;

use Com\Youzan\Cloud\Extension\Param\Sc\StockDeductResponseDTO;

/**
 * 返回类
 * @author Baymax
 * @create 2019-06-14 16:36:46.0
 */
class StockDeductResponseDTOOutParam implements \JsonSerializable {

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
     * @var StockDeductResponseDTO
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
     * @return StockDeductResponseDTO
     */
    public function getData(): StockDeductResponseDTO
    {
        return $this->data;
    }

    /**
     * @param StockDeductResponseDTO $data
     */
    public function setData(StockDeductResponseDTO $data): void
    {
        $this->data = $data;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}