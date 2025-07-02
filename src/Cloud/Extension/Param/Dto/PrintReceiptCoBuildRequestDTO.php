<?php

namespace Com\Youzan\Cloud\Extension\Param\Dto;

use StdClass;

/**
 * 请求参数
 * @author Baymax
 * @create Wed Jan 15 11:14:55 CST 2025
 */
class PrintReceiptCoBuildRequestDTO implements \JsonSerializable {

    /**
     * 硬件厂商标识，目前仅支持：107-芯烨
     * @var int
     */
    private $platform;

    /**
     * 硬件设备编号，机身号，硬件厂商下唯一
     * @var string
     */
    private $deviceNo;

    /**
     * 根据打印内容解析的打印指令，指令遵循ESC/POS协议
     * @var string
     */
    private $content;

    /**
     * 份数
     * @var int
     */
    private $copies;

    /**
     * 扩展字段
     * @var stdClass
     */
    private $ext;

    /**
     * 有赞店铺ID
     * @var int
     */
    private $kdtId;



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
     * @return string
     */
    public function getContent(): ?string
    {
        return $this->content;
    }

    /**
     * @param string $content
     */
    public function setContent(?string $content): void
    {
        $this->content = $content;
    }

    /**
     * @return int
     */
    public function getCopies(): ?int
    {
        return $this->copies;
    }

    /**
     * @param int $copies
     */
    public function setCopies(?int $copies): void
    {
        $this->copies = $copies;
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

    /**
     * @return int
     */
    public function getKdtId(): ?int
    {
        return $this->kdtId;
    }

    /**
     * @param int $kdtId
     */
    public function setKdtId(?int $kdtId): void
    {
        $this->kdtId = $kdtId;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}