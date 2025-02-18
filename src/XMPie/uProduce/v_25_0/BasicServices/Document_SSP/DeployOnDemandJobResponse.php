<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_25_0\BasicServices\Document_SSP;

class DeployOnDemandJobResponse
{

    /**
     * @var string $DeployOnDemandJobResult
     */
    protected $DeployOnDemandJobResult = null;

    /**
     * @param string $DeployOnDemandJobResult
     */
    public function __construct($DeployOnDemandJobResult = null)
    {
      $this->DeployOnDemandJobResult = $DeployOnDemandJobResult;
    }

    /**
     * @return string
     */
    public function getDeployOnDemandJobResult()
    {
      return $this->DeployOnDemandJobResult;
    }

    /**
     * @param string $DeployOnDemandJobResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_25_0\BasicServices\Document_SSP\DeployOnDemandJobResponse
     */
    public function setDeployOnDemandJobResult($DeployOnDemandJobResult)
    {
      $this->DeployOnDemandJobResult = $DeployOnDemandJobResult;
      return $this;
    }

}
