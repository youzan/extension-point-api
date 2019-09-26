<?php

namespace Com\Youzan\Cloud\Extension\Param\Im;

use Com\Youzan\Cloud\Extension\Param\Im\RobotData;
use StdClass;

/**
 * 
 * @author Baymax
 * @create 2019-09-26 11:34:21.0
 */
class RobotMsgResp implements \JsonSerializable {

    /**
     * 
     * @var RobotData
     */
    private $data;

    /**
     * 
     * @var bool
     */
    private $success;

    /**
     * 
     * @var int
     */
    private $code;

    /**
     * 
     * @var string
     */
    private $message;

    /**
     * 
     * @var string
     */
    private $requestId;

    /**
     * 
     * @var stdClass
     */
    private $errorData;



    /**
     * @return RobotData
     */
    public function getData(): RobotData
    {
        return $this->data;
    }

    /**
     * @param RobotData $data
     */
    public function setData(RobotData $data): void
    {
        $this->data = $data;
    }

    /**
     * @return bool
     */
    public function getSuccess(): bool
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
     * @return int
     */
    public function getCode(): int
    {
        return $this->code;
    }

    /**
     * @param int $code
     */
    public function setCode(int $code): void
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
     * @return string
     */
    public function getRequestId(): string
    {
        return $this->requestId;
    }

    /**
     * @param string $requestId
     */
    public function setRequestId(string $requestId): void
    {
        $this->requestId = $requestId;
    }

    /**
     * @return stdClass
     */
    public function getErrorData(): stdClass
    {
        return $this->errorData;
    }

    /**
     * @param stdClass $errorData
     */
    public function setErrorData(stdClass $errorData): void
    {
        $this->errorData = $errorData;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}