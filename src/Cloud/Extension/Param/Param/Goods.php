<?php

namespace Com\Youzan\Cloud\Extension\Param\Param;

use Com\Youzan\Cloud\Extension\Param\Param\Sku;

/**
 *  
 * @author Baymax
 * @create Sat Apr 09 14:25:04 CST 2022
 */
class Goods implements \JsonSerializable {

    /**
     *  
     * @var int
     */
    private $goodsId;

    /**
     *  
     * @var int
     */
    private $rootGoodsId;

    /**
     *  
     * @var string
     */
    private $alias;

    /**
     *  
     * @var int
     */
    private $goodsType;

    /**
     *  
     * @var array
     */
    private $skus;

    /**
     *  
     * @var string
     */
    private $bizMarkCode;



    /**
     * @return int
     */
    public function getGoodsId(): ?int
    {
        return $this->goodsId;
    }

    /**
     * @param int $goodsId
     */
    public function setGoodsId(?int $goodsId): void
    {
        $this->goodsId = $goodsId;
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
     * @return string
     */
    public function getAlias(): ?string
    {
        return $this->alias;
    }

    /**
     * @param string $alias
     */
    public function setAlias(?string $alias): void
    {
        $this->alias = $alias;
    }

    /**
     * @return int
     */
    public function getGoodsType(): ?int
    {
        return $this->goodsType;
    }

    /**
     * @param int $goodsType
     */
    public function setGoodsType(?int $goodsType): void
    {
        $this->goodsType = $goodsType;
    }

    /**
     * @return array
     */
    public function getSkus(): ?array
    {
        return $this->skus;
    }

    /**
     * @param array $skus
     */
    public function setSkus(?array $skus): void
    {
        $this->skus = $skus;
    }

    /**
     * @return string
     */
    public function getBizMarkCode(): ?string
    {
        return $this->bizMarkCode;
    }

    /**
     * @param string $bizMarkCode
     */
    public function setBizMarkCode(?string $bizMarkCode): void
    {
        $this->bizMarkCode = $bizMarkCode;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}