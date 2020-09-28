<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\BasicServices\DataSourcePlanUtils_SSP;

class GetCompatibleTablesByInfoForHostingResponse
{

    /**
     * @var ArrayOfString $GetCompatibleTablesByInfoForHostingResult
     */
    protected $GetCompatibleTablesByInfoForHostingResult = null;

    /**
     * @param ArrayOfString $GetCompatibleTablesByInfoForHostingResult
     */
    public function __construct($GetCompatibleTablesByInfoForHostingResult = null)
    {
        $this->GetCompatibleTablesByInfoForHostingResult = $GetCompatibleTablesByInfoForHostingResult;
    }

    /**
     * @return ArrayOfString
     */
    public function getGetCompatibleTablesByInfoForHostingResult()
    {
        return $this->GetCompatibleTablesByInfoForHostingResult;
    }

    /**
     * @param ArrayOfString $GetCompatibleTablesByInfoForHostingResult
     * @return GetCompatibleTablesByInfoForHostingResponse
     */
    public function setGetCompatibleTablesByInfoForHostingResult($GetCompatibleTablesByInfoForHostingResult)
    {
        $this->GetCompatibleTablesByInfoForHostingResult = $GetCompatibleTablesByInfoForHostingResult;
        return $this;
    }

}
