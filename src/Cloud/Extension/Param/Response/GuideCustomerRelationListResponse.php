<?php

namespace Com\Youzan\Cloud\Extension\Param\Response;

use Com\Youzan\Cloud\Extension\Param\Response\GuideCustomerRelationResponse;

/**
 * 
 * @author Baymax
 * @create 2021-11-16 18:29:55.0
 */
class GuideCustomerRelationListResponse implements \JsonSerializable {

    /**
     * 
     * @var array
     */
    private $relations;

    /**
     * 是否需要有赞侧调用一次原有的逻辑
     * @var bool
     */
    private $needInvokeByYouzan;



    /**
     * @return array
     */
    public function getRelations(): ?array
    {
        return $this->relations;
    }

    /**
     * @param array $relations
     */
    public function setRelations(?array $relations): void
    {
        $this->relations = $relations;
    }

    /**
     * @return bool
     */
    public function getNeedInvokeByYouzan(): ?bool
    {
        return $this->needInvokeByYouzan;
    }

    /**
     * @param bool $needInvokeByYouzan
     */
    public function setNeedInvokeByYouzan(?bool $needInvokeByYouzan): void
    {
        $this->needInvokeByYouzan = $needInvokeByYouzan;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}