<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_10_2_1\ProductionServices\Production_SSP;

class DeleteOnDemandOutputResponse
{

    /**
     * @var boolean $DeleteOnDemandOutputResult
     */
    protected $DeleteOnDemandOutputResult = null;

    /**
     * @param boolean $DeleteOnDemandOutputResult
     */
    public function __construct($DeleteOnDemandOutputResult = null)
    {
      $this->DeleteOnDemandOutputResult = $DeleteOnDemandOutputResult;
    }

    /**
     * @return boolean
     */
    public function getDeleteOnDemandOutputResult()
    {
      return $this->DeleteOnDemandOutputResult;
    }

    /**
     * @param boolean $DeleteOnDemandOutputResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_10_2_1\ProductionServices\Production_SSP\DeleteOnDemandOutputResponse
     */
    public function setDeleteOnDemandOutputResult($DeleteOnDemandOutputResult)
    {
      $this->DeleteOnDemandOutputResult = $DeleteOnDemandOutputResult;
      return $this;
    }

}
