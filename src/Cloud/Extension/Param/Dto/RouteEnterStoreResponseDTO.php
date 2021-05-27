<?php

namespace Com\Youzan\Cloud\Extension\Param\Dto;



/**
 * 
 * @author Baymax
 * @create 2021-05-24 20:23:00.0
 */
class RouteEnterStoreResponseDTO implements \JsonSerializable {

    /**
     * 
     * @var int
     */
    private $offlineId;



    /**
     * @return int
     */
    public function getOfflineId(): ?int
    {
        return $this->offlineId;
    }

    /**
     * @param int $offlineId
     */
    public function setOfflineId(?int $offlineId): void
    {
        $this->offlineId = $offlineId;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}