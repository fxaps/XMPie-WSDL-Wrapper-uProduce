<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_11_2_2\UndocumentedServices\Population_SSP;

class GetSchemaNamesResponse
{

    /**
     * @var ArrayOfString $GetSchemaNamesResult
     */
    protected $GetSchemaNamesResult = null;

    /**
     * @param ArrayOfString $GetSchemaNamesResult
     */
    public function __construct($GetSchemaNamesResult = null)
    {
      $this->GetSchemaNamesResult = $GetSchemaNamesResult;
    }

    /**
     * @return ArrayOfString
     */
    public function getGetSchemaNamesResult()
    {
      return $this->GetSchemaNamesResult;
    }

    /**
     * @param ArrayOfString $GetSchemaNamesResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_11_2_2\UndocumentedServices\Population_SSP\GetSchemaNamesResponse
     */
    public function setGetSchemaNamesResult($GetSchemaNamesResult)
    {
      $this->GetSchemaNamesResult = $GetSchemaNamesResult;
      return $this;
    }

}
