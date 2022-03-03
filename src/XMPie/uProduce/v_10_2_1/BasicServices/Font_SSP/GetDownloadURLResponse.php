<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_10_2_1\BasicServices\Font_SSP;

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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_10_2_1\BasicServices\Font_SSP\GetDownloadURLResponse
     */
    public function setGetDownloadURLResult($GetDownloadURLResult)
    {
      $this->GetDownloadURLResult = $GetDownloadURLResult;
      return $this;
    }

}
