<?php

namespace Com\Youzan\Cloud\Extension\Param\Activity;

use Com\Youzan\Cloud\Extension\Param\Activity\ActivitySyncThirdPartyConfigQueryExtPointResponse;

/**
 * 返回类
 * @author Baymax
 * @create 2021-07-21 23:32:37.0
 */
class ActivitySyncThirdPartyConfigQueryExtPointResponseOutParam implements \JsonSerializable {

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
     * @var ActivitySyncThirdPartyConfigQueryExtPointResponse
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
     * @return ActivitySyncThirdPartyConfigQueryExtPointResponse
     */
    public function getData(): ?ActivitySyncThirdPartyConfigQueryExtPointResponse
    {
        return $this->data;
    }

    /**
     * @param ActivitySyncThirdPartyConfigQueryExtPointResponse $data
     */
    public function setData(?ActivitySyncThirdPartyConfigQueryExtPointResponse $data): void
    {
        $this->data = $data;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}