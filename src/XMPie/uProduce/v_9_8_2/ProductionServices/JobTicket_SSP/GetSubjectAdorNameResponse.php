<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\ProductionServices\JobTicket_SSP;

class GetSubjectAdorNameResponse
{

    /**
     * @var string $GetSubjectAdorNameResult
     */
    protected $GetSubjectAdorNameResult = null;

    /**
     * @param string $GetSubjectAdorNameResult
     */
    public function __construct($GetSubjectAdorNameResult = null)
    {
        $this->GetSubjectAdorNameResult = $GetSubjectAdorNameResult;
    }

    /**
     * @return string
     */
    public function getGetSubjectAdorNameResult()
    {
        return $this->GetSubjectAdorNameResult;
    }

    /**
     * @param string $GetSubjectAdorNameResult
     * @return GetSubjectAdorNameResponse
     */
    public function setGetSubjectAdorNameResult($GetSubjectAdorNameResult)
    {
        $this->GetSubjectAdorNameResult = $GetSubjectAdorNameResult;
        return $this;
    }

}
