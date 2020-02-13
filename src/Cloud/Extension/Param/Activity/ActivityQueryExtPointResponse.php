<?php

namespace Com\Youzan\Cloud\Extension\Param\Activity;

use Com\Youzan\Cloud\Extension\Param\Dto\ThirdpartyActivityDTO;
use StdClass;

/**
 * 
 * @author Baymax
 * @create 2020-02-12 16:36:21.0
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
     * 
     * @var stdClass
     */
    private $extMap;



    /**
     * @return ThirdpartyActivityDTO
     */
    public function getThirdpartyActivity(): ThirdpartyActivityDTO
    {
        return $this->thirdpartyActivity;
    }

    /**
     * @param ThirdpartyActivityDTO $thirdpartyActivity
     */
    public function setThirdpartyActivity(ThirdpartyActivityDTO $thirdpartyActivity): void
    {
        $this->thirdpartyActivity = $thirdpartyActivity;
    }

    /**
     * @return int
     */
    public function getVersionNo(): int
    {
        return $this->versionNo;
    }

    /**
     * @param int $versionNo
     */
    public function setVersionNo(int $versionNo): void
    {
        $this->versionNo = $versionNo;
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