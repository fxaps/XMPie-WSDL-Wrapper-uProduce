<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\ApplicationServices\Destination_SSP;

class GetFFPMQueuesXMPTblDataSetResponse
{

    /**
     * @var XMPTblDataSet $GetFFPMQueuesXMPTblDataSetResult
     */
    protected $GetFFPMQueuesXMPTblDataSetResult = null;

    /**
     * @param XMPTblDataSet $GetFFPMQueuesXMPTblDataSetResult
     */
    public function __construct($GetFFPMQueuesXMPTblDataSetResult = null)
    {
        $this->GetFFPMQueuesXMPTblDataSetResult = $GetFFPMQueuesXMPTblDataSetResult;
    }

    /**
     * @return XMPTblDataSet
     */
    public function getGetFFPMQueuesXMPTblDataSetResult()
    {
        return $this->GetFFPMQueuesXMPTblDataSetResult;
    }

    /**
     * @param XMPTblDataSet $GetFFPMQueuesXMPTblDataSetResult
     * @return GetFFPMQueuesXMPTblDataSetResponse
     */
    public function setGetFFPMQueuesXMPTblDataSetResult($GetFFPMQueuesXMPTblDataSetResult)
    {
        $this->GetFFPMQueuesXMPTblDataSetResult = $GetFFPMQueuesXMPTblDataSetResult;
        return $this;
    }

}
