<?php

namespace Com\Youzan\Cloud\Extension\Param\Dto;



/**
 * 接口入参对象
 * @author Baymax
 * @create 2021-01-22 10:18:32.0
 */
class SelfFetchWithSoldStatusQueryExtDTO implements \JsonSerializable {

    /**
     * 微商城单店店铺ID
     * @var int
     */
    private $kdtId;

    /**
     * 用户ID
     * @var string
     */
    private $yzOpenId;

    /**
     * 分销员ID
     * @var string
     */
    private $salesmanYzOpenId;

    /**
     * 微商城连锁总店店铺ID
     * @var int
     */
    private $rootKdtId;

    /**
     * 微商城连锁网店店铺ID
     * @var int
     */
    private $nodeKdtId;



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
    public function getYzOpenId(): string
    {
        return $this->yzOpenId;
    }

    /**
     * @param string $yzOpenId
     */
    public function setYzOpenId(string $yzOpenId): void
    {
        $this->yzOpenId = $yzOpenId;
    }

    /**
     * @return string
     */
    public function getSalesmanYzOpenId(): string
    {
        return $this->salesmanYzOpenId;
    }

    /**
     * @param string $salesmanYzOpenId
     */
    public function setSalesmanYzOpenId(string $salesmanYzOpenId): void
    {
        $this->salesmanYzOpenId = $salesmanYzOpenId;
    }

    /**
     * @return int
     */
    public function getRootKdtId(): int
    {
        return $this->rootKdtId;
    }

    /**
     * @param int $rootKdtId
     */
    public function setRootKdtId(int $rootKdtId): void
    {
        $this->rootKdtId = $rootKdtId;
    }

    /**
     * @return int
     */
    public function getNodeKdtId(): int
    {
        return $this->nodeKdtId;
    }

    /**
     * @param int $nodeKdtId
     */
    public function setNodeKdtId(int $nodeKdtId): void
    {
        $this->nodeKdtId = $nodeKdtId;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}