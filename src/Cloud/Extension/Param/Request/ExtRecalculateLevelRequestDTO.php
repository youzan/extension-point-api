<?php

namespace Com\Youzan\Cloud\Extension\Param\Request;

use StdClass;

/**
 * 等级重算入参
 * @author Baymax
 * @create 2021-07-09 13:03:53.0
 */
class ExtRecalculateLevelRequestDTO implements \JsonSerializable {

    /**
     * 分店ID 同originKdtId
     * @var int
     */
    private $nodeKdtId;

    /**
     * 单店返回店铺id，连锁返回网店id
     * @var string
     */
    private $bizTrafficId;

    /**
     * 扩展信息
     * @var stdClass
     */
    private $extensionMap;

    /**
     * 用户id，有赞客户id，客户在有赞的唯一id。推荐使用  示例值：LnhGm4rh576452722916618240
     * @var int
     */
    private $yzOpenId;



    /**
     * @return int
     */
    public function getNodeKdtId(): ?int
    {
        return $this->nodeKdtId;
    }

    /**
     * @param int $nodeKdtId
     */
    public function setNodeKdtId(?int $nodeKdtId): void
    {
        $this->nodeKdtId = $nodeKdtId;
    }

    /**
     * @return string
     */
    public function getBizTrafficId(): ?string
    {
        return $this->bizTrafficId;
    }

    /**
     * @param string $bizTrafficId
     */
    public function setBizTrafficId(?string $bizTrafficId): void
    {
        $this->bizTrafficId = $bizTrafficId;
    }

    /**
     * @return stdClass
     */
    public function getExtensionMap(): ?stdClass
    {
        return $this->extensionMap;
    }

    /**
     * @param stdClass $extensionMap
     */
    public function setExtensionMap(?stdClass $extensionMap): void
    {
        $this->extensionMap = $extensionMap;
    }

    /**
     * @return int
     */
    public function getYzOpenId(): ?int
    {
        return $this->yzOpenId;
    }

    /**
     * @param int $yzOpenId
     */
    public function setYzOpenId(?int $yzOpenId): void
    {
        $this->yzOpenId = $yzOpenId;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}