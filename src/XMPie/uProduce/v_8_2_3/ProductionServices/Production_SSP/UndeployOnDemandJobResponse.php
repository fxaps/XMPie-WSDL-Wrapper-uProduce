<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_8_2_3\ProductionServices\Production_SSP;

class UndeployOnDemandJobResponse
{

    /**
     * @var boolean $UndeployOnDemandJobResult
     */
    protected $UndeployOnDemandJobResult = null;

    /**
     * @param boolean $UndeployOnDemandJobResult
     */
    public function __construct($UndeployOnDemandJobResult = null)
    {
      $this->UndeployOnDemandJobResult = $UndeployOnDemandJobResult;
    }

    /**
     * @return boolean
     */
    public function getUndeployOnDemandJobResult()
    {
      return $this->UndeployOnDemandJobResult;
    }

    /**
     * @param boolean $UndeployOnDemandJobResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_8_2_3\ProductionServices\Production_SSP\UndeployOnDemandJobResponse
     */
    public function setUndeployOnDemandJobResult($UndeployOnDemandJobResult)
    {
      $this->UndeployOnDemandJobResult = $UndeployOnDemandJobResult;
      return $this;
    }

}
