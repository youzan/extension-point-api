<?php

namespace Com\Youzan\Cloud\Extension\Param\Request;

use StdClass;

/**
 * 修改等级入参
 * @author Baymax
 * @create Wed Oct 16 14:14:54 CST 2024
 */
class ExtSetLevelRequestDTO implements \JsonSerializable {

    /**
     * 分店ID 同originKdtId
     * @var int
     */
    private $nodeKdtId;

    /**
     * 等级别名
     * @var string
     */
    private $levelAlias;

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
     * @var string
     */
    private $yzOpenId;

    /**
     * 版本时间戳，毫秒级时间戳
     * @var int
     */
    private $version;



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
    public function getLevelAlias(): ?string
    {
        return $this->levelAlias;
    }

    /**
     * @param string $levelAlias
     */
    public function setLevelAlias(?string $levelAlias): void
    {
        $this->levelAlias = $levelAlias;
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
     * @return string
     */
    public function getYzOpenId(): ?string
    {
        return $this->yzOpenId;
    }

    /**
     * @param string $yzOpenId
     */
    public function setYzOpenId(?string $yzOpenId): void
    {
        $this->yzOpenId = $yzOpenId;
    }

    /**
     * @return int
     */
    public function getVersion(): ?int
    {
        return $this->version;
    }

    /**
     * @param int $version
     */
    public function setVersion(?int $version): void
    {
        $this->version = $version;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}