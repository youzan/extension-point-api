<?php

namespace Com\Youzan\Cloud\Extension\Param\Task;

use Com\Youzan\Cloud\Extension\Param\Task\ExtTaskAwardSendRulesResponseDTO;

/**
 *  返回类
 * @author Baymax
 * @create Mon Mar 14 16:49:27 CST 2022
 */
class ExtTaskAwardSendRulesResponseDTOOutParam implements \JsonSerializable {

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
     * @var ExtTaskAwardSendRulesResponseDTO
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
     * @return ExtTaskAwardSendRulesResponseDTO
     */
    public function getData(): ?ExtTaskAwardSendRulesResponseDTO
    {
        return $this->data;
    }

    /**
     * @param ExtTaskAwardSendRulesResponseDTO $data
     */
    public function setData(?ExtTaskAwardSendRulesResponseDTO $data): void
    {
        $this->data = $data;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}