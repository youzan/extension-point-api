<?php

namespace Com\Youzan\Cloud\Extension\Param\Activity;

use Com\Youzan\Cloud\Extension\Param\Activity\ActivitySyncThirdPartyExtPointResponse;

/**
 * 请求响应返回类
 * @author Baymax
 * @create Wed Jun 18 16:57:39 CST 2025
 */
class ActivitySyncThirdPartyExtPointResponseOutParam implements \JsonSerializable {

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
     * @var ActivitySyncThirdPartyExtPointResponse
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
     * @return ActivitySyncThirdPartyExtPointResponse
     */
    public function getData(): ?ActivitySyncThirdPartyExtPointResponse
    {
        return $this->data;
    }

    /**
     * @param ActivitySyncThirdPartyExtPointResponse $data
     */
    public function setData(?ActivitySyncThirdPartyExtPointResponse $data): void
    {
        $this->data = $data;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}