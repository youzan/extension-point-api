<?php

namespace Com\Youzan\Cloud\Extension\Param\Extpoint;

use Com\Youzan\Cloud\Extension\Param\Extpoint\RigMenuCoBuildResDTO;

/**
 *  返回类
 * @author Baymax
 * @create Tue Jan 10 20:10:12 CST 2023
 */
class RigMenuCoBuildResDTOOutParam implements \JsonSerializable {

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
     * @var RigMenuCoBuildResDTO
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
     * @return RigMenuCoBuildResDTO
     */
    public function getData(): ?RigMenuCoBuildResDTO
    {
        return $this->data;
    }

    /**
     * @param RigMenuCoBuildResDTO $data
     */
    public function setData(?RigMenuCoBuildResDTO $data): void
    {
        $this->data = $data;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}