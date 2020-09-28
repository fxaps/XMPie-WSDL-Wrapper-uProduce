<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\ProductionServices\Jobs_SSP;

class GetJobPageByFilterResponse
{

    /**
     * @var int $GetJobPageByFilterResult
     */
    protected $GetJobPageByFilterResult = null;

    /**
     * @param int $GetJobPageByFilterResult
     */
    public function __construct($GetJobPageByFilterResult = null)
    {
        $this->GetJobPageByFilterResult = $GetJobPageByFilterResult;
    }

    /**
     * @return int
     */
    public function getGetJobPageByFilterResult()
    {
        return $this->GetJobPageByFilterResult;
    }

    /**
     * @param int $GetJobPageByFilterResult
     * @return GetJobPageByFilterResponse
     */
    public function setGetJobPageByFilterResult($GetJobPageByFilterResult)
    {
        $this->GetJobPageByFilterResult = $GetJobPageByFilterResult;
        return $this;
    }

}
