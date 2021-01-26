<?php

namespace Com\Youzan\Cloud\Extension\Param\Voucher;

use StdClass;

/**
 * 
 * @author Baymax
 * @create 2020-02-12 16:35:56.0
 */
class VoucherQueryExtPointRequest implements \JsonSerializable {

    /**
     * 外部券id
     * @var int
     */
    private $id;

    /**
     * 扩展点版本号
     * @var int
     */
    private $versionNo;

    /**
     * 扩展字段
     * @var stdClass
     */
    private $extMap;

    /**
     * 当前店铺Id
     * @var int
     */
    private $kdtId;

    /**
     * 总部店铺Id，若为单店，则该值为当前店铺Id
     * @var int
     */
    private $rootKdtId;



    /**
     * @return int
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(?int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return int
     */
    public function getVersionNo(): ?int
    {
        return $this->versionNo;
    }

    /**
     * @param int $versionNo
     */
    public function setVersionNo(?int $versionNo): void
    {
        $this->versionNo = $versionNo;
    }

    /**
     * @return stdClass
     */
    public function getExtMap(): ?stdClass
    {
        return $this->extMap;
    }

    /**
     * @param stdClass $extMap
     */
    public function setExtMap(?stdClass $extMap): void
    {
        $this->extMap = $extMap;
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

    /**
     * @return int
     */
    public function getRootKdtId(): ?int
    {
        return $this->rootKdtId;
    }

    /**
     * @param int $rootKdtId
     */
    public function setRootKdtId(?int $rootKdtId): void
    {
        $this->rootKdtId = $rootKdtId;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}