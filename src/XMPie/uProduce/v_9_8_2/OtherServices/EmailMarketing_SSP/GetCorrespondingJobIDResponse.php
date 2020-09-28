<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\OtherServices\EmailMarketing_SSP;

class GetCorrespondingJobIDResponse
{

    /**
     * @var string $GetCorrespondingJobIDResult
     */
    protected $GetCorrespondingJobIDResult = null;

    /**
     * @param string $GetCorrespondingJobIDResult
     */
    public function __construct($GetCorrespondingJobIDResult = null)
    {
        $this->GetCorrespondingJobIDResult = $GetCorrespondingJobIDResult;
    }

    /**
     * @return string
     */
    public function getGetCorrespondingJobIDResult()
    {
        return $this->GetCorrespondingJobIDResult;
    }

    /**
     * @param string $GetCorrespondingJobIDResult
     * @return GetCorrespondingJobIDResponse
     */
    public function setGetCorrespondingJobIDResult($GetCorrespondingJobIDResult)
    {
        $this->GetCorrespondingJobIDResult = $GetCorrespondingJobIDResult;
        return $this;
    }

}
