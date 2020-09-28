<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\BasicServices\Campaign_SSP;

class DeletePopulationsResponse
{

    /**
     * @var boolean $DeletePopulationsResult
     */
    protected $DeletePopulationsResult = null;

    /**
     * @param boolean $DeletePopulationsResult
     */
    public function __construct($DeletePopulationsResult = null)
    {
        $this->DeletePopulationsResult = $DeletePopulationsResult;
    }

    /**
     * @return boolean
     */
    public function getDeletePopulationsResult()
    {
        return $this->DeletePopulationsResult;
    }

    /**
     * @param boolean $DeletePopulationsResult
     * @return DeletePopulationsResponse
     */
    public function setDeletePopulationsResult($DeletePopulationsResult)
    {
        $this->DeletePopulationsResult = $DeletePopulationsResult;
        return $this;
    }

}
