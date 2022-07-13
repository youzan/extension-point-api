<?php

namespace Com\Youzan\Cloud\Extension\Param\Request;



/**
 *  
 * @author Baymax
 * @create Thu Jan 13 22:40:52 CST 2022
 */
class ReceptionistQueryDTO implements \JsonSerializable {

    /**
     * 店铺在有赞的id标识，有赞平台生成，在有赞平台唯一，用于判断信息属于哪一个店铺
     * @var string
     */
    private $kdtId;

    /**
     * 有赞用户ID，在有赞平台账号平台下唯一
     * @var int
     */
    private $adminId;



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
     * @return int
     */
    public function getAdminId(): ?int
    {
        return $this->adminId;
    }

    /**
     * @param int $adminId
     */
    public function setAdminId(?int $adminId): void
    {
        $this->adminId = $adminId;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}