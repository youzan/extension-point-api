<?php

namespace Com\Youzan\Cloud\Extension\Param\Request;



/**
 * 处方笺费用查询请求
 * @author Baymax
 * @create Wed Feb 15 13:30:08 CST 2023
 */
class PrescriptionFeeQueryRequest implements \JsonSerializable {

    /**
     * 处方单号
     * @var string
     */
    private $rxNo;



    /**
     * @return string
     */
    public function getRxNo(): ?string
    {
        return $this->rxNo;
    }

    /**
     * @param string $rxNo
     */
    public function setRxNo(?string $rxNo): void
    {
        $this->rxNo = $rxNo;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}