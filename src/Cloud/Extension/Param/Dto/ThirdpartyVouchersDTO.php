<?php

namespace Com\Youzan\Cloud\Extension\Param\Dto;

use DateTime;
use StdClass;

/**
 * 
 * @author Baymax
 * @create 2020-02-12 16:35:56.0
 */
class ThirdpartyVouchersDTO implements \JsonSerializable {

    /**
     * 
     * @var int
     */
    private $id;

    /**
     * 
     * @var int
     */
    private $activityId;

    /**
     * 
     * @var int
     */
    private $value;

    /**
     * 
     * @var string
     */
    private $currency;

    /**
     * 
     * @var int
     */
    private $preferentialMode;

    /**
     * 
     * @var int
     */
    private $userId;

    /**
     * 
     * @var int
     */
    private $status;

    /**
     * 
     * @var int
     */
    private $validStartTime;

    /**
     * 
     * @var int
     */
    private $validEndTime;

    /**
     * 
     * @var stdClass
     */
    private $extMap;



    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return int
     */
    public function getActivityId(): int
    {
        return $this->activityId;
    }

    /**
     * @param int $activityId
     */
    public function setActivityId(int $activityId): void
    {
        $this->activityId = $activityId;
    }

    /**
     * @return int
     */
    public function getValue(): int
    {
        return $this->value;
    }

    /**
     * @param int $value
     */
    public function setValue(int $value): void
    {
        $this->value = $value;
    }

    /**
     * @return string
     */
    public function getCurrency(): string
    {
        return $this->currency;
    }

    /**
     * @param string $currency
     */
    public function setCurrency(string $currency): void
    {
        $this->currency = $currency;
    }

    /**
     * @return int
     */
    public function getPreferentialMode(): int
    {
        return $this->preferentialMode;
    }

    /**
     * @param int $preferentialMode
     */
    public function setPreferentialMode(int $preferentialMode): void
    {
        $this->preferentialMode = $preferentialMode;
    }

    /**
     * @return int
     */
    public function getUserId(): int
    {
        return $this->userId;
    }

    /**
     * @param int $userId
     */
    public function setUserId(int $userId): void
    {
        $this->userId = $userId;
    }

    /**
     * @return int
     */
    public function getStatus(): int
    {
        return $this->status;
    }

    /**
     * @param int $status
     */
    public function setStatus(int $status): void
    {
        $this->status = $status;
    }

    /**
     * @return int
     */
    public function getValidStartTime(): int
    {
        return $this->validStartTime;
    }

    /**
     * @param int $validStartTime
     */
    public function setValidStartTime(int $validStartTime): void
    {
        $this->validStartTime = $validStartTime;
    }

    /**
     * @return int
     */
    public function getValidEndTime(): int
    {
        return $this->validEndTime;
    }

    /**
     * @param int $validEndTime
     */
    public function setValidEndTime(int $validEndTime): void
    {
        $this->validEndTime = $validEndTime;
    }

    /**
     * @return stdClass
     */
    public function getExtMap(): stdClass
    {
        return $this->extMap;
    }

    /**
     * @param stdClass $extMap
     */
    public function setExtMap(stdClass $extMap): void
    {
        $this->extMap = $extMap;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}