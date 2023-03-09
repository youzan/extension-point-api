<?php

namespace Com\Youzan\Cloud\Extension\Param\Response;



/**
 * 处方笺费用
 * @author Baymax
 * @create Wed Feb 15 13:30:08 CST 2023
 */
class PrescriptionFeeQueryResponse implements \JsonSerializable {

    /**
     * 处方单号
     * @var string
     */
    private $rxNo;

    /**
     * 医院渠道
     * @var int
     */
    private $hospitalChannel;

    /**
     * 处方笺费用，单位分
     * @var int
     */
    private $prescriptionFee;



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

    /**
     * @return int
     */
    public function getHospitalChannel(): ?int
    {
        return $this->hospitalChannel;
    }

    /**
     * @param int $hospitalChannel
     */
    public function setHospitalChannel(?int $hospitalChannel): void
    {
        $this->hospitalChannel = $hospitalChannel;
    }

    /**
     * @return int
     */
    public function getPrescriptionFee(): ?int
    {
        return $this->prescriptionFee;
    }

    /**
     * @param int $prescriptionFee
     */
    public function setPrescriptionFee(?int $prescriptionFee): void
    {
        $this->prescriptionFee = $prescriptionFee;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}