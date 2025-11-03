<?php

namespace Com\Youzan\Cloud\Extension\Param\Request;

use Com\Youzan\Cloud\Extension\Param\Request\GoodsDTO;

/**
 * 请求参数
 * @author Baymax
 * @create Thu Jun 05 15:08:41 CST 2025
 */
class ExtGuideQueryTrialItemSoldOutRequest implements \JsonSerializable {

    /**
     * 试用商品列表
     * @var array
     */
    private $goodsList;

    /**
     * 店铺在有赞的id标识，有赞平台生成，在有赞平台唯一，用于判断信息属于哪一个店铺。注意如果是请求参数并且只有店铺id入参需要配置为内部映射。
     * @var int
     */
    private $kdtId;

    /**
     * 有赞连锁总部店铺id，仅供有赞连锁场景下使用。有赞平台生成，在有赞平台唯一，用于判断信息属于哪一个总部
     * @var int
     */
    private $rootKdtId;



    /**
     * @return array
     */
    public function getGoodsList(): ?array
    {
        return $this->goodsList;
    }

    /**
     * @param array $goodsList
     */
    public function setGoodsList(?array $goodsList): void
    {
        $this->goodsList = $goodsList;
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

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}