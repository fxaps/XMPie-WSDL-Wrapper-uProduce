<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\ProductionServices\Jobs_SSP;

class DeleteJobsByFilterResponse
{

    /**
     * @var int $DeleteJobsByFilterResult
     */
    protected $DeleteJobsByFilterResult = null;

    /**
     * @param int $DeleteJobsByFilterResult
     */
    public function __construct($DeleteJobsByFilterResult = null)
    {
        $this->DeleteJobsByFilterResult = $DeleteJobsByFilterResult;
    }

    /**
     * @return int
     */
    public function getDeleteJobsByFilterResult()
    {
        return $this->DeleteJobsByFilterResult;
    }

    /**
     * @param int $DeleteJobsByFilterResult
     * @return DeleteJobsByFilterResponse
     */
    public function setDeleteJobsByFilterResult($DeleteJobsByFilterResult)
    {
        $this->DeleteJobsByFilterResult = $DeleteJobsByFilterResult;
        return $this;
    }

}
