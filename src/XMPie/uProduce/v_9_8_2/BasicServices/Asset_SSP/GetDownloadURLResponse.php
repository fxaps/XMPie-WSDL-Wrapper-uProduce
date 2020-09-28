<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\BasicServices\Asset_SSP;

class GetDownloadURLResponse
{

    /**
     * @var string $GetDownloadURLResult
     */
    protected $GetDownloadURLResult = null;

    /**
     * @param string $GetDownloadURLResult
     */
    public function __construct($GetDownloadURLResult = null)
    {
        $this->GetDownloadURLResult = $GetDownloadURLResult;
    }

    /**
     * @return string
     */
    public function getGetDownloadURLResult()
    {
        return $this->GetDownloadURLResult;
    }

    /**
     * @param string $GetDownloadURLResult
     * @return GetDownloadURLResponse
     */
    public function setGetDownloadURLResult($GetDownloadURLResult)
    {
        $this->GetDownloadURLResult = $GetDownloadURLResult;
        return $this;
    }

}
