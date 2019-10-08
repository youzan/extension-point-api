<?php

namespace Com\Youzan\Cloud\Extension\Param\Im;

use Com\Youzan\Cloud\Extension\Param\Im\RobotMsg;

/**
 * 返回类
 * @author Baymax
 * @create 2019-10-08 11:19:11.0
 */
class RobotMsgOutParam implements \JsonSerializable {

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
     * @var RobotMsg
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
     * @return RobotMsg
     */
    public function getData(): RobotMsg
    {
        return $this->data;
    }

    /**
     * @param RobotMsg $data
     */
    public function setData(RobotMsg $data): void
    {
        $this->data = $data;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}