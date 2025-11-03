<?php

namespace Com\Youzan\Cloud\Extension\Param\Dto;



/**
 * 请求参数
 * @author Baymax
 * @create Fri Oct 25 17:27:56 CST 2024
 */
class ItemRemarkCoBuildRequestDTO implements \JsonSerializable {

    /**
     * 店铺在有赞的id标识，有赞平台生成，在有赞平台唯一，用于判断信息属于哪一个店铺
     * @var int
     */
    private $kdtId;

    /**
     * 商品条码或规格条码，用于判断哪个商品
     * @var array
     */
    private $spuNoList;



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
     * @return array
     */
    public function getSpuNoList(): ?array
    {
        return $this->spuNoList;
    }

    /**
     * @param array $spuNoList
     */
    public function setSpuNoList(?array $spuNoList): void
    {
        $this->spuNoList = $spuNoList;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}