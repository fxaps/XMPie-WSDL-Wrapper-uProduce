<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\OtherServices\InteractiveCampaign_SSP;

class GetDataSetByIDResponse
{

    /**
     * @var GetDataSetByIDResult $GetDataSetByIDResult
     */
    protected $GetDataSetByIDResult = null;

    /**
     * @param GetDataSetByIDResult $GetDataSetByIDResult
     */
    public function __construct($GetDataSetByIDResult = null)
    {
        $this->GetDataSetByIDResult = $GetDataSetByIDResult;
    }

    /**
     * @return GetDataSetByIDResult
     */
    public function getGetDataSetByIDResult()
    {
        return $this->GetDataSetByIDResult;
    }

    /**
     * @param GetDataSetByIDResult $GetDataSetByIDResult
     * @return GetDataSetByIDResponse
     */
    public function setGetDataSetByIDResult($GetDataSetByIDResult)
    {
        $this->GetDataSetByIDResult = $GetDataSetByIDResult;
        return $this;
    }

}
