<?php

namespace Com\Youzan\Cloud\Extension\Param\Request;

use StdClass;

/**
 * 修改等级入参
 * @author Baymax
 * @create 2021-07-09 13:21:54.0
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
     * 多店铺流量路由标识，这里是kdtId
     * @var string
     */
    private $bizTrafficId;

    /**
     * 扩展信息
     * @var stdClass
     */
    private $extensionMap;

    /**
     * 用户id
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