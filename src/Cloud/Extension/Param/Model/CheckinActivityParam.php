<?php

namespace Com\Youzan\Cloud\Extension\Param\Model;

use Com\Youzan\Cloud\Extension\Param\Model\CheckinPrizeDTO;
use Com\Youzan\Cloud\Extension\Param\CheckinActivityParam\CycleParam;
use Com\Youzan\Cloud\Extension\Param\Model\CheckinAutoReplyDTO;
use Com\Youzan\Cloud\Extension\Param\CheckinActivityParam\CheckInFeature;

/**
 * 
 * @author Baymax
 * @create 2021-04-13 15:16:53.0
 */
class CheckinActivityParam implements \JsonSerializable {

    /**
     * 
     * @var int
     */
    private $activityId;

    /**
     * 
     * @var string
     */
    private $name;

    /**
     * 
     * @var int
     */
    private $bizCode;

    /**
     * 
     * @var int
     */
    private $shopId;

    /**
     * 
     * @var int
     */
    private $mode;

    /**
     * 
     * @var int
     */
    private $calculateMode;

    /**
     * 
     * @var bool
     */
    private $open;

    /**
     * 
     * @var array
     */
    private $prizeList;

    /**
     * 
     * @var bool
     */
    private $showCheckinPage;

    /**
     * 
     * @var string
     */
    private $ruleContent;

    /**
     * 
     * @var CycleParam
     */
    private $cycle;

    /**
     * 
     * @var int
     */
    private $startAt;

    /**
     * 
     * @var int
     */
    private $endAt;

    /**
     * 
     * @var string
     */
    private $replyContent;

    /**
     * 
     * @var CheckinAutoReplyDTO
     */
    private $replyLink;

    /**
     * 
     * @var CheckInFeature
     */
    private $checkInFeature;

    /**
     * 
     * @var array
     */
    private $testParam;



    /**
     * @return int
     */
    public function getActivityId(): ?int
    {
        return $this->activityId;
    }

    /**
     * @param int $activityId
     */
    public function setActivityId(?int $activityId): void
    {
        $this->activityId = $activityId;
    }

    /**
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return int
     */
    public function getBizCode(): ?int
    {
        return $this->bizCode;
    }

    /**
     * @param int $bizCode
     */
    public function setBizCode(?int $bizCode): void
    {
        $this->bizCode = $bizCode;
    }

    /**
     * @return int
     */
    public function getShopId(): ?int
    {
        return $this->shopId;
    }

    /**
     * @param int $shopId
     */
    public function setShopId(?int $shopId): void
    {
        $this->shopId = $shopId;
    }

    /**
     * @return int
     */
    public function getMode(): ?int
    {
        return $this->mode;
    }

    /**
     * @param int $mode
     */
    public function setMode(?int $mode): void
    {
        $this->mode = $mode;
    }

    /**
     * @return int
     */
    public function getCalculateMode(): ?int
    {
        return $this->calculateMode;
    }

    /**
     * @param int $calculateMode
     */
    public function setCalculateMode(?int $calculateMode): void
    {
        $this->calculateMode = $calculateMode;
    }

    /**
     * @return bool
     */
    public function getOpen(): ?bool
    {
        return $this->open;
    }

    /**
     * @param bool $open
     */
    public function setOpen(?bool $open): void
    {
        $this->open = $open;
    }

    /**
     * @return array
     */
    public function getPrizeList(): ?array
    {
        return $this->prizeList;
    }

    /**
     * @param array $prizeList
     */
    public function setPrizeList(?array $prizeList): void
    {
        $this->prizeList = $prizeList;
    }

    /**
     * @return bool
     */
    public function getShowCheckinPage(): ?bool
    {
        return $this->showCheckinPage;
    }

    /**
     * @param bool $showCheckinPage
     */
    public function setShowCheckinPage(?bool $showCheckinPage): void
    {
        $this->showCheckinPage = $showCheckinPage;
    }

    /**
     * @return string
     */
    public function getRuleContent(): ?string
    {
        return $this->ruleContent;
    }

    /**
     * @param string $ruleContent
     */
    public function setRuleContent(?string $ruleContent): void
    {
        $this->ruleContent = $ruleContent;
    }

    /**
     * @return CycleParam
     */
    public function getCycle(): ?CycleParam
    {
        return $this->cycle;
    }

    /**
     * @param CycleParam $cycle
     */
    public function setCycle(?CycleParam $cycle): void
    {
        $this->cycle = $cycle;
    }

    /**
     * @return int
     */
    public function getStartAt(): ?int
    {
        return $this->startAt;
    }

    /**
     * @param int $startAt
     */
    public function setStartAt(?int $startAt): void
    {
        $this->startAt = $startAt;
    }

    /**
     * @return int
     */
    public function getEndAt(): ?int
    {
        return $this->endAt;
    }

    /**
     * @param int $endAt
     */
    public function setEndAt(?int $endAt): void
    {
        $this->endAt = $endAt;
    }

    /**
     * @return string
     */
    public function getReplyContent(): ?string
    {
        return $this->replyContent;
    }

    /**
     * @param string $replyContent
     */
    public function setReplyContent(?string $replyContent): void
    {
        $this->replyContent = $replyContent;
    }

    /**
     * @return CheckinAutoReplyDTO
     */
    public function getReplyLink(): ?CheckinAutoReplyDTO
    {
        return $this->replyLink;
    }

    /**
     * @param CheckinAutoReplyDTO $replyLink
     */
    public function setReplyLink(?CheckinAutoReplyDTO $replyLink): void
    {
        $this->replyLink = $replyLink;
    }

    /**
     * @return CheckInFeature
     */
    public function getCheckInFeature(): ?CheckInFeature
    {
        return $this->checkInFeature;
    }

    /**
     * @param CheckInFeature $checkInFeature
     */
    public function setCheckInFeature(?CheckInFeature $checkInFeature): void
    {
        $this->checkInFeature = $checkInFeature;
    }

    /**
     * @return array
     */
    public function getTestParam(): ?array
    {
        return $this->testParam;
    }

    /**
     * @param array $testParam
     */
    public function setTestParam(?array $testParam): void
    {
        $this->testParam = $testParam;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}