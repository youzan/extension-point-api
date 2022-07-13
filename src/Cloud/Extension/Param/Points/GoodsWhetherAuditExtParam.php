<?php

namespace Com\Youzan\Cloud\Extension\Param\Points;

use Com\Youzan\Cloud\Extension\Param\Points\GoodsWhetherAuditExtItemInfo;

/**
 * 入参
 * @author Baymax
 * @create Mon May 09 21:08:54 CST 2022
 */
class GoodsWhetherAuditExtParam implements \JsonSerializable {

    /**
     * 店铺id
     * @var int
     */
    private $kdtId;

    /**
     * 连锁总部kdtId
     * @var int
     */
    private $hqKdtId;

    /**
     * 操作的员工ID
     * @var int
     */
    private $operatorId;

    /**
     * 操作场景; 1: 发布商品，2: 编辑商品, 3: 上架商品, 4: 下架商品, 5: 删除商品, 6:快捷修改商品信息
     * @var int
     */
    private $operateScene;

    /**
     * 商品相关信息
     * @var array
     */
    private $itemInfoList;



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
    public function getHqKdtId(): ?int
    {
        return $this->hqKdtId;
    }

    /**
     * @param int $hqKdtId
     */
    public function setHqKdtId(?int $hqKdtId): void
    {
        $this->hqKdtId = $hqKdtId;
    }

    /**
     * @return int
     */
    public function getOperatorId(): ?int
    {
        return $this->operatorId;
    }

    /**
     * @param int $operatorId
     */
    public function setOperatorId(?int $operatorId): void
    {
        $this->operatorId = $operatorId;
    }

    /**
     * @return int
     */
    public function getOperateScene(): ?int
    {
        return $this->operateScene;
    }

    /**
     * @param int $operateScene
     */
    public function setOperateScene(?int $operateScene): void
    {
        $this->operateScene = $operateScene;
    }

    /**
     * @return array
     */
    public function getItemInfoList(): ?array
    {
        return $this->itemInfoList;
    }

    /**
     * @param array $itemInfoList
     */
    public function setItemInfoList(?array $itemInfoList): void
    {
        $this->itemInfoList = $itemInfoList;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}