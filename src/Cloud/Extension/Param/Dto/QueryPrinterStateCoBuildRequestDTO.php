<?php

namespace Com\Youzan\Cloud\Extension\Param\Dto;

use StdClass;

/**
 * 请求参数
 * @author Baymax
 * @create Thu Jan 09 17:50:47 CST 2025
 */
class QueryPrinterStateCoBuildRequestDTO implements \JsonSerializable {

    /**
     * 硬件厂商标识，目前仅支持：107-芯烨
     * @var int
     */
    private $platform;

    /**
     * 设备编号
     * @var string
     */
    private $deviceNo;

    /**
     * 扩展参数
     * @var stdClass
     */
    private $ext;



    /**
     * @return int
     */
    public function getPlatform(): ?int
    {
        return $this->platform;
    }

    /**
     * @param int $platform
     */
    public function setPlatform(?int $platform): void
    {
        $this->platform = $platform;
    }

    /**
     * @return string
     */
    public function getDeviceNo(): ?string
    {
        return $this->deviceNo;
    }

    /**
     * @param string $deviceNo
     */
    public function setDeviceNo(?string $deviceNo): void
    {
        $this->deviceNo = $deviceNo;
    }

    /**
     * @return stdClass
     */
    public function getExt(): ?stdClass
    {
        return $this->ext;
    }

    /**
     * @param stdClass $ext
     */
    public function setExt(?stdClass $ext): void
    {
        $this->ext = $ext;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}