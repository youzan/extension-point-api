<?php

namespace Com\Youzan\Cloud\Extension\Param\Medicine;



/**
 * 处方信息查询请求
 * @author Baymax
 * @create Mon Mar 14 15:58:14 CST 2022
 */
class PrescriptionInfoQueryRequestDTO implements \JsonSerializable {

    /**
     * 有赞店铺标识
     * @var int
     */
    private $kdtId;

    /**
     * 有赞店铺总部
     * @var int
     */
    private $rootKdtId;

    /**
     * 医院渠道
     * @var int
     */
    private $hospitalChannel;

    /**
     * 医院名称
     * @var string
     */
    private $hospitalName;

    /**
     * 订单号
     * @var string
     */
    private $tid;

    /**
     * 有赞处方单号
     * @var string
     */
    private $yzRxNo;



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
     * @return int
     */
    public function getRootKdtId(): ?int
    {
        return $this->rootKdtId;
    }

    /**
     * @param int $rootKdtId
     */
    public function setRootKdtId(?int $rootKdtId): void
    {
        $this->rootKdtId = $rootKdtId;
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
     * @return string
     */
    public function getHospitalName(): ?string
    {
        return $this->hospitalName;
    }

    /**
     * @param string $hospitalName
     */
    public function setHospitalName(?string $hospitalName): void
    {
        $this->hospitalName = $hospitalName;
    }

    /**
     * @return string
     */
    public function getTid(): ?string
    {
        return $this->tid;
    }

    /**
     * @param string $tid
     */
    public function setTid(?string $tid): void
    {
        $this->tid = $tid;
    }

    /**
     * @return string
     */
    public function getYzRxNo(): ?string
    {
        return $this->yzRxNo;
    }

    /**
     * @param string $yzRxNo
     */
    public function setYzRxNo(?string $yzRxNo): void
    {
        $this->yzRxNo = $yzRxNo;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}