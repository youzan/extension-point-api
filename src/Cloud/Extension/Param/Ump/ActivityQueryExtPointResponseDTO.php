<?php

namespace Com\Youzan\Cloud\Extension\Param\Ump;

use Com\Youzan\Cloud\Extension\Param\Ump\ThirdpartyActivityDTO;

/**
 * 
 * @author Baymax
 * @create 2019-07-23 20:10:40.0
 */
class ActivityQueryExtPointResponseDTO implements \JsonSerializable {

    /**
     * 活动信息
     * @var ThirdpartyActivityDTO
     */
    private $thirdpartyActivity;



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

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}