<?php

namespace Com\Youzan\Cloud\Extension\Param\Points;

use Com\Youzan\Cloud\Extension\Param\Points\GoodsWhetherAuditExtModel;

/**
 * 返回数据返回类
 * @author Baymax
 * @create Mon May 09 21:08:54 CST 2022
 */
class GoodsWhetherAuditExtModelOutParam implements \JsonSerializable {

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
     * @var GoodsWhetherAuditExtModel
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
     * @return GoodsWhetherAuditExtModel
     */
    public function getData(): ?GoodsWhetherAuditExtModel
    {
        return $this->data;
    }

    /**
     * @param GoodsWhetherAuditExtModel $data
     */
    public function setData(?GoodsWhetherAuditExtModel $data): void
    {
        $this->data = $data;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}