<?php

namespace Com\Youzan\Cloud\Extension\Param\Ext;



/**
 * 1
 * @author Baymax
 * @create 2020-03-18 14:45:32.0
 */
class RequestDTO implements \JsonSerializable {

    /**
     * test
     * @var string
     */
    private $kdtId;

    /**
     * 
     * @var array
     */
    private $testId;



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
     * @return array
     */
    public function getTestId(): ?array
    {
        return $this->testId;
    }

    /**
     * @param array $testId
     */
    public function setTestId(?array $testId): void
    {
        $this->testId = $testId;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}