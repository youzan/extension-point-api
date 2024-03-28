<?php

namespace Com\Youzan\Cloud\Extension\Param\Medicine;



/**
 *  请求体
 * @author Baymax
 * @create Tue Jun 07 11:00:15 CST 2022
 */
class DiagnoseDiseaseQueryRequestDTO implements \JsonSerializable {

    /**
     *  有赞店铺kdtId
     * @var int
     */
    private $kdtId;

    /**
     *  有赞店铺总部kdtId
     * @var int
     */
    private $rootKdtId;

    /**
     *  互联网医院渠道，目前枚举：1-莲藕，...
     * @var int
     */
    private $hospitalChannel;

    /**
     *  互联网医院名称
     * @var string
     */
    private $hospitalName;

    /**
     *  药品通用名（必填）
     * @var array
     */
    private $commonNames;

    /**
     * 用药人id 
     * @var int
     */
    private $patientId;

    /**
     *  性别 1&#x3D;男;2&#x3D;女;
     * @var int
     */
    private $sex;

    /**
     *  出生日期(yyyy-MM-dd)
     * @var string
     */
    private $birthday;

    /**
     *  肝功能异常 0&#x3D;无;1&#x3D;有;
     * @var int
     */
    private $liverType;

    /**
     *  肾功能异常 0&#x3D;无;1&#x3D;有;
     * @var int
     */
    private $renalType;

    /**
     *  是否妊娠哺乳 0&#x3D;无;1&#x3D;有;
     * @var int
     */
    private $nurseType;

    /**
     * 系统请求来源，可忽略
     * @var string
     */
    private $retailSource;



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
     * @return array
     */
    public function getCommonNames(): ?array
    {
        return $this->commonNames;
    }

    /**
     * @param array $commonNames
     */
    public function setCommonNames(?array $commonNames): void
    {
        $this->commonNames = $commonNames;
    }

    /**
     * @return int
     */
    public function getPatientId(): ?int
    {
        return $this->patientId;
    }

    /**
     * @param int $patientId
     */
    public function setPatientId(?int $patientId): void
    {
        $this->patientId = $patientId;
    }

    /**
     * @return int
     */
    public function getSex(): ?int
    {
        return $this->sex;
    }

    /**
     * @param int $sex
     */
    public function setSex(?int $sex): void
    {
        $this->sex = $sex;
    }

    /**
     * @return string
     */
    public function getBirthday(): ?string
    {
        return $this->birthday;
    }

    /**
     * @param string $birthday
     */
    public function setBirthday(?string $birthday): void
    {
        $this->birthday = $birthday;
    }

    /**
     * @return int
     */
    public function getLiverType(): ?int
    {
        return $this->liverType;
    }

    /**
     * @param int $liverType
     */
    public function setLiverType(?int $liverType): void
    {
        $this->liverType = $liverType;
    }

    /**
     * @return int
     */
    public function getRenalType(): ?int
    {
        return $this->renalType;
    }

    /**
     * @param int $renalType
     */
    public function setRenalType(?int $renalType): void
    {
        $this->renalType = $renalType;
    }

    /**
     * @return int
     */
    public function getNurseType(): ?int
    {
        return $this->nurseType;
    }

    /**
     * @param int $nurseType
     */
    public function setNurseType(?int $nurseType): void
    {
        $this->nurseType = $nurseType;
    }

    /**
     * @return string
     */
    public function getRetailSource(): ?string
    {
        return $this->retailSource;
    }

    /**
     * @param string $retailSource
     */
    public function setRetailSource(?string $retailSource): void
    {
        $this->retailSource = $retailSource;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}