<?php

namespace Com\Youzan\Cloud\Extension\Param\Request;



/**
 * 
 * @author Baymax
 * @create 2020-03-24 10:55:54.0
 */
class ValueCardTakeRequest implements \JsonSerializable {

    /**
     * 领取人有赞开放ID
     * @var string
     */
    private $yzOpenId;

    /**
     * 赠送记录ID（调用方生成，取值自give扩展点返回giveId字段）
     * @var string
     */
    private $giveId;

    /**
     * 总部店铺ID
     * @var int
     */
    private $rootKdtId;

    /**
     * 店铺ID
     * @var int
     */
    private $kdtId;



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
     * @return string
     */
    public function getGiveId(): ?string
    {
        return $this->giveId;
    }

    /**
     * @param string $giveId
     */
    public function setGiveId(?string $giveId): void
    {
        $this->giveId = $giveId;
    }

    /**
     * @return int
     */
    public function getRootKdtId(): ?int
    {
        return $this->rootKdtId;
    }

    /**
     * @param int $rootKdtId
     */
    public function setRootKdtId(?int $rootKdtId): void
    {
        $this->rootKdtId = $rootKdtId;
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

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}