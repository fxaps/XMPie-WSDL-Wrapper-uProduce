<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\ProductionServices\JobTicket_SSP;

class GetCustomizationsResponse
{

    /**
     * @var ArrayOfCustomization $GetCustomizationsResult
     */
    protected $GetCustomizationsResult = null;

    /**
     * @param ArrayOfCustomization $GetCustomizationsResult
     */
    public function __construct($GetCustomizationsResult = null)
    {
        $this->GetCustomizationsResult = $GetCustomizationsResult;
    }

    /**
     * @return ArrayOfCustomization
     */
    public function getGetCustomizationsResult()
    {
        return $this->GetCustomizationsResult;
    }

    /**
     * @param ArrayOfCustomization $GetCustomizationsResult
     * @return GetCustomizationsResponse
     */
    public function setGetCustomizationsResult($GetCustomizationsResult)
    {
        $this->GetCustomizationsResult = $GetCustomizationsResult;
        return $this;
    }

}
