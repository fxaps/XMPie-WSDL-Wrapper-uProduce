<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_12_0_1\ProductionServices\Job_SSP;

class DeleteOutputResultsResponse
{

    /**
     * @var boolean $DeleteOutputResultsResult
     */
    protected $DeleteOutputResultsResult = null;

    /**
     * @param boolean $DeleteOutputResultsResult
     */
    public function __construct($DeleteOutputResultsResult = null)
    {
      $this->DeleteOutputResultsResult = $DeleteOutputResultsResult;
    }

    /**
     * @return boolean
     */
    public function getDeleteOutputResultsResult()
    {
      return $this->DeleteOutputResultsResult;
    }

    /**
     * @param boolean $DeleteOutputResultsResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_12_0_1\ProductionServices\Job_SSP\DeleteOutputResultsResponse
     */
    public function setDeleteOutputResultsResult($DeleteOutputResultsResult)
    {
      $this->DeleteOutputResultsResult = $DeleteOutputResultsResult;
      return $this;
    }

}
