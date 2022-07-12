<?php

namespace Com\Youzan\Cloud\Extension\Param\Dto;

use Com\Youzan\Cloud\Extension\Param\Dto\ValueCardExtProductBuyDTO;
use Com\Youzan\Cloud\Extension\Param\Dto\ValueCardExtValidTimeRuleDTO;

/**
 * 详细信息
 * @author Baymax
 * @create Mon Mar 14 19:16:10 CST 2022
 */
class ValueCardBuyDetailDTO implements \JsonSerializable {

    /**
     * SPU编号（商品级别,调用方生成,长度不得大于24）
     * @var string
     */
    private $productSpuNo;

    /**
     * 模板名称
     * @var string
     */
    private $templateName;

    /**
     * 模板图片（http全路径,最大长度不得大于225）
     * @var string
     */
    private $templateImg;

    /**
     * 模板使用说明
     * @var string
     */
    private $instructions;

    /**
     * 子商品（SKU）集合
     * @var array
     */
    private $productInfos;

    /**
     * 卡模板有效期设置
     * @var ValueCardExtValidTimeRuleDTO
     */
    private $validTimeRule;



    /**
     * @return string
     */
    public function getProductSpuNo(): ?string
    {
        return $this->productSpuNo;
    }

    /**
     * @param string $productSpuNo
     */
    public function setProductSpuNo(?string $productSpuNo): void
    {
        $this->productSpuNo = $productSpuNo;
    }

    /**
     * @return string
     */
    public function getTemplateName(): ?string
    {
        return $this->templateName;
    }

    /**
     * @param string $templateName
     */
    public function setTemplateName(?string $templateName): void
    {
        $this->templateName = $templateName;
    }

    /**
     * @return string
     */
    public function getTemplateImg(): ?string
    {
        return $this->templateImg;
    }

    /**
     * @param string $templateImg
     */
    public function setTemplateImg(?string $templateImg): void
    {
        $this->templateImg = $templateImg;
    }

    /**
     * @return string
     */
    public function getInstructions(): ?string
    {
        return $this->instructions;
    }

    /**
     * @param string $instructions
     */
    public function setInstructions(?string $instructions): void
    {
        $this->instructions = $instructions;
    }

    /**
     * @return array
     */
    public function getProductInfos(): ?array
    {
        return $this->productInfos;
    }

    /**
     * @param array $productInfos
     */
    public function setProductInfos(?array $productInfos): void
    {
        $this->productInfos = $productInfos;
    }

    /**
     * @return ValueCardExtValidTimeRuleDTO
     */
    public function getValidTimeRule(): ?ValueCardExtValidTimeRuleDTO
    {
        return $this->validTimeRule;
    }

    /**
     * @param ValueCardExtValidTimeRuleDTO $validTimeRule
     */
    public function setValidTimeRule(?ValueCardExtValidTimeRuleDTO $validTimeRule): void
    {
        $this->validTimeRule = $validTimeRule;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}