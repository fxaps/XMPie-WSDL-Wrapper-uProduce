<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_11_1\BasicServices\Document_SSP;

class GetPropertiesResponse
{

    /**
     * @var ArrayOfProperty $GetPropertiesResult
     */
    protected $GetPropertiesResult = null;

    /**
     * @param ArrayOfProperty $GetPropertiesResult
     */
    public function __construct($GetPropertiesResult = null)
    {
      $this->GetPropertiesResult = $GetPropertiesResult;
    }

    /**
     * @return ArrayOfProperty
     */
    public function getGetPropertiesResult()
    {
      return $this->GetPropertiesResult;
    }

    /**
     * @param ArrayOfProperty $GetPropertiesResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_11_1\BasicServices\Document_SSP\GetPropertiesResponse
     */
    public function setGetPropertiesResult($GetPropertiesResult)
    {
      $this->GetPropertiesResult = $GetPropertiesResult;
      return $this;
    }

}
