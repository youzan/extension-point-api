<?php

namespace Com\Youzan\Cloud\Extension\Param\Task;



/**
 *  
 * @author Baymax
 * @create Mon Mar 14 16:49:27 CST 2022
 */
class ExtTaskAwardSendRule implements \JsonSerializable {

    /**
     * 奖励规则类型：points:会员积分，money:现金奖励，card:会员卡
     * @var string
     */
    private $type;

    /**
     * 若type &#x3D;&#x3D; card 需要指定会员卡 alias
     * @var string
     */
    private $ident;

    /**
     * 奖励的数量：如果是 type &#x3D;&#x3D; money,单位（分）,如果type &#x3D;&#x3D; points,单位（积分），如果 type &#x3D;&#x3D; card ，单位是（张）
     * @var int
     */
    private $value;



    /**
     * @return string
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType(?string $type): void
    {
        $this->type = $type;
    }

    /**
     * @return string
     */
    public function getIdent(): ?string
    {
        return $this->ident;
    }

    /**
     * @param string $ident
     */
    public function setIdent(?string $ident): void
    {
        $this->ident = $ident;
    }

    /**
     * @return int
     */
    public function getValue(): ?int
    {
        return $this->value;
    }

    /**
     * @param int $value
     */
    public function setValue(?int $value): void
    {
        $this->value = $value;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}