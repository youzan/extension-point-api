<?php

namespace Com\Youzan\Cloud\Extension\Param;



/**
 * 用于记录单据号关联关系
 * @author Baymax
 * @create 2019-07-21 22:31:59.0
 */
class PluginHistoryOrderResultDTO implements \JsonSerializable {

    /**
     * 业务单据
     * @var string
     */
    private $bizBillNo;

    /**
     * 业务单据关联的源单号
     * @var string
     */
    private $sourceOrderNo;

    /**
     * erp系统生成的外部关联单据号,比如旺店通生成的调拨单号
     * @var string
     */
    private $outerNo;



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
     * @return string
     */
    public function getSourceOrderNo(): ?string
    {
        return $this->sourceOrderNo;
    }

    /**
     * @param string $sourceOrderNo
     */
    public function setSourceOrderNo(?string $sourceOrderNo): void
    {
        $this->sourceOrderNo = $sourceOrderNo;
    }

    /**
     * @return string
     */
    public function getOuterNo(): ?string
    {
        return $this->outerNo;
    }

    /**
     * @param string $outerNo
     */
    public function setOuterNo(?string $outerNo): void
    {
        $this->outerNo = $outerNo;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}