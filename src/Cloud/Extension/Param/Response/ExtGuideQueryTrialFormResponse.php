<?php

namespace Com\Youzan\Cloud\Extension\Param\Response;

use Com\Youzan\Cloud\Extension\Param\Response\AddressDTO;
use Com\Youzan\Cloud\Extension\Param\Response\GoodsDTO;

/**
 * 试用单具体内容
 * @author Baymax
 * @create Tue May 27 19:12:50 CST 2025
 */
class ExtGuideQueryTrialFormResponse implements \JsonSerializable {

    /**
     * 店铺在有赞的id标识，有赞平台生成，在有赞平台唯一，用于判断信息属于哪一个店铺
     * @var int
     */
    private $kdtId;

    /**
     * 导购员唯一标识符，有赞平台唯一值
     * @var string
     */
    private $guide_open_id;

    /**
     * 有赞客户id，客户在有赞的唯一id
     * @var string
     */
    private $yz_open_id;

    /**
     * 客户收货地址信息，可从youzan.guide.trial.get.address.1.0.0获取
     * @var AddressDTO
     */
    private $address;

    /**
     * 商品信息
     * @var array
     */
    private $goodsList;



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
    public function getGuide_open_id(): ?string
    {
        return $this->guide_open_id;
    }

    /**
     * @param string $guide_open_id
     */
    public function setGuide_open_id(?string $guide_open_id): void
    {
        $this->guide_open_id = $guide_open_id;
    }

    /**
     * @return string
     */
    public function getYz_open_id(): ?string
    {
        return $this->yz_open_id;
    }

    /**
     * @param string $yz_open_id
     */
    public function setYz_open_id(?string $yz_open_id): void
    {
        $this->yz_open_id = $yz_open_id;
    }

    /**
     * @return AddressDTO
     */
    public function getAddress(): ?AddressDTO
    {
        return $this->address;
    }

    /**
     * @param AddressDTO $address
     */
    public function setAddress(?AddressDTO $address): void
    {
        $this->address = $address;
    }

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

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}