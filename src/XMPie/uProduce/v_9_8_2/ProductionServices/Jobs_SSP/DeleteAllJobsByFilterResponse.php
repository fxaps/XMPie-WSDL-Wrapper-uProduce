<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\ProductionServices\Jobs_SSP;

class DeleteAllJobsByFilterResponse
{

    /**
     * @var boolean $DeleteAllJobsByFilterResult
     */
    protected $DeleteAllJobsByFilterResult = null;

    /**
     * @param boolean $DeleteAllJobsByFilterResult
     */
    public function __construct($DeleteAllJobsByFilterResult = null)
    {
        $this->DeleteAllJobsByFilterResult = $DeleteAllJobsByFilterResult;
    }

    /**
     * @return boolean
     */
    public function getDeleteAllJobsByFilterResult()
    {
        return $this->DeleteAllJobsByFilterResult;
    }

    /**
     * @param boolean $DeleteAllJobsByFilterResult
     * @return DeleteAllJobsByFilterResponse
     */
    public function setDeleteAllJobsByFilterResult($DeleteAllJobsByFilterResult)
    {
        $this->DeleteAllJobsByFilterResult = $DeleteAllJobsByFilterResult;
        return $this;
    }

}
