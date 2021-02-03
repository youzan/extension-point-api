<?php

namespace Com\Youzan\Cloud\Extension\Param;



/**
 * 
 * @author Baymax
 * @create 2018-10-11 13:17:41.0
 */
class MessageTestDTO implements \JsonSerializable {

    /**
     * 店铺id
     * @var int
     */
    private $kdtId;

    /**
     * 消息信息
     * @var string
     */
    private $messageInfo;

    /**
     * 获取时间
     * @var string
     */
    private $dataTime;



    /**
     * @return int
     */
    public function getKdtId(): int
    {
        return $this->kdtId;
    }

    /**
     * @param int $kdtId
     */
    public function setKdtId(int $kdtId): void
    {
        $this->kdtId = $kdtId;
    }

    /**
     * @return string
     */
    public function getMessageInfo(): string
    {
        return $this->messageInfo;
    }

    /**
     * @param string $messageInfo
     */
    public function setMessageInfo(string $messageInfo): void
    {
        $this->messageInfo = $messageInfo;
    }

    /**
     * @return string
     */
    public function getDataTime(): string
    {
        return $this->dataTime;
    }

    /**
     * @param string $dataTime
     */
    public function setDataTime(string $dataTime): void
    {
        $this->dataTime = $dataTime;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}