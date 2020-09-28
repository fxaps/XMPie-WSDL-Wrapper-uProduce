<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\BasicServices\Document_SSP;

class GetResourceDownloadURLByIDResponse
{

    /**
     * @var string $GetResourceDownloadURLByIDResult
     */
    protected $GetResourceDownloadURLByIDResult = null;

    /**
     * @param string $GetResourceDownloadURLByIDResult
     */
    public function __construct($GetResourceDownloadURLByIDResult = null)
    {
        $this->GetResourceDownloadURLByIDResult = $GetResourceDownloadURLByIDResult;
    }

    /**
     * @return string
     */
    public function getGetResourceDownloadURLByIDResult()
    {
        return $this->GetResourceDownloadURLByIDResult;
    }

    /**
     * @param string $GetResourceDownloadURLByIDResult
     * @return GetResourceDownloadURLByIDResponse
     */
    public function setGetResourceDownloadURLByIDResult($GetResourceDownloadURLByIDResult)
    {
        $this->GetResourceDownloadURLByIDResult = $GetResourceDownloadURLByIDResult;
        return $this;
    }

}
