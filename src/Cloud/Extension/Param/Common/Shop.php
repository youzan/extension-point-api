<?php

namespace Com\Youzan\Cloud\Extension\Param\Common;



/**
 * 店铺信息
 * @author Baymax
 * @create 2021-05-06 20:06:45.0
 */
class Shop implements \JsonSerializable {

    /**
     * 店铺ID
     * @var int
     */
    private $kdtId;

    /**
     * 总店店铺ID，若单店铺则为单店铺ID
     * @var int
     */
    private $rootKdtId;

    /**
     * 当前下单店铺名称
     * @var string
     */
    private $kdtName;

    /**
     * 下单店铺类型，微商城（0），零售（7）
     * @var int
     */
    private $type;

    /**
     * 下单店铺角色，单店（0），总店（1），分店（2）
     * @var int
     */
    private $shopRole;



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

    /**
     * @return int
     */
    public function getType(): ?int
    {
        return $this->type;
    }

    /**
     * @param int $type
     */
    public function setType(?int $type): void
    {
        $this->type = $type;
    }

    /**
     * @return int
     */
    public function getShopRole(): ?int
    {
        return $this->shopRole;
    }

    /**
     * @param int $shopRole
     */
    public function setShopRole(?int $shopRole): void
    {
        $this->shopRole = $shopRole;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}