<?php

namespace Com\Youzan\Cloud\Extension\Param\Dto;

use Com\Youzan\Cloud\Extension\Param\Dto\SpuIntroductionItemDTO;

/**
 *  请求参数
 * @author Baymax
 * @create Tue Apr 04 17:41:46 CST 2023
 */
class SpuIntroductionItemCheckRequest implements \JsonSerializable {

    /**
     *  kdtId
     * @var int
     */
    private $kdtId;

    /**
     * 引进单号
     * @var string
     */
    private $bizBillNo;

    /**
     *  单据明细
     * @var SpuIntroductionItemDTO
     */
    private $item;



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
    public function getBizBillNo(): ?string
    {
        return $this->bizBillNo;
    }

    /**
     * @param string $bizBillNo
     */
    public function setBizBillNo(?string $bizBillNo): void
    {
        $this->bizBillNo = $bizBillNo;
    }

    /**
     * @return SpuIntroductionItemDTO
     */
    public function getItem(): ?SpuIntroductionItemDTO
    {
        return $this->item;
    }

    /**
     * @param SpuIntroductionItemDTO $item
     */
    public function setItem(?SpuIntroductionItemDTO $item): void
    {
        $this->item = $item;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}