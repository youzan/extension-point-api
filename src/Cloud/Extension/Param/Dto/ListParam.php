<?php

namespace Com\Youzan\Cloud\Extension\Param\Dto;

use StdClass;

/**
 * a
 * @author Baymax
 * @create Tue Dec 28 20:39:24 CST 2021
 */
class ListParam implements \JsonSerializable {

    /**
     * a
     * @var string
     */
    private $listStringParam;

    /**
     * a
     * @var bool
     */
    private $listBooleanParam;

    /**
     * a
     * @var stdClass
     */
    private $listMap;

    /**
     * a
     * @var int
     */
    private $listIntParam;



    /**
     * @return string
     */
    public function getListStringParam(): ?string
    {
        return $this->listStringParam;
    }

    /**
     * @param string $listStringParam
     */
    public function setListStringParam(?string $listStringParam): void
    {
        $this->listStringParam = $listStringParam;
    }

    /**
     * @return bool
     */
    public function getListBooleanParam(): ?bool
    {
        return $this->listBooleanParam;
    }

    /**
     * @param bool $listBooleanParam
     */
    public function setListBooleanParam(?bool $listBooleanParam): void
    {
        $this->listBooleanParam = $listBooleanParam;
    }

    /**
     * @return stdClass
     */
    public function getListMap(): ?stdClass
    {
        return $this->listMap;
    }

    /**
     * @param stdClass $listMap
     */
    public function setListMap(?stdClass $listMap): void
    {
        $this->listMap = $listMap;
    }

    /**
     * @return int
     */
    public function getListIntParam(): ?int
    {
        return $this->listIntParam;
    }

    /**
     * @param int $listIntParam
     */
    public function setListIntParam(?int $listIntParam): void
    {
        $this->listIntParam = $listIntParam;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}