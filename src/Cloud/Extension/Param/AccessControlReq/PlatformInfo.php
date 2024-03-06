<?php

namespace Com\Youzan\Cloud\Extension\Param\AccessControlReq;



/**
 * 登录平台信息
 * @author Baymax
 * @create Tue Sep 12 16:11:15 CST 2023
 */
class PlatformInfo implements \JsonSerializable {

    /**
     * 平台标识，如&quot;bankabc&quot;
     * @var string
     */
    private $platform;

    /**
     * 平台类型，与fansType语义上一致，用于区分不同的粉丝类型
     * @var int
     */
    private $platformType;



    /**
     * @return string
     */
    public function getPlatform(): ?string
    {
        return $this->platform;
    }

    /**
     * @param string $platform
     */
    public function setPlatform(?string $platform): void
    {
        $this->platform = $platform;
    }

    /**
     * @return int
     */
    public function getPlatformType(): ?int
    {
        return $this->platformType;
    }

    /**
     * @param int $platformType
     */
    public function setPlatformType(?int $platformType): void
    {
        $this->platformType = $platformType;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}