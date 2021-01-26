<?php

namespace Com\Youzan\Cloud\Extension\Param\Request;



/**
 * 
 * @author Baymax
 * @create 2020-08-25 15:40:11.0
 */
class ExtGenMemberCodeDTO implements \JsonSerializable {

    /**
     * 连锁场景：总部kdtId；单店场景：店铺kdtId；
     * @var int
     */
    private $kdtId;

    /**
     * 用户id
     * @var string
     */
    private $yzOpenId;

    /**
     * 触发当前请求的店铺id
     * @var int
     */
    private $nodeKdtId;



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
     * @return string
     */
    public function getYzOpenId(): ?string
    {
        return $this->yzOpenId;
    }

    /**
     * @param string $yzOpenId
     */
    public function setYzOpenId(?string $yzOpenId): void
    {
        $this->yzOpenId = $yzOpenId;
    }

    /**
     * @return int
     */
    public function getNodeKdtId(): ?int
    {
        return $this->nodeKdtId;
    }

    /**
     * @param int $nodeKdtId
     */
    public function setNodeKdtId(?int $nodeKdtId): void
    {
        $this->nodeKdtId = $nodeKdtId;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}