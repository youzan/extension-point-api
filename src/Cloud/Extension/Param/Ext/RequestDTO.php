<?php

namespace Com\Youzan\Cloud\Extension\Param\Ext;



/**
 * 1
 * @author Baymax
 * @create 2020-03-18 14:45:32.0
 */
class RequestDTO implements \JsonSerializable {

    /**
     * kdtId参数说明1
     * @var string
     */
    private $kdtId;

    /**
     * id2参数说明2
     * @var string
     */
    private $id2;

    /**
     * id3参数说明3
     * @var string
     */
    private $id3;

    /**
     * id4参数说明4
     * @var string
     */
    private $id4;

    /**
     * id5参数说明5
     * @var string
     */
    private $id5;



    /**
     * @return string
     */
    public function getKdtId(): ?string
    {
        return $this->kdtId;
    }

    /**
     * @param string $kdtId
     */
    public function setKdtId(?string $kdtId): void
    {
        $this->kdtId = $kdtId;
    }

    /**
     * @return string
     */
    public function getId2(): ?string
    {
        return $this->id2;
    }

    /**
     * @param string $id2
     */
    public function setId2(?string $id2): void
    {
        $this->id2 = $id2;
    }

    /**
     * @return string
     */
    public function getId3(): ?string
    {
        return $this->id3;
    }

    /**
     * @param string $id3
     */
    public function setId3(?string $id3): void
    {
        $this->id3 = $id3;
    }

    /**
     * @return string
     */
    public function getId4(): ?string
    {
        return $this->id4;
    }

    /**
     * @param string $id4
     */
    public function setId4(?string $id4): void
    {
        $this->id4 = $id4;
    }

    /**
     * @return string
     */
    public function getId5(): ?string
    {
        return $this->id5;
    }

    /**
     * @param string $id5
     */
    public function setId5(?string $id5): void
    {
        $this->id5 = $id5;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}