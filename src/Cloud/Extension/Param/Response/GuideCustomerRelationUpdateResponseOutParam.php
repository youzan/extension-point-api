<?php

namespace Com\Youzan\Cloud\Extension\Param\Response;

use Com\Youzan\Cloud\Extension\Param\Response\GuideCustomerRelationUpdateResponse;

/**
 *  返回类
 * @author Baymax
 * @create Fri Apr 22 14:24:14 CST 2022
 */
class GuideCustomerRelationUpdateResponseOutParam implements \JsonSerializable {

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
     * @var GuideCustomerRelationUpdateResponse
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
     * @return GuideCustomerRelationUpdateResponse
     */
    public function getData(): ?GuideCustomerRelationUpdateResponse
    {
        return $this->data;
    }

    /**
     * @param GuideCustomerRelationUpdateResponse $data
     */
    public function setData(?GuideCustomerRelationUpdateResponse $data): void
    {
        $this->data = $data;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}