<?php

namespace Com\Youzan\Cloud\Extension\Param;



/**
 * 商品信息
 * @author Baymax
 * @create 2018-11-20 11:25:33.0
 */
class GoodsInfo implements \JsonSerializable {

    /**
     * 商品编码
     * @var string
     */
    private $goodsNo;

    /**
     * 电子卡券有效期
     * @var int
     */
    private $itemValidityStart;

    /**
     * 电子卡券有效期
     * @var int
     */
    private $itemValidityEnd;

    /**
     * 电子卡券有效期类型
     * @var int
     */
    private $validityType;

    /**
     * 电子卡券有效期天数
     * @var int
     */
    private $itemValidityDay;



    /**
     * @return string
     */
    public function getGoodsNo(): string
    {
        return $this->goodsNo;
    }

    /**
     * @param string $goodsNo
     */
    public function setGoodsNo(string $goodsNo): void
    {
        $this->goodsNo = $goodsNo;
    }

    /**
     * @return int
     */
    public function getItemValidityStart(): int
    {
        return $this->itemValidityStart;
    }

    /**
     * @param int $itemValidityStart
     */
    public function setItemValidityStart(int $itemValidityStart): void
    {
        $this->itemValidityStart = $itemValidityStart;
    }

    /**
     * @return int
     */
    public function getItemValidityEnd(): int
    {
        return $this->itemValidityEnd;
    }

    /**
     * @param int $itemValidityEnd
     */
    public function setItemValidityEnd(int $itemValidityEnd): void
    {
        $this->itemValidityEnd = $itemValidityEnd;
    }

    /**
     * @return int
     */
    public function getValidityType(): int
    {
        return $this->validityType;
    }

    /**
     * @param int $validityType
     */
    public function setValidityType(int $validityType): void
    {
        $this->validityType = $validityType;
    }

    /**
     * @return int
     */
    public function getItemValidityDay(): int
    {
        return $this->itemValidityDay;
    }

    /**
     * @param int $itemValidityDay
     */
    public function setItemValidityDay(int $itemValidityDay): void
    {
        $this->itemValidityDay = $itemValidityDay;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}