<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_8_2_3\UndocumentedServices\Population_SSP;

class GetSupportedOperationsResponse
{

    /**
     * @var SupportedOperationsInfo $GetSupportedOperationsResult
     */
    protected $GetSupportedOperationsResult = null;

    /**
     * @param SupportedOperationsInfo $GetSupportedOperationsResult
     */
    public function __construct($GetSupportedOperationsResult = null)
    {
      $this->GetSupportedOperationsResult = $GetSupportedOperationsResult;
    }

    /**
     * @return SupportedOperationsInfo
     */
    public function getGetSupportedOperationsResult()
    {
      return $this->GetSupportedOperationsResult;
    }

    /**
     * @param SupportedOperationsInfo $GetSupportedOperationsResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_8_2_3\UndocumentedServices\Population_SSP\GetSupportedOperationsResponse
     */
    public function setGetSupportedOperationsResult($GetSupportedOperationsResult)
    {
      $this->GetSupportedOperationsResult = $GetSupportedOperationsResult;
      return $this;
    }

}
