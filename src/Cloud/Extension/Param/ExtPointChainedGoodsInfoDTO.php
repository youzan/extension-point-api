<?php

namespace Com\Youzan\Cloud\Extension\Param;



/**
 * 连锁商品模型
 * @author Baymax
 * @create Thu Jan 25 17:40:15 CST 2024
 */
class ExtPointChainedGoodsInfoDTO implements \JsonSerializable {

    /**
     * 总店店铺id
     * @var int
     */
    private $rootKdtId;

    /**
     * 总店商品id
     * @var int
     */
    private $rootGoodsId;

    /**
     * 总店skuid
     * @var int
     */
    private $rootSkuId;



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
    public function getRootGoodsId(): ?int
    {
        return $this->rootGoodsId;
    }

    /**
     * @param int $rootGoodsId
     */
    public function setRootGoodsId(?int $rootGoodsId): void
    {
        $this->rootGoodsId = $rootGoodsId;
    }

    /**
     * @return int
     */
    public function getRootSkuId(): ?int
    {
        return $this->rootSkuId;
    }

    /**
     * @param int $rootSkuId
     */
    public function setRootSkuId(?int $rootSkuId): void
    {
        $this->rootSkuId = $rootSkuId;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}