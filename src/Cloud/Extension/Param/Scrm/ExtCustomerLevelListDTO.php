<?php

namespace Com\Youzan\Cloud\Extension\Param\Scrm;

use Com\Youzan\Cloud\Extension\Param\Scrm\ExtCustomerLevelDTO;
use Com\Youzan\Cloud\Extension\Param\Response\ExtLevelProgressDTO;

/**
 *  
 * @author Baymax
 * @create Thu May 22 14:19:59 CST 2025
 */
class ExtCustomerLevelListDTO implements \JsonSerializable {

    /**
     * 用户等级列表
     * @var array
     */
    private $extCustomerLevelDTOList;

    /**
     * 免费等级升级进度信息，为空时，会用有赞的等级去计算进度信息
     * @var array
     */
    private $freeLevelProgressDTOList;



    /**
     * @return array
     */
    public function getExtCustomerLevelDTOList(): ?array
    {
        return $this->extCustomerLevelDTOList;
    }

    /**
     * @param array $extCustomerLevelDTOList
     */
    public function setExtCustomerLevelDTOList(?array $extCustomerLevelDTOList): void
    {
        $this->extCustomerLevelDTOList = $extCustomerLevelDTOList;
    }

    /**
     * @return array
     */
    public function getFreeLevelProgressDTOList(): ?array
    {
        return $this->freeLevelProgressDTOList;
    }

    /**
     * @param array $freeLevelProgressDTOList
     */
    public function setFreeLevelProgressDTOList(?array $freeLevelProgressDTOList): void
    {
        $this->freeLevelProgressDTOList = $freeLevelProgressDTOList;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}