<?php

namespace Com\Youzan\Cloud\Extension\Param\ExtAchievementCalculateResponse;

use Com\Youzan\Cloud\Extension\Param\ExtAchievementCalculateResponse\ExtAchievementItemDetail;

/**
 * 销售业绩数据，只要有销售导购id，就必须返回该数据，无销售导购id时返回为null即可
 * @author Baymax
 * @create Mon Mar 31 11:21:07 CST 2025
 */
class ExtGuideAchievement implements \JsonSerializable {

    /**
     * 销售导购yzOpenId
     * @var string
     */
    private $guideOpenId;

    /**
     * 销售业绩明细
     * @var array
     */
    private $guideAchievementItemDetails;



    /**
     * @return string
     */
    public function getGuideOpenId(): ?string
    {
        return $this->guideOpenId;
    }

    /**
     * @param string $guideOpenId
     */
    public function setGuideOpenId(?string $guideOpenId): void
    {
        $this->guideOpenId = $guideOpenId;
    }

    /**
     * @return array
     */
    public function getGuideAchievementItemDetails(): ?array
    {
        return $this->guideAchievementItemDetails;
    }

    /**
     * @param array $guideAchievementItemDetails
     */
    public function setGuideAchievementItemDetails(?array $guideAchievementItemDetails): void
    {
        $this->guideAchievementItemDetails = $guideAchievementItemDetails;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}