<?php

namespace Com\Youzan\Cloud\Extension\Param\Dto;



/**
 * 响应体
 * @author Baymax
 * @create Thu Jan 13 20:35:59 CST 2022
 */
class RouteEnterStoreResponseDTO implements \JsonSerializable {

    /**
     * 网点offline_id
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