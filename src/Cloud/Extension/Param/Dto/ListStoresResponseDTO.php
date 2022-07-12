<?php

namespace Com\Youzan\Cloud\Extension\Param\Dto;



/**
 * 
 * @author Baymax
 * @create 2021-05-25 19:58:33.0
 */
class ListStoresResponseDTO implements \JsonSerializable {

    /**
     * 需要排除的网点id列表
     * @var array
     */
    private $offlineIds;

    /**
     * 业务处理信息
     * @var string
     */
    private $message;



    /**
     * @return array
     */
    public function getOfflineIds(): ?array
    {
        return $this->offlineIds;
    }

    /**
     * @param array $offlineIds
     */
    public function setOfflineIds(?array $offlineIds): void
    {
        $this->offlineIds = $offlineIds;
    }

    /**
     * @return string
     */
    public function getMessage(): ?string
    {
        return $this->message;
    }

    /**
     * @param string $message
     */
    public function setMessage(?string $message): void
    {
        $this->message = $message;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}