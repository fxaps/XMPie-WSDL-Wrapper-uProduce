<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_12_0_1\ProductionServices\Job_SSP;

class DeleteResponse
{

    /**
     * @var boolean $DeleteResult
     */
    protected $DeleteResult = null;

    /**
     * @param boolean $DeleteResult
     */
    public function __construct($DeleteResult = null)
    {
      $this->DeleteResult = $DeleteResult;
    }

    /**
     * @return boolean
     */
    public function getDeleteResult()
    {
      return $this->DeleteResult;
    }

    /**
     * @param boolean $DeleteResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_12_0_1\ProductionServices\Job_SSP\DeleteResponse
     */
    public function setDeleteResult($DeleteResult)
    {
      $this->DeleteResult = $DeleteResult;
      return $this;
    }

}
