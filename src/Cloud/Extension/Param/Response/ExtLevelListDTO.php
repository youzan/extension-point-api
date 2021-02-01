<?php

namespace Com\Youzan\Cloud\Extension\Param\Response;

use Com\Youzan\Cloud\Extension\Param\Response\ExtLevelDTO;

/**
 * 
 * @author Baymax
 * @create 2020-03-10 15:43:58.0
 */
class ExtLevelListDTO implements \JsonSerializable {

    /**
     * 
     * @var array
     */
    private $extLevelDTOList;



    /**
     * @return array
     */
    public function getExtLevelDTOList(): ?array
    {
        return $this->extLevelDTOList;
    }

    /**
     * @param array $extLevelDTOList
     */
    public function setExtLevelDTOList(?array $extLevelDTOList): void
    {
        $this->extLevelDTOList = $extLevelDTOList;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}