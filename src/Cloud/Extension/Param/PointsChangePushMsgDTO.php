<?php

namespace Com\Youzan\Cloud\Extension\Param;



/**
 * 消息体
 * @author Baymax
 * @create 2019-08-12 12:16:04.0
 */
class PointsChangePushMsgDTO implements \JsonSerializable {

    /**
     * id
     * @var string
     */
    private $id;

    /**
     * 店铺id
     * @var int
     */
    private $kdtId;

    /**
     * 版本号
     * @var int
     */
    private $version;

    /**
     * 消息体（需要进行解码）
     * @var string
     */
    private $msg;

    /**
     * 店铺名称
     * @var string
     */
    private $kdtName;



    /**
     * @return string
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * @param string $id
     */
    public function setId(?string $id): void
    {
        $this->id = $id;
    }

    /**
     * @return int
     */
    public function getKdtId(): ?int
    {
        return $this->kdtId;
    }

    /**
     * @param int $kdtId
     */
    public function setKdtId(?int $kdtId): void
    {
        $this->kdtId = $kdtId;
    }

    /**
     * @return int
     */
    public function getVersion(): ?int
    {
        return $this->version;
    }

    /**
     * @param int $version
     */
    public function setVersion(?int $version): void
    {
        $this->version = $version;
    }

    /**
     * @return string
     */
    public function getMsg(): ?string
    {
        return $this->msg;
    }

    /**
     * @param string $msg
     */
    public function setMsg(?string $msg): void
    {
        $this->msg = $msg;
    }

    /**
     * @return string
     */
    public function getKdtName(): ?string
    {
        return $this->kdtName;
    }

    /**
     * @param string $kdtName
     */
    public function setKdtName(?string $kdtName): void
    {
        $this->kdtName = $kdtName;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}