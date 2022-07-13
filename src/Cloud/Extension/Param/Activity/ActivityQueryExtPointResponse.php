<?php

namespace Com\Youzan\Cloud\Extension\Param\Activity;

use Com\Youzan\Cloud\Extension\Param\Dto\ThirdpartyActivityDTO;

/**
 * 响应参数
 * @author Baymax
 * @create Mon Mar 14 19:14:33 CST 2022
 */
class ActivityQueryExtPointResponse implements \JsonSerializable {

    /**
     * 活动信息
     * @var ThirdpartyActivityDTO
     */
    private $thirdpartyActivity;

    /**
     * 扩展点版本号
     * @var int
     */
    private $versionNo;



    /**
     * @return ThirdpartyActivityDTO
     */
    public function getThirdpartyActivity(): ?ThirdpartyActivityDTO
    {
        return $this->thirdpartyActivity;
    }

    /**
     * @param ThirdpartyActivityDTO $thirdpartyActivity
     */
    public function setThirdpartyActivity(?ThirdpartyActivityDTO $thirdpartyActivity): void
    {
        $this->thirdpartyActivity = $thirdpartyActivity;
    }

    /**
     * @return int
     */
    public function getVersionNo(): ?int
    {
        return $this->versionNo;
    }

    /**
     * @param int $versionNo
     */
    public function setVersionNo(?int $versionNo): void
    {
        $this->versionNo = $versionNo;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}