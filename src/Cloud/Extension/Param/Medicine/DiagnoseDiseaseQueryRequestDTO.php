<?php

namespace Com\Youzan\Cloud\Extension\Param\Medicine;



/**
 * 
 * @author Baymax
 * @create 2021-04-11 16:24:33.0
 */
class DiagnoseDiseaseQueryRequestDTO implements \JsonSerializable {

    /**
     * 
     * @var int
     */
    private $kdtId;

    /**
     * 
     * @var int
     */
    private $rootKdtId;

    /**
     * 
     * @var int
     */
    private $hospitalChannel;

    /**
     * 
     * @var string
     */
    private $hospitalName;

    /**
     * 
     * @var array
     */
    private $commonNames;

    /**
     * 
     * @var int
     */
    private $patientId;

    /**
     * 
     * @var int
     */
    private $sex;

    /**
     * 
     * @var string
     */
    private $birthday;

    /**
     * 
     * @var int
     */
    private $liverType;

    /**
     * 
     * @var int
     */
    private $renalType;

    /**
     * 
     * @var int
     */
    private $nurseType;

    /**
     * 
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