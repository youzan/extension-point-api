<?php

namespace Com\Youzan\Cloud\Extension\Param\Goods;

use Java\Lang\Long;

/**
 *  
 * @author Baymax
 * @create Thu Jun 30 19:00:49 CST 2022
 */
class ExtGoodsConfigRequest implements \JsonSerializable {

    /**
     * 商品id列表
     * @var array
     */
    private $goodsIdList;

    /**
     * 店铺id
     * @var int
     */
    private $kdtId;

    /**
     * 分销员yzopenId
     * @var string
     */
    private $dsOpenId;

    /**
     * 分销员等级
     * @var int
     */
    private $deLevel;

    /**
     * 分销员手机号
     * @var string
     */
    private $dsMobile;



    /**
     * @return array
     */
    public function getGoodsIdList(): ?array
    {
        return $this->goodsIdList;
    }

    /**
     * @param array $goodsIdList
     */
    public function setGoodsIdList(?array $goodsIdList): void
    {
        $this->goodsIdList = $goodsIdList;
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
     * @return string
     */
    public function getDsOpenId(): ?string
    {
        return $this->dsOpenId;
    }

    /**
     * @param string $dsOpenId
     */
    public function setDsOpenId(?string $dsOpenId): void
    {
        $this->dsOpenId = $dsOpenId;
    }

    /**
     * @return int
     */
    public function getDeLevel(): ?int
    {
        return $this->deLevel;
    }

    /**
     * @param int $deLevel
     */
    public function setDeLevel(?int $deLevel): void
    {
        $this->deLevel = $deLevel;
    }

    /**
     * @return string
     */
    public function getDsMobile(): ?string
    {
        return $this->dsMobile;
    }

    /**
     * @param string $dsMobile
     */
    public function setDsMobile(?string $dsMobile): void
    {
        $this->dsMobile = $dsMobile;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}