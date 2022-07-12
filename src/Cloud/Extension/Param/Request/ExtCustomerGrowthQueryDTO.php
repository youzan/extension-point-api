<?php

namespace Com\Youzan\Cloud\Extension\Param\Request;



/**
 * 查询用户成长值入参
 * @author Baymax
 * @create Thu Jan 13 09:47:10 CST 2022
 */
class ExtCustomerGrowthQueryDTO implements \JsonSerializable {

    /**
     * 商家id
     * @var int
     */
    private $kdtId;

    /**
     * 用户id
     * @var string
     */
    private $yzOpenId;

    /**
     * 触发店铺的店铺ID，当连锁触发返回分店ID，总部触发返回总部ID，单店触发返回单店店铺ID
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