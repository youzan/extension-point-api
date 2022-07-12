<?php

namespace Com\Youzan\Cloud\Extension\Param\Response;

use Com\Youzan\Cloud\Extension\Param\Response\GuideCustomerRelationResponse;

/**
 *  
 * @author Baymax
 * @create Fri Apr 22 14:09:02 CST 2022
 */
class GuideCustomerRelationQueryResponse implements \JsonSerializable {

    /**
     * 客户关系
     * @var GuideCustomerRelationResponse
     */
    private $relation;



    /**
     * @return GuideCustomerRelationResponse
     */
    public function getRelation(): ?GuideCustomerRelationResponse
    {
        return $this->relation;
    }

    /**
     * @param GuideCustomerRelationResponse $relation
     */
    public function setRelation(?GuideCustomerRelationResponse $relation): void
    {
        $this->relation = $relation;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}