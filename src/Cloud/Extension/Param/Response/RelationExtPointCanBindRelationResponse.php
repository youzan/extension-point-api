<?php

namespace Com\Youzan\Cloud\Extension\Param\Response;



/**
 * 响应结果body
 * @author Baymax
 * @create Mon Aug 22 16:50:59 CST 2022
 */
class RelationExtPointCanBindRelationResponse implements \JsonSerializable {

    /**
     * 是否允许绑定 true:是 ，false:否
     * @var bool
     */
    private $allowBind;

    /**
     * 描述文案信息
     * @var string
     */
    private $desc;



    /**
     * @return bool
     */
    public function getAllowBind(): ?bool
    {
        return $this->allowBind;
    }

    /**
     * @param bool $allowBind
     */
    public function setAllowBind(?bool $allowBind): void
    {
        $this->allowBind = $allowBind;
    }

    /**
     * @return string
     */
    public function getDesc(): ?string
    {
        return $this->desc;
    }

    /**
     * @param string $desc
     */
    public function setDesc(?string $desc): void
    {
        $this->desc = $desc;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}