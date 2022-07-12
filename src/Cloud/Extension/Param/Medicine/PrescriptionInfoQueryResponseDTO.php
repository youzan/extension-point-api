<?php

namespace Com\Youzan\Cloud\Extension\Param\Medicine;

use Com\Youzan\Cloud\Extension\Param\Medicine\RxDrugInfoDTO;

/**
 * 处方信息
 * @author Baymax
 * @create Mon Mar 14 15:58:14 CST 2022
 */
class PrescriptionInfoQueryResponseDTO implements \JsonSerializable {

    /**
     * 有赞店铺标识
     * @var int
     */
    private $kdtId;

    /**
     * 有赞店铺总部
     * @var string
     */
    private $shopName;

    /**
     * 有赞处方单号
     * @var string
     */
    private $yzRxNo;

    /**
     * 外部处方单号
     * @var string
     */
    private $outRxNo;

    /**
     * 处方状态
     * @var int
     */
    private $outRxStatus;

    /**
     * 状态描述
     * @var string
     */
    private $outRxStatusDesc;

    /**
     * 附加描述
     * @var string
     */
    private $description;

    /**
     * 医生名称
     * @var string
     */
    private $doctorName;

    /**
     * 中药、西药
     * @var string
     */
    private $cnDrugs;

    /**
     * 处方单图片
     * @var string
     */
    private $rxImgUrl;

    /**
     * 处方药品信息
     * @var array
     */
    private $rxDrugInfos;

    /**
     * 外部问诊id
     * @var string
     */
    private $outInquiryId;

    /**
     * 开方完成时间，时间戳，毫秒级
     * @var int
     */
    private $prescribedTime;



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
    public function getShopName(): ?string
    {
        return $this->shopName;
    }

    /**
     * @param string $shopName
     */
    public function setShopName(?string $shopName): void
    {
        $this->shopName = $shopName;
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

    /**
     * @return string
     */
    public function getOutRxNo(): ?string
    {
        return $this->outRxNo;
    }

    /**
     * @param string $outRxNo
     */
    public function setOutRxNo(?string $outRxNo): void
    {
        $this->outRxNo = $outRxNo;
    }

    /**
     * @return int
     */
    public function getOutRxStatus(): ?int
    {
        return $this->outRxStatus;
    }

    /**
     * @param int $outRxStatus
     */
    public function setOutRxStatus(?int $outRxStatus): void
    {
        $this->outRxStatus = $outRxStatus;
    }

    /**
     * @return string
     */
    public function getOutRxStatusDesc(): ?string
    {
        return $this->outRxStatusDesc;
    }

    /**
     * @param string $outRxStatusDesc
     */
    public function setOutRxStatusDesc(?string $outRxStatusDesc): void
    {
        $this->outRxStatusDesc = $outRxStatusDesc;
    }

    /**
     * @return string
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription(?string $description): void
    {
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getDoctorName(): ?string
    {
        return $this->doctorName;
    }

    /**
     * @param string $doctorName
     */
    public function setDoctorName(?string $doctorName): void
    {
        $this->doctorName = $doctorName;
    }

    /**
     * @return string
     */
    public function getCnDrugs(): ?string
    {
        return $this->cnDrugs;
    }

    /**
     * @param string $cnDrugs
     */
    public function setCnDrugs(?string $cnDrugs): void
    {
        $this->cnDrugs = $cnDrugs;
    }

    /**
     * @return string
     */
    public function getRxImgUrl(): ?string
    {
        return $this->rxImgUrl;
    }

    /**
     * @param string $rxImgUrl
     */
    public function setRxImgUrl(?string $rxImgUrl): void
    {
        $this->rxImgUrl = $rxImgUrl;
    }

    /**
     * @return array
     */
    public function getRxDrugInfos(): ?array
    {
        return $this->rxDrugInfos;
    }

    /**
     * @param array $rxDrugInfos
     */
    public function setRxDrugInfos(?array $rxDrugInfos): void
    {
        $this->rxDrugInfos = $rxDrugInfos;
    }

    /**
     * @return string
     */
    public function getOutInquiryId(): ?string
    {
        return $this->outInquiryId;
    }

    /**
     * @param string $outInquiryId
     */
    public function setOutInquiryId(?string $outInquiryId): void
    {
        $this->outInquiryId = $outInquiryId;
    }

    /**
     * @return int
     */
    public function getPrescribedTime(): ?int
    {
        return $this->prescribedTime;
    }

    /**
     * @param int $prescribedTime
     */
    public function setPrescribedTime(?int $prescribedTime): void
    {
        $this->prescribedTime = $prescribedTime;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}