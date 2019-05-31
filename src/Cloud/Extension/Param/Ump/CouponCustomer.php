<?php

namespace Com\Youzan\Cloud\Extension\Param\Ump;



/**
 * 
 * @author Baymax
 * @create 2019-05-13 20:03:18.0
 */
class CouponCustomer implements \JsonSerializable {

    /**
     * 优惠券或优惠码ID，券或码的唯一标识
     * @var string
     */
    private $id;

    /**
     * 商家唯一ID
     * @var int
     */
    private $kdtId;

    /**
     * 消息体的版本号
     * @var string
     */
    private $version;

    /**
     * 消息体内容
     * @var string
     */
    private $msg;

    /**
     * 店铺名称
     * @var string
     */
    private $kdtName;

    /**
     * 优惠事件状态
     * @var string
     */
    private $status;



    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @param string $id
     */
    public function setId(string $id): void
    {
        $this->id = $id;
    }

    /**
     * @return int
     */
    public function getKdtId(): int
    {
        return $this->kdtId;
    }

    /**
     * @param int $kdtId
     */
    public function setKdtId(int $kdtId): void
    {
        $this->kdtId = $kdtId;
    }

    /**
     * @return string
     */
    public function getVersion(): string
    {
        return $this->version;
    }

    /**
     * @param string $version
     */
    public function setVersion(string $version): void
    {
        $this->version = $version;
    }

    /**
     * @return string
     */
    public function getMsg(): string
    {
        return $this->msg;
    }

    /**
     * @param string $msg
     */
    public function setMsg(string $msg): void
    {
        $this->msg = $msg;
    }

    /**
     * @return string
     */
    public function getKdtName(): string
    {
        return $this->kdtName;
    }

    /**
     * @param string $kdtName
     */
    public function setKdtName(string $kdtName): void
    {
        $this->kdtName = $kdtName;
    }

    /**
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * @param string $status
     */
    public function setStatus(string $status): void
    {
        $this->status = $status;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}