<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\BasicServices\Document_SSP;

class GetDeploymentURLResponse
{

    /**
     * @var string $GetDeploymentURLResult
     */
    protected $GetDeploymentURLResult = null;

    /**
     * @param string $GetDeploymentURLResult
     */
    public function __construct($GetDeploymentURLResult = null)
    {
        $this->GetDeploymentURLResult = $GetDeploymentURLResult;
    }

    /**
     * @return string
     */
    public function getGetDeploymentURLResult()
    {
        return $this->GetDeploymentURLResult;
    }

    /**
     * @param string $GetDeploymentURLResult
     * @return GetDeploymentURLResponse
     */
    public function setGetDeploymentURLResult($GetDeploymentURLResult)
    {
        $this->GetDeploymentURLResult = $GetDeploymentURLResult;
        return $this;
    }

}
