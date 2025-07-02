<?php

namespace Com\Youzan\Cloud\Extension\Param\Dto;



/**
 * 商品备注列表
 * @author Baymax
 * @create Fri Oct 25 17:27:56 CST 2024
 */
class ItemRemarkDTO implements \JsonSerializable {

    /**
     * 商品条码或规格条码，用于判断哪个商品
     * @var string
     */
    private $spuNo;

    /**
     * 商品备注，展示在拣货小票各个商品的备注模块末尾
     * @var string
     */
    private $remark;



    /**
     * @return string
     */
    public function getSpuNo(): ?string
    {
        return $this->spuNo;
    }

    /**
     * @param string $spuNo
     */
    public function setSpuNo(?string $spuNo): void
    {
        $this->spuNo = $spuNo;
    }

    /**
     * @return string
     */
    public function getRemark(): ?string
    {
        return $this->remark;
    }

    /**
     * @param string $remark
     */
    public function setRemark(?string $remark): void
    {
        $this->remark = $remark;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}