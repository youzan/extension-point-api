<?php

namespace Com\Youzan\Cloud\Extension\Param\Response;

use Com\Youzan\Cloud\Extension\Param\Response\RelationExtPointCanBindRelationResponse;

/**
 * 响应结果body返回类
 * @author Baymax
 * @create Mon Jun 19 09:44:43 CST 2023
 */
class RelationExtPointCanBindRelationResponseOutParam implements \JsonSerializable {

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
     * @var RelationExtPointCanBindRelationResponse
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
     * @return RelationExtPointCanBindRelationResponse
     */
    public function getData(): ?RelationExtPointCanBindRelationResponse
    {
        return $this->data;
    }

    /**
     * @param RelationExtPointCanBindRelationResponse $data
     */
    public function setData(?RelationExtPointCanBindRelationResponse $data): void
    {
        $this->data = $data;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}